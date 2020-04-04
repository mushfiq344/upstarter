<!doctype html>
<html lang="en">

    <head>
       @include('front_end.partials.head')
        @yield('head')
    </head>

    <body>

        <div class="body_wrapper">
            @include('front_end.partials.header')
            <div class="side_menu_wrapper">
                <div class="side_menu">
                    <div class="menu_top">
                        <a href="#"><img src="{{url('front_end/img/logo.png')}}" srcset="img/logo2x.png 2x" alt="logo"></a>
                        <div class="close"><i class="ti-close"></i></div>
                    </div>
                    <div class="m_content">
                        <h2>Let's work together</h2>
                        <a href="mailto:saasland@gmail.com">droitlad@gmail.com</a>
                        <p>Meet saasland, the perfect theme to elevate your online presentation with.</p>
                        <ul class="list-unstyled get_info">
                            <li>
                                <div class="media">
                                    <img src="{{url('front_end/img/mega-menu-img/icon/blup.png')}}" alt="">
                                    <div class="media-body">
                                        <h4>info@saasland.com</h4>
                                        <p>online Support</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="{{url('front_end/img/mega-menu-img/icon/blup.png')}}" alt="">
                                    <div class="media-body">
                                        <h4>info@saasland.com</h4>
                                        <p>online Support</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="{{url('front_end/img/mega-menu-img/icon/blup.png')}}" alt="">
                                    <div class="media-body">
                                        <h4>info@saasland.com</h4>
                                        <p>online Support</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="m_footer list-unstyled">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            @yield('content')
            @include('front_end.partials.footer_codes')
        </div>
        @yield('js_links')
    </body>

</html>