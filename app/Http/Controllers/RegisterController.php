<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\PseudoTypes\False_;

class RegisterController extends Controller
{
   protected function create(Request $request)
    {
         if($request->type==0)
            {
             $type = false;
            }
            else
            {
               $type = 2;
             }
         User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $type
        ]);

       if($request->type==2){
        $request->session()->flash('alert-success', 'Please Login...');

        return redirect()->route('login-account');
        }
       else{
        $request->session()->flash('alert-success', 'vendor created successfully');
        return back();

       }     
   }
    
}
