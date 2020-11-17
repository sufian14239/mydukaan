<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\PseudoTypes\False_;
class UserController extends Controller
{
	public function view(){
		$users=User::where('is_admin',0)->get();
		return view('admin.users.view',compact('users'));
	}
  
	
  public function customer_view(){
    $users=User::where('is_admin',2)->get();
    return view('admin.customer.view',compact('users'));
  }
  public function delete(Request $request){
       Product::where('user_id',$request->id)->delete();
      User::find($request->id)->delete();
      
      $request->session()->flash('alert-success', 'Please Login...');
        return back();
	}
	public function edit_form(Request $request){
		$users=User::find($request->id);
		return Response()->json($users);
		 
	}
	public function edit_action(Request $request){

		 $user=User::find($request->id);

		$user->update([
            'fname' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin'=> false,
        ]);
        $request->session()->flash('alert-success', 'User Updated');
        return redirect()->route('ds.users.view');
	}
	public function update_user_status(Request $request){
		 $request->validate([
                'status' => 'required',
            ],
            [
                'status.required'=> 'status  is required',
                
            ]
        );

        User::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return "success";
    }
    public function view_profile($id){
          $user=User::where('id',$id)->first(); 
          $orders = Order::where('owner_id',$id)->get();
          $products=Product::where('user_id',$id)->get();
        return view('admin.profile.view',compact('products','user','orders'));
    }
    public function view_customer_profile($id){
          $user=User::where('id',$id)->first(); 
          $orders = Order::where('user_id',$id)->get();
          // $products=Product::where('user_id',$id)->get();
        return view('admin.profile.view',compact('user','orders'));
    }
}
