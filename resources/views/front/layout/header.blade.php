<header id="header" class=" typeheader-4">
    <!-- Header Top -->
    <div class="header-top hidden-compact">
        <div class="container">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-4 col-sm-6 col-xs-7">
                    <ul class="top-link list-inline lang-curr">
                        <li class="currency">
                            <div class="btn-group currencies-block">
                                <form action="" method="post" enctype="multipart/form-data" id="currency">
                                    <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu btn-xs">
                                        <li> <a href="#">(€)&nbsp;Euro</a></li>
                                        <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                        <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                    </ul>
                                </form>
                            </div>
                        </li>   
                        <li class="language">
                            <div class="btn-group languages-block ">
                                <form action="" method="post" enctype="multipart/form-data" id="bt-language">
                                    <a class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset('public/front/image/catalog/flags/gb.png')}}" alt="English" title="English">
                                        <span class="">English</span>
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""><img class="image_flag" src="{{asset('public/front/image/catalog/flags/gb.png')}}" alt="English" title="English" /> English </a></li>
                                        <li> <a href=""> <img class="image_flag" src="{{asset('public/front/image/catalog/flags/ar.png')}}" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                    </ul>
                                </form>
                            </div>
                            
                        </li>
                    </ul>
                                    
                </div>
                <div class="header-top-right collapsed-block col-lg-6 col-md-8 col-sm-6 col-xs-5">
                    <ul class="top-link list-inline">
                        <li class="account" id="my_account">
                            <a href="#" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span>My Account </span>  <span class="fa fa-caret-down"></span>
                            </a>
                            <ul class="dropdown-menu " style="display: none;">                      
                                <li><a href="{{ route('register-account') }}">Register</a>
                                </li>
                                <li><a href="{{ route('login-account') }}">Login</a>
                                </li>
                            </ul>
                        </li>
                        <li class="wishlist hidden-sm hidden-xs"><a href="{{ route('wishlist') }}" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><!-- <i class="fa fa-heart"></i> --> Wish List (0) </a>
                        </li>
                        <li class="checkout hidden-sm hidden-xs"><a href="{{ route('compare-product') }}" class="btn-link" title="Compare List "><span ><i class="fa fa-refresh"></i>Compare List (0) </span></a>
                        </li>
                        <li class="hidden-xs"><a href="{{ route('login-account') }}"><i class="fa fa-lock"></i>Login/</a><a href="{{ route('login-account') }}"><i class="fa fa-lock"></i>Register</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </div>

    <!-- //Header Top -->

    <!-- Header center -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{asset('public/front/image/catalog/myDokkan_logo.png')}}" title="Your Store" alt="Your Store" /></a></div>
                </div>
                <!-- //end Logo -->
                <!-- Search -->
                <div class="middle2 col-lg-7 col-md-6">
                    <div class="search-header-w">
                        <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>            
                        <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                            <form method="GET" action="">
                                <div id="search0" class="search input-group form-group">
                                    <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                        <select class="no-border" name="category_id">
                                            <option value="0">All Categories</option>
                                            <option value="78">Apparel</option>
                                            <option value="77">Cables &amp; Connectors</option>
                                            <option value="82">Cameras &amp; Photo</option>
                                            <option value="80">Flashlights &amp; Lamps</option>
                                            <option value="81">Mobile Accessories</option>
                                            <option value="79">Video Games</option>
                                            <option value="20">Jewelry &amp; Watches</option>
                                            <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                            <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                            <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                        </select>
                                    </div>

                                    <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                    <span class="input-group-btn">
                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <input type="hidden" name="route" value="product/search" />
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //end Search -->
                <div class="middle3 col-lg-3 col-md-3">                    
                    <!--cart-->
                    <div class="shopping_cart">
                        <div id="cart" class="btn-shopping-cart">
                            
                        </div>

                    </div>
                    <!--//cart-->                     
                </div>    
            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom hidden-compact">
        <div class="container">
            <div class="row">
                
                <div class="bottom1 menu-vertical col-lg-2 col-md-3">
                    <!-- Secondary menu -->
                    @include('front.layout.menu')
                    <!-- // end Secondary menu -->
                </div>
                <!-- Main menu -->
                <div class="main-menu col-lg-10 col-md-9">
                    <div class="responsive so-megamenu megamenu-style-dev">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal open ">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container-mega">
                                            <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                <li class="home hover">
                                                    <a href="">Home</a>
                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>About Us</strong>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Contact Us</strong>
                                                    </a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->  
            </div>
        </div>

    </div>

</header>