<?php

namespace App\Http\Controllers;
use App\Category;
use Auth;
use App\Subcategory;
use Illuminate\Http\Request;


class SubcategoryController extends Controller
{
     public function subcategories(){
      
        $category= Category::all();
        $subcategory= Subcategory::with('category')->get();

        return view('admin.subcategory.view',compact('category','subcategory'));
    }

    public function add_new_subcategory(Request $request){
        $request->validate([
                'name' => 'required',
                'cat_id' =>'required',
            ],
            [
                'name.required'=> 'SubCategory name is required',
                'cate_id.required'=> 'Please Select Category',
            ]
        );
         $category = new Subcategory();
         
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/subcategories', $name);
            $category->image = $name;
        }
         else{
                $category->image = 'default-image.jpg';
            }
        if (strpos($request->category, ' ') !== false) {
            $slug = str_replace(' ', '-', $request->category);
        }
        else{
            $slug = $request->category;
        }
       $category->name=$request->name;
       $category->category_id = $request->cat_id;
        $category->save();
       $request->session()->flash('alert-success', 'New Subcategory added.');
        return back();
    }

    public function subcategory_delete($id, Request $request){
        $subcategory =Subcategory::find($id);
          $subcategory->delete();
        
        $request->session()->flash('alert-success', 'One subcategory removed.');
        return back();
    }
    public function edit_subcategory_form(Request $request){
        $category = Subcategory::find($request->id);
        return $category;
    }
    public function edit_subcategory_action(Request $request){
       $request->validate([
                'name' => 'required',
                'cat_id' =>'required',
            ],
            [
                'name.required'=> 'SubCategory name is required',
                'cate_id.required'=> 'Please Select Category',
            ]
        );
        $category = Subcategory::find($request->id);
         
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/subcategories', $name);
            $category->image = $name;
        }
         else{
                $category->image= 'default-image.jpg';
            }
      
        $category->update(['name'=>$request->name,'category_id'=>$request->cat_id,'image',$category->image]);
        
        return redirect('product-management/subcategories');
    }
}
