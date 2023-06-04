<header class="header-area header-style-1 header-height-2">
    {{--    <div class="mobile-promotion">--}}
    {{--        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>--}}
    {{--    </div>--}}
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Diploma project</li>
                                <li>Student IITU</li>
                                <li>Bolat Kuanysh</li>
                                <li>Bimat Akhmetrauani</li>
                                <li>Sailu Almaz</li>
                                <li>Yermagambet Madina</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            {{--                            <li>Phone: <strong class="text-brand ml-2"> +7 (708) 702 06 26 </strong></li>--}}
                            <li>
                                <a class="language-dropdown-active">
                                    @if(app()->getLocale() == 'kz')
                                        
                                        KAZAKH <i
                                            class="fi-rs-angle-small-down"></i>
                                    @else
                                         ENGLISH <i
                                            class="fi-rs-angle-small-down"></i>

                                    @endif
                                </a>

                                <ul class="language-dropdown">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            @if(app()->getLocale() == 'it')
                                                <li><a href="{{route('index',['lang' => $lang])}}">
                                                        
                                                        ENGLISH
                                                    </a>
                                                </li>
                                            @else
                                                <li><a href="{{route('index',['lang' => $lang])}}">
                
                                                        KAZAKH
                                                    </a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{url('/')}}"><img src="/uploads/logo/logo.png" alt="logo" style="height: 71px;width: 100%;object-fit: contain;"/></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li class="{{ (request()->routeIs('about')) ? 'active' : '' }}">
                                    <a href="{{route('about', app()->getLocale())}}">Addmission</a>
                                </li>
                                <li class="{{ (request()->routeIs('shop.index')) ? 'active' : '' }}">
                                    <a href="{{route('shop.index', app()->getLocale())}}">IITU Shop</a>
                                </li>
{{--                                <li class="{{ (request()->routeIs('brands')) ? 'active' : '' }}">--}}
{{--                                    <a href="{{route('brands', app()->getLocale())}}">Events</a>--}}
{{--                                </li>--}}
                                <li class="{{ (request()->routeIs('news')) ? 'active' : '' }}">
                                    <a href="{{route('news', app()->getLocale())}}">News</a>
                                </li>
                                <li class="{{ (request()->routeIs('contacts')) ? 'active' : '' }}">
                                    <a href="{{route('contacts', app()->getLocale())}}">Events</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="{{route('wishlist', app()->getLocale())}}">
                                <img alt="Livewire" src="/assets/imgs/theme/icons/icon-heart.svg"/>
                                @if(getFavorites())
                                    <span class="pro-count white">{{ getFavorites()->count()  }}</span>
                                @endif
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="{{route('cart', app()->getLocale())}}">
                                <img alt="Livewire" src="/assets/imgs/theme/icons/icon-cart.svg"/>

                                @if(session('cart'))
                                    <span class="pro-count blue">{{ count((array) session('cart')) }}</span>
                                @endif
                            </a>
                            <a href="{{route('cart', app()->getLocale())}}"><span class="lable">Carrello</span></a>
                            @if(session('cart'))
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        @foreach(session('cart') as $id => $details)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="{{ route('shop.show',['lang'=>app()->getLocale(),$id,$details['slug']]) }}"><img
                                                            alt="Livewire"
                                                            src="{{'/storage/' . $details['img_01'] }}"/></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4>
                                                        <a href="{{ route('shop.show',['lang'=>app()->getLocale(),$id,$details['slug']]) }}">{{$details['name']}}</a>
                                                    </h4>
                                                    <h4>
                                                        <span>{{$details['quantity']}} × </span>€ {{ price($details['price']) }}
                                                    </h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="{{route('remove', ['lang'=>app()->getLocale(),$id])}}"><i
                                                            class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total
                                                <span>{{ price($details['quantity'] * $details['price'])}}</span>
                                            </h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{route('cart', app()->getLocale())}}"
                                               class="outline">Cart</a>
                                            <a href="{{route('checkout', app()->getLocale())}}">Order</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{url('/')}}"><img src="/uploads/logo/logo.png" alt="logo"/></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <!-- {{--                <form id="mysearch"--}}
                {{--                      action="{{route('search',app()->getLocale()).'#productarea'}}"--}}
                {{--                      method="POST" role="search">--}}
                {{--                    {{ csrf_field() }}--}}
                {{--                    <input type="text"--}}
                {{--                           name="q" id="searchProduct" placeholder="{!!__('app.search')!!}"--}}
                {{--                           aria-label="q" aria-describedby="searchProduct1" required>--}}
                {{--                    <button type="submit" id="searchProduct1"></button>--}}

                {{--                </form>--}} 
                <livewire:product-search> -->
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="{{ (request()->routeIs('about')) ? 'active' : '' }}">
                            <a href="{{route('about', app()->getLocale())}}">Addmission</a>
                        </li>
                        <li class="{{ (request()->routeIs('shop.index')) ? 'active' : '' }}">
                            <a href="{{route('shop.index', app()->getLocale())}}">IITU Shop</a>
                        </li>
                        
                        <li class="{{ (request()->routeIs('news')) ? 'active' : '' }}">
                            <a href="{{route('news', app()->getLocale())}}">News</a>
                        </li>
                        <li class="{{ (request()->routeIs('contacts')) ? 'active' : '' }}">
                            <a href="{{route('contacts', app()->getLocale())}}">Events</a>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                <div class="single-mobile-header-info">
                    <a href="{{route('contacts', app()->getLocale())}}"><i class="fi-rs-marker"></i> <span>Kazakhstan<br> 050000, Almaty <br> Manasa 34A</span>
                    </a>
                </div>
                
                
            </div>
            <!-- <div class="mobile-social-icon mb-10">
                <h6 class="mb-15">Seguici su</h6>
                <a href="#" target="_blank"><img
                        src="/assets/imgs/theme/icons/icon-facebook-white.svg" alt=""/></a>
                <a href="#"
                   target="_blank"><img src="/assets/imgs/theme/icons/icon-instagram-white.svg" alt=""/></a>
            </div> -->
            <div class="site-copyright">  <p class="font-sm mb-0">© {{ date('Y') }} Student IITU <br>Designed by <a
                            href="https://instagram.com/2_kuanysh_2" target="_blank"><strong class="text-brand">Bolat Kuanysh</strong></a></p>
            </div>
        </div>
    </div>
</div>
