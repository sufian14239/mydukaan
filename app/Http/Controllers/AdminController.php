<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\Product;
use App\Order;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

    	$subscriber =Subscriber::all();
    	$product = Product::all();
    	$order = Order::all();
    	$category = Category::all();
    	$minProduct = Product::where('p_quantity','<',5)->with('categories','subcategories')->get();
    	
        return view('admin.dashboard.index',compact('subscriber','minProduct','product','order','category'));
    }

  
}
