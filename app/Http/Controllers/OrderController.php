<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::where('owner_id',Auth::id())->get();
        return view('admin.orders.orders', compact('orders'));
    }

    public function order_delete(Request $request, $id){
        $order = Order::find($id);
        $order->delete();
        $request->session()->flash('alert-success', 'Order removed.');
        return back();
    }

    public function update_order_status(Request $request){
        Order::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        $request->session()->flash('alert-success', 'Order status updated.');
        return back();
    }

    public function get_order_detail(Request $request){
        $order = Order::with('user')->find($request->id);
        echo "
        <form>
            <div class='row clearfix'>
                <div class='col-sm-6'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Order#</label>
                            <input type='text' value='".$order->order_no."' class='form-control'/>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Product</label>
                            <input type='text' value='".$order->product."' class='form-control'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row clearfix'>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Size</label>
                            <input type='text' value='".$order->size."' class='form-control'/>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Color</label>
                            <input type='color' value='".$order->color."' class='form-control'/>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>City</label>
                            <input type='text' value='".$order->city."' class='form-control'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row clearfix'>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Customer</label>
                            <input type='text' value='".$order->name."' class='form-control'/>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Email</label>
                            <input type='text' value='".$order->email."' class='form-control'/>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Phone</label>
                            <input type='text' value='".$order->phone."' class='form-control'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row clearfix'>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <div class='form-line'>
                            <label>Address</label>
                            <textarea class='form-control' cols='100' rows='3'>".$order->address."</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        ";
    }
}
