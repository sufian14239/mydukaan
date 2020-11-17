<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Subcategory;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
      
        $category= Category::all();

        return view('admin.category.categories', ['categories' => $category]);
    }

    public function add_new_category(Request $request){
        $request->validate([
                'name' => 'required',
            ],
            [
                'name.required'=> 'Category name is required',
            ]
        );
         $category = new Category();
         
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/categories', $name);
            $category->image = $name;
        }
         else{
                $category->image = 'default-image.png';
            }
        if (strpos($request->category, ' ') !== false) {
            $slug = str_replace(' ', '-', $request->category);
        }
        else{
            $slug = $request->category;
        }
       $category->name=$request->name;
       $category->slug = $slug;
        $category->menu = false;
       
       $category->save();
       $request->session()->flash('alert-success', 'New category added.');
        return back();
    }

    public function category_delete($id, Request $request){
        $category = Category::find($id);
        $category->subcategories()->delete();
        $category->delete();
        $request->session()->flash('alert-success', 'One category removed.');
        return back();
    }
    public function edit_categories_form(Request $request){
        $category = Category::find($request->id);
        return $category;
    }
    public function edit_categories_action(Request $request){
        $request->validate([
                'name' => 'required',
            ],
            [
                'name.required'=> 'Category name is required',
            ]
        );
        $category = Category::find($request->id);

        if($request->image){
            if($request->file('image')){
                $p_thumbnail = $request->file('image');
                $name=$p_thumbnail->getClientOriginalName();
                $p_thumbnail->move(public_path().'/categories/', $name);
                $category->image = $name;
            }
        }
        else{
            $category->image = 'default_image.jpg';
        }
        $category->update(['name'=>$request->name,'image',$category->image]);
        
        return redirect('product-management/categories');
    }
    public function category_product($id)
    {
        $products=Product::where('subcategory_id',$id)->get();
        $subcategories=Subcategory::all();
        $brands=Brand::all();

        return view('front.category-product',compact('products','subcategories','brands'));
    }

}
