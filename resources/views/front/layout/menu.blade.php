@php
    $menus = \App\Category::with('subcategories')->get();
@endphp
<div class="responsive so-megamenu  megamenu-style-dev">
    <div class="so-vertical-menu ">
        <nav class="navbar-default">    
            
            <div class="container-megamenu vertical">
                <div id="menuHeading">
                    <div class="megamenuToogle-wrapper">
                        <div class="megamenuToogle-pattern">
                            <div class="container">
                                <div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                All Categories                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-header">
                    <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                        <i class="fa fa-bars"></i>
                        <span>  All Categories</span>
                    </button>
                </div>
                <div class="vertical-wrapper">
                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                    <div class="megamenu-pattern">
                        <div class="container-mega">
                            <ul class="megamenu">
                                @foreach ($menus as $category)
                                    <li class="item-vertical  with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('public/front/image/catalog/menu/icons/ico10.png')}}" alt="icon">
                                            <span>{{ $category->name }}</span>
                                            @if ($category->subcategories)
                                                <b class="caret"></b>
                                            @endif
                                        </a>
                                        @if ($category->subcategories)
                                            <div class="sub-menu" data-subwidth="20">
                                                <div class="content" >
                                                    <div class="row">
                                                        <div class="col-sm-12 static-menu">
                                                            <div class="menu">
                                                                <ul>
                                                                    @foreach ($category->subcategories as $subcategory)
                                                                        <li><a href="#">{{ $subcategory->name }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                                <li class="item-vertical">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <img src="{{asset('public/front/image/catalog/menu/icons/ico1.png')}}" alt="icon">
                                        <span>Fashion & Accessories</span>
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