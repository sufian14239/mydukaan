<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Weight;
use App\Order;
use App\Driver;
use App\OrderShipping;
use Auth;

class ShippingController extends Controller
{
     public function view(){
        return view('admin.shipping.shipping');
    }

    public function setCityPrice(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            
        ]
        );
        City::create($request->all());
        $request->session()->flash('alert-success', 'Shipping charges added.');
        return redirect()->route('ds.shipping.shipping');
    }  


    public function shipping(){
    	$weight=Weight::all();
    	$city=City::all();
        return view('admin.shipping.shipping',compact('weight','city'));

    }
    public function setWeightPrice(Request $request){
         $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'price' => 'required',
        ],
        [
            'max.required' => 'Minimum weight is required',
            'min.required' => 'Maximum weight is required',
            'price.required' => 'Price is required',
            
        ]
        );
        Weight::create($request->all());
        return redirect()->route('ds.shipping.shipping');
    }  
    public function deleteWeight($id){
        Weight::find($id)->delete();
        
    	return redirect()->route('ds.shipping.shipping');
    }
    public function deleteCity($id, Request $request){
        City::find($id)->delete();
        $request->session()->flash('alert-success', 'One shipping charges removed.');
    	return redirect()->route('ds.shipping.shipping');
    }
    public function editWeightForm($id){
    	$data =Weight::find($id);
    	return Response()->json($data);
    }
    public function editWeight(Request $request){
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'price' => 'required',
        ],
        [
            'max.required' => 'Minimum weight is required',
            'min.required' => 'Maximum weight is required',
            'price.required' => 'Price is required',
            
        ]
        );
    	$data =Weight::find($request->id);
        $data->update($request->all());
        $request->session()->flash('alert-success', 'Shipping charges updated.');
        return redirect()->route('ds.shipping.shipping');
    } 
      public function editCityForm($id){
    	$data =City::find($id);
    	return Response()->json($data);
    }
    public function editCity(Request $request){
          $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            
        ]
        );
    	$data =City::find($request->id);
        $data->update($request->all());
        $request->session()->flash('alert-success', 'Shipping charges updated.');
        return redirect()->route('ds.shipping.shipping');
    } 

    public function shipping_orders_view(){
        $orders = Order::where('owner_id',Auth::id())->get();
        $drivers=Driver::all();
        return view('admin.shipping.order-shipping', compact('orders','drivers'));
    }
    public function placeShippment(Request $request){
        OrderShipping::create($request->all());
        return redirect()->route("ds.shipping.shipping_orders_view");
    }

}
