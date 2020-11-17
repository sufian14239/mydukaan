<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\AttributeColor;
use App\AttributeSize;
use App\AttributeVariation;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\color_product;
use App\Product;
use App\Value;
use App\Gallery;
use App\product_size;
use App\size_product;
use Illuminate\Http\Request;
use NameThatColor;
use DB;
use App\Imports\ProductImport;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function products(){
        $products = Product::with(['product_size'])->where('user_id',Auth::id())->get();
        
        return view('admin.product-management.products.products-list', compact('products'));
    }

    public function delete_product(Request $request){
        $product = Product::find($request->id);
        $color_products = color_product::where('product_id', $request->id)->get();
        if($color_products){
            foreach($color_products as $row){
                $row->delete();
            }
        }
        $size_products = product_size::where('product_id', $request->id)->get();
        if($size_products){
            foreach($size_products as $row){
                $row->delete();
            }
        }
        $product->delete();
        $request->session()->flash('alert-success', 'One product removed.');
        return back();
    }
public function export() 
    {   
        $data =Excel::import(new ProductImport, request()->file('file'));
       
        return redirect()->back();
        // return Excel::download(new ProductsExport, 'product.xlsx');
    }
    public function new_product_form(){
    
        $categories = Category::with('subcategories')->get();
        $subcategories = Subcategory::all();
        $values = \App\Color::all();
        $brand = Brand::all();        
        return view('admin.product-management.products.new-product', ['categories' => $categories,'subcategories' => $subcategories,'brand' => $brand,'values'=>$values]);
    }
    public function getAllBrandsBySubcategory(Request $request){
        $brands=Brand::where('subcategory_id',$request->id)->get();
        return $brands;
    }

    public function get_attributes(Request $request){
        $attr = Attribute::find($request->attribute_id);
        $attribute = session()->get('attribute');
        // if attribute is empty then this the first product
        if(!$attribute){
            $attribute = [
                $request->attribute_id => [
                    "id" => $attr->id,
                    "name" => $attr->name,
                ]
            ];
            session()->put('attribute', $attribute);
        }
        // if item not exist in attribute then add to attribute with quantity = 1
        $attribute[$request->attribute_id] = [
            "id" => $attr->id,
            "name" => $attr->name,
        ];
        session()->put('attribute', $attribute);
        // $values = Value::where('attribute_id', $request->attribute_id)->get();
        return view('admin.product-management.products.get-attributes');
    }

    public function delete_attribute(Request $request){
        $attribute = session()->get('attribute');
        if(isset($attribute[$request->id])) {
            unset($attribute[$request->id]);
            session()->put('attribute', $attribute);
        }
        $attribute = session()->get('attribute');
        return view('admin.product-management.products.get-attributes', compact('attribute'));
    }

    public function delete_sesion_values(){
        session()->forget('attribute');
        return view('admin.product-management.products.get-attributes');
    }

    public function new_product_action(Request $request){
         $this->validate($request, [
            'p_name' => 'required',
        ],
        [
            'p_name.required' => 'Product name is required',
           
        ]
        );
         
        $product = new Product();
        $product->name = $request->p_name;
       
        $product->p_detail = $request->p_detail;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
         $product->from = $request->from;
        $product->to = $request->to;
        
        $product->p_description = $request->p_description;
        $product->category_id = $request->cat_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->user_id=Auth::id();

        // Product Thumbnail
        if($request->p_thumbnail){
            if($request->file('p_thumbnail')){
                $p_thumbnail = $request->file('p_thumbnail');
                $name=$p_thumbnail->getClientOriginalName();
                $p_thumbnail->move(public_path().'/thumbnail/', $name);
                $product->p_thumbnail = $name;
            }
        }
        else{
            $product->p_thumbnail = 'default-image.jpg';
        }
        $product->save();
        if($request->p_category_list){
            // dd($_POST['p_category_list']);
            $product->categories()->attach($request->p_category_list);
        }
        // Product Gallery
        if($request->p_gallery){
            // upload multiple image
            if($request->file('p_gallery')){
                $images = $request->file('p_gallery');
                $row = [];
                foreach($images as $image)
                {
                    $image_to_store = [];
                    $image_to_store['product_id'] = $product->id;
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/gallery/', $name);  
                    $image_to_store['image'] = $name;  
                    $row[] = $image_to_store;
                }
                Gallery::insert($row);
            }
        }
        if($request->p_subcategory_list){
            // dd($request->p_subcategory_list);
            foreach($request->p_subcategory_list as $subcat_id){
                DB::table('product_subcategories')->insert(['subcategory_id'=>$subcat_id,'product_id'=>$product->id]);
            }
        }
        // Product Attributes

        
        
        // if($request->product_type  == 'variable product'){
            $res = new product_size();
            $res->product_id = $product->id;
            $res->size = json_encode($request->input('size'));
            $res->quantity = json_encode($request->input('quantity'));
          
            $res->save();


            if($request->color_attribute_values){
            $colors = [];
            foreach($request->color_attribute_values as $value){

                $color = [];
                $color['color_id'] = (int)$value;
                $color['product_id'] = $product->id;
               
                 color_product::insert($color);
               
            }
            
        }
        // }
        $request->session()->flash('alert-success', 'New product added.');
        return back();
    }
    
    public function edit_product_form($id){
         $categories = Category::with('subcategories')->get();
        $subcategories = Subcategory::all();
        $brands = Brand::all();

        $brand = Brand::all();  
        $variations = session()->get('variations');
        $collection = collect([1, 2]);
        $matrix = Arr::crossJoin(['a', 'b'], ['I', 'II']);
        // dd($matrix);
        $values = \App\Color::all();
        $colorID=[];
        $product =Product::where('id',$id)->with('category','subcategory','brand')->first();
         
        $colorID=color_product::where('product_id',$id)->pluck('color_id');
        $colorID=$colorID->toArray();
     
        $sizeID=size_product::where('product_id',$id)->pluck('size_id');
                $sizeID=$sizeID->toArray();
       
        $categories = Category::with('subcategories')->get();
       
        // if($product->p_type=="variable product"){
          
            $product_attribute=product_size::where('product_id',$id)->get();
            if($product_attribute){
                 $explodeData =explode( '","',$product_attribute[0]->size);
                  $StringData =str_replace( '["', '', $explodeData); 
                 $sizes=str_replace( '"]', '', $StringData);
                 $count=count($sizes);
                 
                    $explodeData =explode( '","',$product_attribute[0]->quantity);
                  $StringData =str_replace( '["', '', $explodeData);
                   $quantity=str_replace( '"]', '', $StringData);
                   
             
              return view('admin.product-management.products.edit-product', [ 'product' => $product,'quantity' => $quantity,  'categories' => $categories,'colorId' =>$colorID,'sizeID' =>$sizeID,'count' =>$count,'sizes' =>$sizes,'categories' =>$categories,'brands'=>$brands,'subcategories' =>$subcategories,'brands' =>$brands,'colorID'=>$colorID,'values'=>$values]);
          // }
            }
        
         
    }
    
    public function edit_product_action(Request $request,$id){
    
       if($request->product_type=="Simple Product"){
        $this->validate($request, [
            'name' => 'required',
            'p_regular_price' => 'required|int',
            // 'p_quantity' => 'required|int',
             
        ],
        [
            'p_name.required' => 'Product name is required',
            // 'p_quantity.required' => 'Product quantity is required',
        ]
        );
       }
       else{
        $this->validate($request, [
            'name' => 'required',
            // 'p_quantity' => 'required|int',
             
        ],
        [
            'p_name.required' => 'Product name is required',
            // 'p_quantity.required' => 'Product quantity is required',
        ]
        );
       }
        if($request->p_thumbnail){
            if($request->file('p_thumbnail')){
                $p_thumbnail = $request->file('p_thumbnail');
                $name=$p_thumbnail->getClientOriginalName();
                $p_thumbnail->move(public_path().'/thumbnail/', $name);
                $request->p_thumbnail = $name;
            }
            else{
                $request->p_thumbnail = 'default_p_thumbnail.jpg';
            }
            Product::where('id', $id)->update([
                'p_thumbnail' => $name,
                'name' =>$request->name,
               
                'p_detail' =>$request['p_detail'],
                 'category_id' => (int)$request['cat_id'],
                 'price' => $request['price'],
                'sale_price' => $request['sale_price'],
                'from' => $request['from'],
                'to' => $request['to'],
                 'subcategory_id' => (int)$request['subcategory_id'],
                 'brand_id' => (int)$request['brand_id'],
                'p_description' =>$request['p_description'],
                'p_thumbnail' =>$request->p_thumbnail,
                 'user_id'=>Auth::id()

                
            ]);
        }
        else{
            Product::where('id', $id)->update([
                'name' =>$request->name,
                'p_quantity' =>$request['p_quantity'],
                'p_detail' =>$request['p_detail'],
                'price' => $request['price'],
                'sale_price' => $request['sale_price'],
                'from' => $request['from'],
                'to' => $request['to'],
                 'category_id' => (int)$request['cat_id'],
                 'subcategory_id' => (int)$request['subcategory_id'],
                 'brand_id' => (int)$request['brand_id'],
                'p_description' =>$request['p_description'],
                 'user_id'=>Auth::id()
            ]);
        }

        if($request->p_gallery){
                  
            Gallery::where('product_id',$id)->delete();
            if($request->file('p_gallery')){
                $images = $request->file('p_gallery');
                $row = [];
                foreach($images as $image)
                {
                    $image_to_store = [];
                    $image_to_store['product_id'] = $id;
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/gallery/', $name);  
                    $image_to_store['image'] = $name;  
                    $row[] = $image_to_store;
                }
               Gallery::insert($row);
            }
        }

        if($request->color_attribute_values){
            color_product::where('product_id',$id)->delete();
            $colors = [];
            foreach($request->color_attribute_values as $value){
                $color = [];
                $color['color_id'] = $value;
                $color['product_id'] = $id;
                $colors[] = $color;
            }
            color_product::insert($colors);
        }
       
            product_size::where('product_id',$id)->delete();
            $res = new product_size();
            $res->product_id = $id;
            $res->size = json_encode($request->input('size'));
            $res->quantity = json_encode($request->input('quantity'));
            
            $res->save();
       
        
        $request->session()->flash('alert-success', 'Product updated.');
        return back();
    }
    
    public function save_attributes(Request $request){
        $attr_values = [];
        foreach($request->attribute_values as $values){
            $res = Value::find($values);
            $attr_values[] = $res->name;
        }
        
        $variations = session()->get('variations');
        // if attribute is empty then this the first product
        if(!$variations){
            $variations = [
                $request->attribute_id => [
                    "attribute_id" => $request->attribute_id,
                    "attribute_values" => $attr_values,
                    "check" => $request->variation_check,
                ]
            ];
            session()->put('variations', $variations);
        }
        // if item not exist in attribute then add to attribute with quantity = 1
        $variations[$request->attribute_id] = [
            "attribute_id" => $request->attribute_id,
                    "attribute_values" => $attr_values,
                    "check" => $request->variation_check,
        ];
        session()->put('variations', $variations);
        return 'Variations Added';
    }

    public function get_variations(Request $request){

    }
    public function update_product_status(Request $request){
         $request->validate([
                'status' => 'required',
            ],
            [
                'status.required'=> 'status  is required',
                
            ]
        );
        Product::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        // $request->session()->flash('alert-success', 'Order status updated.');
        return "sucess";
    }

    public function add_new_row(Request $request){
        $values = Value::where('attribute_id', 2)->get();
        echo 
        '<row id="'.$request->x.'">
            <td>
            <select name="size[]" class="form-control">
                <option value="">Values</option>
            </select>
            </td>
            <td><input type="text" class="form-control" name="price[]"/></td>
            <td><input type="text" class="form-control" name="sale_price[]"/></td>
            <td><input type="date" class="form-control" name="from[]"/></td>
            <td><input type="date" class="form-control" name="to[]"/></td>
            <td><button id="'.$request->x.'" class="btn btn-danger remove_field">Remove</a></td>
        </tr>';
    }
}
