<ul class="submenu">
    @if(auth()->user()->type==1) {{--
    <li><a href="{{route('upload',['type'=>'blog'])}}"><i class="ti-video-clapper"></i>--}}
        {{--Blog</a></li>--}} {{--

    <li><a href="{{route('upload',['type'=>'event'])}}"><i class="ti-video-clapper"></i>--}}
        {{--Event</a></li>--}} {{--
    <li><a href="{{route('upload',['type'=>'expo'])}}"><i class="ti-harddrives"></i>Expo</a></li>--}} {{--
    <li><a href="{{route('upload',['type'=>'organization'])}}"><i class="ti-game"></i>Organization</a></li>--}} {{--
    <li><a href="{{route('upload',['type'=>'job'])}}"><i class="ti-tag"></i>Job Post</a></li>--}}
    <li><a href="{{route('upload',['type'=>'opportunity'])}}"><i class="ti-tag"></i>Opportunity</a></li>
    <li><a href="{{route('upload',['type'=>'opportunity_type'])}}"><i class="ti-tag"></i>Opportunity Type</a></li>
    <li><a href="{{route('upload',['type'=>'region'])}}"><i class="ti-tag"></i>Region</a></li>
    <li><a href="{{route('upload',['type'=>'degree_type'])}}"><i class="ti-tag"></i>Degree Type</a></li>
    <li><a href="{{route('upload',['type'=>'funding_type'])}}"><i class="ti-tag"></i>Funding Type</a></li>
    <li><a href="{{route('upload',['type'=>'explore_cover'])}}"><i class="ti-tag"></i>Explore Page Cover</a></li>
    <li><a href="{{route('upload',['type'=>'home_cover'])}}"><i class="ti-tag"></i>Home Page Cover</a></li>
    <li><a href="{{route('upload',['type'=>'post_opp_cover'])}}"><i class="ti-tag"></i>Post Opportunity Page Cover</a></li>
    <li><a href="{{route('upload',['type'=>'static_about_us_cover'])}}"><i class="ti-tag"></i>About Us Page Cover</a></li>
    <li><a href="{{route('upload',['type'=>'static_faqs_cover'])}}"><i class="ti-tag"></i>Faqs Cover</a></li>
    <li><a href="{{route('upload',['type'=>'static_terms_cover'])}}"><i class="ti-tag"></i>Terms And Conditions Page Cover</a></li>
    @endif {{--
    <li><a href="{{route('upload',['type'=>'idea'])}}"><i class="ti-tag"></i>Idea</a></li>--}}
</ul>