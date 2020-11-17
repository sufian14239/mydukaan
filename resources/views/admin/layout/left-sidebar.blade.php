<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info bg-indigo">
        <div class="image">
           <a href=""><img src="{{asset('public/admin/images/user.png')}}" width="48" height="48" alt="User" /></a> 
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Moin Abbas</div>
            <div class="email">moinabbas80@gmail.com</div>
            <div class="btn-group user-helper-dropdown">
                <a href="{{route('admin.logout')}}" style="color: #fff;" title="Logout"><i class="material-icons">power_settings_new</i></a>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ route('ds.dashboard') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Theme Settings</span>
                </a>
                <ul class="ml-menu">
                    {{-- <li>
                        <a href="{{ route('ds.theme-setting.general-setting') }}">General Setting</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('ds.theme-setting.color-scheme') }}">Color Scheme</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.header-setting') }}">Header</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.slider-setting') }}">Slider Setting</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.favicon-setting') }}">Favicon</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.logo-setting') }}">Logo</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.menu-setting') }}">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.home-images') }}">Home Images</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.theme-setting.footer-setting') }}">Footer</a>
                    </li>
                </ul>
            </li>
           @if(Auth::user()->is_admin==1)
            
            <li>
                <a href="{{ route('ds.users.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>Vendors</span>
                </a>
            </li>   
           @endif
           <li>
                <a href="{{ route('ds.customer.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ds.category.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ds.subcategory.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>SubCategory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ds.product-management.brands') }}">
                    <i class="material-icons">view_list</i>
                    <span>Brands</span>
                </a>
            </li>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Products</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('ds.product-management.new-product-form') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('ds.product-management.products') }}">Products List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('ds.orders') }}">
                    <i class="material-icons">view_list</i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
               
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Shipping</span>
                </a>
                <ul class="ml-menu">
                    <li>
                         <a href="{{ route('ds.shipping.shipping') }}">
                   
                    <span>Shipping</span>
                </a>
                    </li>
                    <li>
                        <a href="{{ route('driver.view') }}">Driver </a>
                    </li>
                    <li>
                        <a href="{{ route('ds.shipping.shipping_orders_view') }}">Order Shipping </a>
                    </li>
                    <li>
                        <a href="{{ route('vehical.view') }}">Vendor </a>
                    </li>
                </ul>
            </li>
           <li>
                <a href="{{ route('ds.subscriber.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>Subscribers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ds.coupon.view') }}">
                    <i class="material-icons">view_list</i>
                    <span>Coupon</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            
 @if(Auth::user()->is_admin==1)
            &copy; 2020 - 2021 <a href="javascript:void(0);">MyDokkan - Admin Panel</a>.
           @else
          &copy; 2020 - 2021 <a href="javascript:void(0);">MyDokkan - Vendor Panel</a>.
           @endif

        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>