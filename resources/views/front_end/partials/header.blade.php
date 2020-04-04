<header class="header_area">
    <nav class="navbar navbar-expand-lg menu_one">
        <div class="container custom_container p0">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/front_end/img/logo_white.png')}}"
                                                             id="logo-img" alt="logo"></a>
            <a class="btn_get btn_hover mobile_btn ml-auto" href="#get-app">Get Started</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item dropdown submenu mega_menu mega_menu_two active">

                    </li>
                    <li class="dropdown submenu nav-item"><a title="Pages" class="dropdown-toggle nav-link"
                                                             data-toggle="dropdown" role="button" aria-haspopup="true"
                                                             aria-expanded="false" href="#">Browse Scholarships </a>
                        <ul role="menu" class=" dropdown-menu">
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Deadline--}}
                            {{--Approaching</a></li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">SDG</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">On--}}
                            {{--Going</a></li>--}}
                            <li class="dropdown submenu nav-item"><a title="Regions" class="dropdown-toggle nav-link"
                                                                     data-toggle="dropdown" role="button"
                                                                     aria-haspopup="true" aria-expanded="false"
                                                                     href="#">Regions <span
                                            class="arrow_carrot-right"></span> </a>
                                <ul class=" dropdown-menu">
                                    @foreach($regions as $region)
                                        @if($region->country_id!='Undefined')
                                            <li class="nav-item"><a title="" class="nav-link"
                                                                    href="{{route('get_explore_opp',['type'=>'all','region'=>$region->country_id,'funding_type'=>'all','deadline'=>'all','degree'=>'all'])}}">{{\App\Http\Controllers\Dashboard\FunctionController::get_country_name($region->country_id)}}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Conferences</a>--}}
                            {{--</li>--}}
                            <li class="dropdown submenu nav-item"><a title="Scholarships" class="dropdown-toggle nav-link"
                                                                     data-toggle="dropdown" role="button"
                                                                     aria-haspopup="true" aria-expanded="false"
                                                                     href="#">Scholarships <span
                                            class="arrow_carrot-right"></span> </a>
                                <ul class=" dropdown-menu">
                                    @foreach($opp_types as $type)
                                        <li class="nav-item"><a title="" class="nav-link"
                                                                href="{{route('get_explore_opp',['type'=>$type->id,'region'=>'all','funding_type'=>'all','deadline'=>'all','degree_type'=>'all'])}}">{{$type->type}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            {{--<li class="dropdown submenu nav-item"><a title="Service" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Others <span class="arrow_carrot-right"></span> </a>--}}
                            {{--<ul class=" dropdown-menu">--}}

                            {{--<li class="nav-item">--}}
                            {{--<a title="" class="nav-link" href="{{route('static_page',['type'=>'About Us'])}}">About Us--}}
                            {{--</a>--}}
                            {{--<a title="" class="nav-link" href="{{route('static_page',['type'=>'Terms And Conditions'])}}">Terms And Conditions--}}
                            {{--</a>--}}
                            {{--<a title="" class="nav-link" href="{{route('static_page',['type'=>'Faqs'])}}">Faqs--}}
                            {{--</a>--}}
                            {{--</li>--}}

                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Exchange--}}
                            {{--Programs</a></li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Fellowships</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Internships</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Workshops</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a title="About" class="nav-link" href="about.html">Miscellaneous</a>--}}
                            {{--</li>--}}


                        </ul>
                    </li>
                    <li class="dropdown submenu nav-item"><a title="Pages" class="dropdown-toggle nav-link"
                                                             data-toggle="dropdown" role="button" aria-haspopup="true"
                                                             aria-expanded="false" href="#">Others </a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="nav-item"><a title="About Us" class="nav-link"
                                                    href="{{route('static_page',['type'=>'About Us'])}}">About Us
                                </a></li>
                            <li class="nav-item"><a title="Terms And Conditions" class="nav-link"
                                                    href="{{route('static_page',['type'=>'Terms And Conditions'])}}">Terms
                                    & Conditions</a>
                            </li>
                            <li class="nav-item"><a title="Faqs" class="nav-link"
                                                    href="{{route('static_page',['type'=>'Faqs'])}}">Faqs
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu mega_menu">
                        <a class="nav-link dropdown-toggle" href="{{route('post_page')}}" role="button">
                            Post a Scholarship
                        </a>

                    </li>

                    <li class="nav-item">

                        <div class="input-group mb-3">
                            <form style="display:inherit;" action="{{route('post_search')}}" method="post">
                                {{ csrf_field() }}
                                <input name="search" type="text" class="form-control" placeholder="Search Scholarships"
                                       aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="search-btn-cls" type="submit"><span
                                                class="input-group-text search-span" id="basic-addon1"><i
                                                    class="fa fa-search"></i></span></button>
                                </div>
                            </form>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>