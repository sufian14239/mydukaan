<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Menu;
use App\Order;
use App\Product;
use App\ThemeSetting;
use App\City;
use App\Coupon;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\HomeImage;
use App\WishList;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\CouponUser;
use App\Cart;
use App\Voucher;
use DB;
use App\Brand;
class FrontController extends Controller
{
    public function index(){
        $products = Product::with('product_size')->where('status', TRUE)->get();
        $subcategories=Subcategory::all();
        // dd(json_decode($products[0]->product_size[0]->price));
        return view('front.index', compact('products','subcategories'));
    }

    public function quick_view(){
        return view('front.quick-view');
    }

    public function register(){
        return view('front.register');
    }

    public function login(){
        return view('front.login');
    }

    public function my_cart(){
        return view('front.my-cart');
    }

    public function getCart_onLoad(){
        return view('front.layout.header-cart');
    }

    public function myCartPage_cartItems_getItems_onLoad(){
        return view('front.includes.myCartPage_cartItems');
    }

    public function myCartPage_cartItems_deleteItems(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return view('front.includes.myCartPage_cartItems');
    }

    public function myCartPage_cartItems_updateItems(Request $request){
        $cart = Cart::find($request->id);
        Cart::where('id', $request->id)->update([
            'quantity' => $request->qty,
            'total' => $request->qty * $cart->price,
        ]);
        return view('front.includes.myCartPage_cartItems');
    }

    public function checkout(){
        return view('front.checkout');
    }

    public function checkoutPage_cartItems_getItems_onLoad(){
        return view('front.includes.checkoutPage_cartItems');
    }

    public function get_shipping_charges(Request $request){
        $city = City::whereName($request->city)->first();
        if($city){
            return $city->price;
        }
        else{
            return 0;
        }
    }

    public function place_order(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'account' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'address_1' => 'required',
            'city' => 'required',
        ],
        [
            'account.required' => 'Please select account type.',
            'fullname.required' => 'Full name is required.',
            'email.required' => 'Email is required.',
            'phone.required' => 'Phone number is required.',
            'country.required' => 'Country name is required.',
            'address_1.required' => 'Address is required.',
            'city.required' => 'City name is required.',
        ]
        );
        $mytime = \Carbon\Carbon::now();
        $date = $mytime->toDateTimeString();
        $orders = [];
        if(Auth::user()){
            $carts = \App\Cart::where('user_id', session('user_id'))->orWhere('session_id', session('user_id'))->get();
        }
        else{
            $carts = \App\Cart::where('user_id', session('user_id'))->orWhere('session_id', session('user_id'))->get();
        }
        $orderNo = "ORDER#".rand ( 10000 , 99999 );
        foreach($carts as $cart){
            $owner_id = Product::find($cart['product_id'])->pluck('user_id')->first();
            $row = [];
            $row['order_no'] = $orderNo;
            if(Auth::user()){
                $row['user_id'] = Auth::user()->id;
            }
            else{
                $row['user_id'] = session('user_id');
            }
            $row['name'] = $request->fullname;
            $row['owner_id'] = $owner_id;
            if($request->coupon){
                $copoun = Coupon::whereName($request->coupon)->first();
                if($copoun){
                    $row['coupon_id'] = $copoun->id;
                }
            }
            if($request->voucher){
                $voucher = Voucher::whereName($request->voucher)->first();
                if($voucher){
                    $row['voucher_id'] = $voucher->id;
                }
            }
            $row['email'] = $request->email;
            $row['phone'] = $request->phone;
            $row['country'] = $request->country;
            $row['address_1'] = $request->address_1;
            if($request->address_2){
                $row['address_2'] = $request->address_2;
            }
            $row['city'] = $request->city;
            $row['zip'] = $request->postcode;
            $row['product'] = $cart['name'];
            $row['size'] = $cart['size'];
            $row['color'] = $cart['color'];
            $row['price'] = $cart['price'];
            $row['quantity'] = $cart['quantity'];
            $row['total'] = $cart['total'];
            $row['status'] = 'Pending';
            $row['comment'] = $request->comments;
            $row['payment_method'] = $request->payment_type;
            $row['created_at'] = $date;
            $orders[] = $row;
            $product = Product::where('id', $cart['product_id'])->first();
            Product::where('id', $cart['product_id'])->update([
                'p_quantity' => (int)$product->p_quantity - (int)$cart['quantity'],
            ]);
        }
        Order::insert($orders);
        Cart::where('user_id', session('user_id'))->orWhere('session_id', session('user_id'))->delete();
        $request->session()->flash('alert-success', 'Thank you for placing an Order!');
        return redirect()->route('thank-you-page');
    }

    public function thank_you_page(){
        return view('front.thank-you');
    }

    public function product($name, $id){
        $product = Product::with('category', 'subcategory', 'brand', 'product_size', 'gallery', 'color_product')->find($id);
        // dd($product);
        return view('front.product')->with('product', $product);
    }

    public function add_to_cart(Request $request){
        $product = Product::with('category', 'subcategory', 'brand', 'product_size', 'gallery', 'color_product')->find($request->product_id);
        // return json_encode($product);
        $size = $request->size;
        $color = $request->color;
        $quantity = $request->quantity;
        $price = $request->price;
        $cart = new Cart();
        if(!Auth::check()){
            $user_id = rand(1000,10000);
        }
        else{
            $user_id = Auth::user()->id;
        }

        $cart = Cart::where('product_id',$request->product_id)->where('size',$size)->where('color',$color)->where('user_id', session('user_id'))->first();
        if($cart){
            $qty = $cart->quantity + $quantity;
            if(session('user_id')){
                    Cart::where('product_id',$request->product_id)->where('size',$size)->where('color',$color)->where('user_id', session('user_id'))->update([
                    'quantity' => $qty,
                    'total' => $qty * $cart->price,
                ]);
            }
            else{
                Session::put('user_id', $user_id);
                Cart::where('product_id',$request->product_id)->where('size',$size)->where('color',$color)->where('user_id', session('user_id'))->update([
                    'quantity' => $qty,
                    'total' => $qty * $cart->price,
                'user_id'=> Auth::check() ? Auth::id() :Session::get('user_id'),
                ]);
            }
            
            return view('front.layout.header-cart');
        }
        else{
            if(session('user_id')){

            }
            else{
                Session::put('user_id', $user_id);
            }
            $cartArray = [
                "product_id" => $product->id,
                'user_id'=> Auth::check() ? Auth::id() :Session::get('user_id'),
                "session_id" => session('user_id'),
                "image" => $product->p_thumbnail,
                "name" => $product->name,
                "quantity" => (int)$quantity,
                "price" => (int)$price,
                "size" => $size,
                "color" => $color,
                "total" => (int)$quantity * (int)$price,
            ];
            Cart::insert($cartArray);
            return view('front.layout.header-cart');
        }
    }

    public function category_product(){
        return view('front.category-product');
    }

    public function wishlist(){
        return view('front.wishlist');
    }

    public function compare(){
        return view('front.compare');
    }

    // public function compare(Request $request,$id){
    //     $row = ThemeSetting::first();
    //     $menus = Menu::with(['category.subcategories'])->get();
    //     // dd($menus);
    //     $categories = Category::with('subcategories')->get();
    //     $product1=Product::find($id);
    //     $data=Product::all();
    //     $product2="";
    //     return view('compare', ['menus' => $menus, 'categories' => $categories, 'product1' => $product1,'data' => $data,'product2' => $product2,])->with('row', $row);
    // }

    public function compareProduct(Request $request){
            
             $row = ThemeSetting::first();
             $menus = Menu::with(['category.subcategories'])->get();
            // dd($menus);
             $categories = Category::with('subcategories')->get();
             $product1=Product::where('name',$request->product1)->with('product_size')->first();
             
             $product2=Product::where('id',$request->product2)->with('product_size')->first();
             $data=Product::all();
             return view('compare', ['menus' => $menus, 'categories' => $categories, 'product1' => $product1,'product2' => $product2,'data' => $data])->with('row', $row);       

    }

    public function get_cart_items(){
        return view('layout.get-slide-cart-session-items');
    }

    public function delete_cart_item(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return view('layout.get-slide-cart-session-items');
    }

    public function delete_item_from_cart(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return view('layout.cart-items');
    }

    public function products(){
        $row = ThemeSetting::first();
        $menus = Menu::with(['category.subcategories'])->get();
        $categories = Category::with('subcategories')->get();
        $products = Product::with(['product_size'])->get();
        // dd($products);
        return view('products', ['menus' => $menus, 'categories' => $categories, 'products' => $products])->with('row', $row);
    }

    public function view_product_detail($name){
        // dd(session('cart'));
        if (strpos($name, '-') !== false) {
            $name = str_replace('-', ' ', $name);
        }
        $product = Product::with(['product_size', 'gallery'])->whereName($name)->first();
        $row = ThemeSetting::first();
        return view('product')->with('product', $product)->with('row', $row);
    }

    public function category_products($name){
        $name = str_replace('-', ' ', $name);
        $category = Category::whereName($name)->first();
        $products = $category->products;
        $row = ThemeSetting::first();
        return view('category-products', compact('products'))->with('row', $row)->with('category_name', $name);
    }
    
    public function subcategory_products($name){
        $name = str_replace('-', ' ', $name);
        $subcategory = Subcategory::whereName($name)->first();
        // dd($products);
        $products = $subcategory->product;
        $row = ThemeSetting::first();
        return view('subcategory-products', compact('products'))->with('row', $row)->with('category_name', $name);
    }

    public function cart(){
        $row = ThemeSetting::first();
        return view('shop-cart', compact('row'));
    }

    public function update_cart(Request $request){
        $cart = Cart::find($request->id);
        Cart::where('id', $request->id)->update([
            'quantity' => $request->qty,
            'total' => $request->qty * $cart->price,
        ]);
        return view('layout.cart-items');
    }

    public function cart_items(){
        return view('layout.cart-items');
    }

    
    public function sign_up_account(Request $request){
        $this->validate($request, [
            's_email' => 'required',
            's_password' => 'required',
        ]);
        $user = new User();
        $user->email = $request->s_email;
        $user->password = Hash::make($request->s_password);
        $user->save();
        $user_data = array(
            'email' => $request->get('s_email'),
            'password' => $request->get('s_password'),
        );
        if(Auth::attempt($user_data)){
            return back();
        }
    }

    public function login_user(Request $request){
        $this->validate($request, [
            'l_email' => 'required',
            'l_password' => 'required',
        ]);
        $user_data = array(
            'email' => $request->get('l_email'),
            'password' => $request->get('l_password'),
        );
        if(Auth::attempt($user_data)){
            return back();
        }
    }

    public function user_logout(Request $request){
        Auth::logout();
        return back();
    }


    public function login_form(){
        $row = ThemeSetting::first();
        return view('login-form', compact('row'));
    }

//     public function wishlist(Request $request,$product_id){

//         if(Auth::user() ){
//              $wish =WishList::where('product_id',$product_id)->distinct('product_id')->get();
             
//             if(count($wish)>0){ 
//                    foreach($wish as $w){
//                    if($w->user_id != Auth::id())
//                    {
//                     WishList::create(['product_id'=>$product_id,'user_id' =>Auth::id()]);
//                     $request->session()->flash('alert-success', 'Product added to wish List.');
//                     return redirect()->back();
//                    }
//                    else{
//                     $request->session()->flash('alert-danger', 'This product is already added to your wish list');
//                     return redirect()->back();
//                    }
//                   }
//               }
//               else{
//                 WishList::create(['product_id'=>$product_id,'user_id' =>Auth::id()]);
//                 $request->session()->flash('alert-success', 'Product added to wish List.');
//                 return redirect()->back();
//               }
//         }
//         else{
//             Session::put('wishListProduct', $product_id);
//             $request->session()->flash('alert-danger', 'please login to add this to wish list');
//             return redirect()->route('login-form');
//         }
//    }
   public function display_wishList(){
        if(Auth::check()){
            $wishlist=WishList::with('product')->get();
            // dd($wishlist);
            $row = ThemeSetting::first();
            return view('wishlist',compact('wishlist'), compact('row'));
        }
        else{  
            return redirect('user/login');
        }
    }

    public function remove_wishlist(Request $request, $id){
        $wishlist = WishList::find($id);
        $wishlist->delete();
        $request->session()->flash('alert-success', 'Product removed from wishlist.');
        return redirect()->back();
    }

    public function user_profile(){
        if(Auth::user()){
            $row = ThemeSetting::first();
            return view('user-profile', compact('row'));
        }
    }

    public function get_coupon(Request $request)
    {       
        if(Auth::check()){
            $coupon = Coupon::whereName($request->coupon)->first();
            $check= CouponUser::where('user_id',Auth::id())->where('coupon_id',$coupon->id)->first();
            if($coupon && $check){
                if($check->coupon_id==$coupon->id){
                    $message ="You have already use this token";
                    return Response()->json([$coupon,$message]);
                }
                else{
                    CouponUser::create(['coupon_id'=>$coupon->id,'user_id' =>Auth::id()]);
                    return Response()->json($coupon);
                }
            }
            else{
                CouponUser::create(['coupon_id'=>$coupon->id,'user_id' =>Auth::id()]);
                return Response()->json($coupon);
            }
        }
        else{  
            return 0;
        }
   }
   public function contactUs(){
        $row = ThemeSetting::first();
        $menus = Menu::with(['category.subcategories'])->get();
        $categories = Category::with('subcategories')->get();
        $images=HomeImage::limit(3)->get();
        return view('contact-us', ['menus' => $menus, 'images' => $images, 'categories' => $categories])->with('row', $row);

    }
    public function ceo(){
        $row = ThemeSetting::first();
        $menus = Menu::with(['category.subcategories'])->get();
        
        $categories = Category::with('subcategories')->get();
        $images=HomeImage::limit(3)->get();
        return view('ceo', ['menus' => $menus, 'images' => $images, 'categories' => $categories])->with('row', $row);

    }
    public function about(){
        $row = ThemeSetting::first();
        $menus = Menu::with(['category.subcategories'])->get();
        
        $categories = Category::with('subcategories')->get();
        $images=HomeImage::limit(3)->get();
        return view('about-us', ['menus' => $menus, 'images' => $images, 'categories' => $categories])->with('row', $row);

    }

    public function shopfilter(Request $request){
             
             // dd($request->all());
             $products=Product::with('subcategory')
                     ->when(!empty(request()->get('subcategory')),function($query)
                     {     
                        return $query->orWhereIn('subcategory_id',request()->get('subcategory'));
                     }
                     )
                      ->when(!empty(request()->get('search')),function($query)
                     {     
                        return $query->whereName(request()->get('search'));
                     }
                     )->
                      when(!empty(request()->get('max_value')),function($query)
                     {     
                        return $query->orWhereBetween('price',array(request()->get('min_value'),request()->get('max_value')));
                     }
                     )->
                     when(!empty(request()->get('brand')),function($query)
                     {      
                        // dd("herhjhje");
                        return $query->orWhereIn('brand_id',request()->get('brand'));
                     }
                     )->get();
                     $subcategories=Subcategory::all();
                    $brands=Brand::all();

        return view('front.category-product',compact('products','subcategories','brands'));
    }
}
