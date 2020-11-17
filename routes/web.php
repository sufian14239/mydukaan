<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/










Route::get('shopPage/{id?}','CategoryController@category_product')->name("category-product");
Route::get('Category-shopPage','FrontController@shopfilter')->name('shopfilter');
Route::prefix('/user')->group(function (){   
    ///Login Register
    Route::get('logout','LoginController@logout')->name('user.logout');
    Route::post('register','RegisterController@create')->name('user.register.create');
    Route::post('login','LoginController@authenticate')->name('user.login.authenticate');
    // Route::get('logout','LoginController@logout')->name('user.logout');

});
Route::get('/', 'FrontController@index')->name('index');
Route::get('/quick-view', 'FrontController@quick_view')->name('quick-view');
Route::get('/register-new-account', 'FrontController@register')->name('register-account');
Route::post('register-custromer','CustomerController@create')->name('register.customer');
Route::get('/login-new-account', 'FrontController@login')->name('login-account');
// My Cart
Route::get('/my-cart', 'FrontController@my_cart')->name('my-cart');
Route::get('/my-cart/getCart-onLoad', 'FrontController@getCart_onLoad')->name('myCartPage.getCart-onLoad');
Route::get('/my-cart/myCartPage-cartItems-getItems-onLoad', 'FrontController@myCartPage_cartItems_getItems_onLoad')->name('myCartPage-cartItems.getItems-onLoad');
Route::delete('/my-cart/myCartPage-cartItems-deleteItems', 'FrontController@myCartPage_cartItems_deleteItems')->name('myCartPage-cartItems.deleteItems');
Route::post('/my-cart/myCartPage-cartItems-updateItems', 'FrontController@myCartPage_cartItems_updateItems')->name('myCartPage-cartItems.updateItems');
// Checkout 
Route::get('/checkout', 'FrontController@checkout')->name('checkout');
Route::post('/checkout/place-order', 'FrontController@place_order')->name('checkout.place-order');
Route::post('/checkout/get-shipping-charges', 'FrontController@get_shipping_charges')->name('get-shipping-charges');
Route::get('/checkout/checkoutPage-cartItems-getItems-onLoad', 'FrontController@checkoutPage_cartItems_getItems_onLoad')->name('checkoutPage-cartItems.getItems-onLoad');
Route::get('/thank-you-page', 'FrontController@thank_you_page')->name('thank-you-page');

Route::get('/wishlist', 'FrontController@wishlist')->name('wishlist');
Route::get('/compare', 'FrontController@compare')->name('compare-product');
Route::get('/product/{name}{id}', 'FrontController@product')->name('product');
Route::post('/product/add-to-cart', 'FrontController@add_to_cart')->name('add-to-cart');
// Route::get('/category/cat-name', 'FrontController@category_product')->name('category-product');

Route::prefix('/admin')->group(function (){   
    ///Login Register
  Route::view('login','admin.login')->name('admin.login');
  Route::post('login','LoginController@authenticate')->name('admin.login.authenticate');
  Route::get('logout','LoginController@logout')->name('admin.logout');

});
Route::group(['middleware' => 'admin'], function(){
            Route::get('/md-admin', 'AdminController@index')->name('ds.dashboard');
            Route::get('/view_products/{id}', 'AdminController@view_products')->name('ds.view.products');
            Route::get('/view_orders_by_user/{id}', 'AdminController@orders_view')->name('ds.view.orders');

        Route::prefix('/md-admin')->group(function (){
        // Copoun 
            Route::get('/viewCoupon','CouponController@view')->name('ds.coupon.view');
            Route::get('/delCoupon{id}','CouponController@delete')->name('ds.coupon.delete');
            Route::post('/postCoupon','CouponController@create')->name('ds.coupon.create');
            Route::get('editCoupon-form/','CouponController@editCouponForm')->name('ds.coupon.editCoupon-form');
            Route::post('editCouponController','CouponController@editCoupon')->name('ds.coupon.editCoupon');
        // Theme settings
            Route::get('/theme-settings/general-settings', 'ThemeSettingController@general_setting')->name('ds.theme-setting.general-setting');
            Route::post('/theme-settings/general-setting-action', 'ThemeSettingController@general_setting_action')->name('ds.theme-setting.top-header-action');
        // Logo Settings
            Route::get('/theme-settings/logo-settings', 'ThemeSettingController@logo_setting')->name('ds.theme-setting.logo-setting');
            Route::post('/theme-settings/logo-settings-action', 'ThemeSettingController@')->name('ds.theme-setting.logo-setting-action');
            Route::get('/theme-settings/remove-logo', 'ThemeSettingController@remove_logo')->name('ds.theme-settings.remove-logo');
        // Menu Settings
            Route::post('/theme-settings/menu-settings/add-new-menu', 'ThemeSettingController@add_menu')->name('ds.theme-settings.menu-action');
            Route::get('/theme-settings/menu-settings', 'ThemeSettingController@menu_setting')->name('ds.theme-setting.menu-setting');
            Route::get('/theme-settings/menu-settings/menu-delete/{id}', 'ThemeSettingController@menu_delete')->name('menu-delete');
            Route::post('/theme-settings/menu-settings/add-menu', 'ThemeSettingController@add_menu')->name('ds.theme-setting.menu-setting.add-menu');
        // Favicon Settings
            Route::get('/theme-settings/favicon-settings', 'ThemeSettingController@favicon_setting')->name('ds.theme-setting.favicon-setting');
            Route::post('/theme-settings/favicon-settings_action', 'ThemeSettingController@favicon_setting_action')->name('ds.theme-setting.favicon-setting-action');
            Route::get('/theme-settings/remove-favicon', 'ThemeSettingController@remove_favicon')->name('ds.theme-settings.remove-favicon');
        // Header
            Route::get('/theme-settings/header-settings', 'ThemeSettingController@header_setting')->name('ds.theme-setting.header-setting');
            Route::post('/theme-settings/header-settings-action', 'ThemeSettingController@header_setting_action')->name('ds.theme-setting.header-setting-action');
        // Slider
            Route::get('/theme-settings/slider-settings', 'ThemeSettingController@slider_setting')->name('ds.theme-setting.slider-setting');
            Route::get('/theme-settings/slider-settings/delete-slider/{id}', 'ThemeSettingController@delete_slider')->name('slider-delete');
            Route::post('/theme-settings/slider-settings-action', 'ThemeSettingController@slider_setting_action')->name('ds.theme-setting.slider-setting-action');
        // Footer
            Route::get('/theme-settings/footer-settings', 'ThemeSettingController@footer_setting')->name('ds.theme-setting.footer-setting');
            Route::post('/theme-settings/footer-settings-action', 'ThemeSettingController@footer_setting_action')->name('ds.theme-setting.footer-setting-action');
        // Home images 
            Route::get('/theme-settings/home-images', 'ThemeSettingController@home_images')->name('ds.theme-setting.home-images');
            Route::post('/theme-settings/home-images-action', 'ThemeSettingController@home_images_action')->name('ds.theme-setting.home-images-action');
            Route::get('/theme-settings/home-images-delete/{id}', 'ThemeSettingController@home_images_delete')->name('ds.theme-setting.home-images-delete');
        // Color Scheme
            Route::get('/theme-settings/color-scheme', 'ThemeSettingController@color_scheme')->name('ds.theme-setting.color-scheme');
            Route::post('/theme-settings/color-scheme-action', 'ThemeSettingController@color_scheme_action')->name('ds.theme-setting.color-scheme-action'); 
            
        //category
            Route::get('product-management/categories_view','CategoryController@categories')->name('ds.category.view');
            Route::post('/product-management/add-new-category', 'CategoryController@add_new_category')->name('ds.product-management.categories-action');

            Route::get('/product-management/categories/', 'CategoryController@edit_categories_form')->name('ds.categories.editForm');
            Route::post('/product-management/categories/edit', 'CategoryController@edit_categories_action')->name('ds.categories.editPost');

            Route::get('/product-management/categories/category-delete/{id}', 'CategoryController@category_delete')->name('ds.product-management.category-delete');
///////profile
            Route::get('profile/{id}','UserController@view_profile')->name('user.profiles');

            Route::get('customer-profile/{id}','UserController@view_customer_profile')->name('customer.profiles');

//////////////////Subcategory/////////////////
           
//subcategory
            Route::get('product-management/subcategories-view','SubcategoryController@subcategories')->name('ds.subcategory.view');
            Route::post('/product-management/add-new-subcategory', 'SubcategoryController@add_new_subcategory')->name('ds.product-management.subcategories-action');




            Route::get('/product-management/subcategories/', 'SubcategoryController@edit_subcategory_form')->name('ds.subcategories.editForm');
            Route::post('/product-management/subcategories/edit', 'SubcategoryController@edit_subcategory_action')->name('ds.subcategories.editPost');

            // Route::get('/product-management/categories/{id}/subcategories', 'CategoryController@subcategories')->name('ds.product-management.category-edit');
            // Route::post('/product-management/add-new-subcategory', 'CategoryController@add_new_subcategory')->name('ds.product-management.subcategories-action');
            Route::get('/product-management/subcategories/subcategory-delete/{id}', 'SubcategoryController@subcategory_delete')->name('ds.product-management.subcategory-delete');
///////////////// Brands
            Route::get('/product-management/brands', 'BrandController@view_brand')->name('ds.product-management.brands');
            Route::get('getSubcategoriesByCategory','BrandController@getSubcategoriesByCategory')->name('ds.getSubcategoriesByCategory');

            Route::get('/product-management/brand/', 'BrandController@edit_brand_form')->name('ds.brand.editForm');
            Route::post('/product-management/brand/edit', 'BrandController@edit_brand_action')->name('ds.brand.editPost');


            Route::post('/product-management/brand-action', 'BrandController@add_new_brand')->name('ds.product-management.brands-action');
            Route::get('/product-management/delete-brand/{id}', 'BrandController@brand_delete')->name('ds.product-management.brand-delete');
        
        // Products
            Route::get('/product-management/products', 'ProductController@products')->name('ds.product-management.products');
            Route::get('/product-management/getBrands', 'ProductController@getAllBrandsBySubcategory')->name('ds.product-management.getAllBrands');
            Route::get('/product-management/products/delete-product', 'ProductController@delete_product')->name('ds.product-management.product-delete');
            Route::get('/product-management/new-product', 'ProductController@new_product_form')->name('ds.product-management.new-product-form');
            Route::get('/product-management/new-product/add-new-row', 'ProductController@add_new_row')->name('product.add-new-attribute-row');
            Route::get('/product-management/products/get-attributes', 'ProductController@get_attributes')->name('product.get-attributes');
            Route::delete('/product-management/products/delete-attribute', 'ProductController@delete_attribute')->name('product.delete-attribute');
            Route::get('/product-management/products/delete-sesion-values', 'ProductController@delete_sesion_values')->name('product.delete-all-session-values');
            Route::post('/product-management/new-product-action', 'ProductController@new_product_action')->name('ds.product-management.new-product-action');
            Route::post('/product-management/new-product-action/save-attributes', 'ProductController@save_attributes')->name('product.attributes.save-attribute');
            Route::get('/product-management/new-product-action/product.get-variations', 'ProductController@get_variations')->name('product.get-variations');
            Route::get('/product-management/edit-product-form/{id}', 'ProductController@edit_product_form')->name('ds.product-management.edit-product-form');
            Route::post('/product-management/edit-product-action/{id}', 'ProductController@edit_product_action')->name('ds.product-management.edit-product-action');
            Route::post('update-product-status','ProductController@update_product_status')->name('update-product-status');
            ////product export////
            Route::post('export-product','ProductController@export')->name('export.product');
        // Attributes
            Route::get('/product-management/attributes', 'AttributeController@attributes')->name('ds.product-management.attributes');
            Route::post('/product-management/attributes-action', 'AttributeController@color_action')->name('ds.product-management.color_action');
            Route::get('/product-management/attribute-delete/{id}', 'AttributeController@delete_attribute')->name('ds.product-management.attribute-delete');
            Route::get('/product-management/attribute-edit/{id}', 'AttributeController@edit_attribute')->name('ds.product-management.attribute-edit');
            Route::post('/product-management/attribute-update/{id}', 'AttributeController@update_attribute')->name('ds.product-management.attributes-update');
            Route::get('/product-management/value-delete/{id}', 'AttributeController@value_delete')->name('ds.product-management.value-delete');
        
        
       ////////////Users
        //edit_form
            Route::get('users/view','UserController@view')->name('ds.users.view');
            Route::get('customer/view','UserController@customer_view')->name('ds.customer.view');
            Route::get('users/delete/','UserController@delete')->name('ds.users.delete');
            Route::get('users/edit','UserController@edit_form')->name('ds.users.edit_form');
            Route::post('users/edit-post','UserController@edit_action')->name('ds.users.edit_action');
            Route::post('update-user-status','UserController@update_user_status')->name('update-user-status');
              
        // Orders
            Route::get('/order-management/orders', 'OrderController@orders')->name('ds.orders');
            Route::get('/order-management/orders/get-order-detail', 'OrderController@get_order_detail')->name('order.get-order-detail');
            Route::get('/order-management/order-delete/{id}', 'OrderController@order_delete')->name('ds.order-management.order-delete');
            Route::post('/order-management/orders/update-order-status/', 'OrderController@update_order_status')->name('update-order-status');
        
        
            // Shipping
            Route::prefix('/shipping')->group(function (){
                Route::get('/view', 'ShippingController@view')->name('ds.shipping.view');
                Route::get('/', 'ShippingController@shipping')->name('ds.shipping.shipping');
                Route::post('/city', 'ShippingController@setCityPrice')->name('ds.shipping.setCity');
                Route::post('/weight', 'ShippingController@setWeightPrice')->name('ds.shipping.setWeight');
                Route::get('deleteCity/{id}','ShippingController@deleteCity')->name('ds.shipping.delCity');
                Route::get('deleteWeight/{id}','ShippingController@deleteWeight')->name('ds.shipping.delWeight');
                Route::get('editWeight-form/{id}','ShippingController@editWeightForm')->name('ds.shipping.editWeight-form');
                Route::post('editWeight','ShippingController@editWeight')->name('ds.shipping.editWeight');
                Route::get('editCity-form/{id}','ShippingController@editCityForm')->name('ds.shipping.editCity-form');
                Route::post('editCity','ShippingController@editCity')->name('ds.shipping.editCity');
                Route::get('shipping-orders-view/','ShippingController@shipping_orders_view')->name('ds.shipping.shipping_orders_view');
                Route::post('placeShippment','ShippingController@placeShippment')->name('ds.shipping.placeShippment');
           
            //Driver
                Route::get("driver/view",'DriverController@view')->name('driver.view');
                Route::get("driver/delete/{id}",'DriverController@delete')->name('driver.delete');
                Route::get("driver/edit-form",'DriverController@edit_form')->name('driver.edit-form');
                Route::post("driver/edit-post",'DriverController@edit_post')->name('driver.edit-post');
               Route::post("driver/create",'DriverController@create')->name('driver.create');

           //Vehical

                Route::get("vehical/view",'VehicalController@view')->name('vehical.view');
                Route::get("vehical/delete/{id}",'VehicalController@delete')->name('vehical.delete');
                Route::get("vehical/edit-form",'VehicalController@edit_form')->name('vehical.edit-form');
                Route::post("vehical/edit-post",'VehicalController@edit_post')->name('vehical.edit-post');
               Route::post("vehical/create",'VehicalController@create')->name('vehical.create');

            });
        });
});

Route::get('viewSubsciber','SubscriberContorller@viewSubscriber')->name('ds.subscriber.view');
Route::get('deleteSubsciber/{id}','SubscriberContorller@delete')->name('ds.subscriber.del');
Route::post('addSubsciber','SubscriberContorller@addSubscriber')->name('ds.subscriber.add');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
