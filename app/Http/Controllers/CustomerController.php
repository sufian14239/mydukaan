<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
    	$request->password= Hash::make($request->password);
    	Customer::create($request->all());
    	return redirect()->route('login-account');
    }
}
