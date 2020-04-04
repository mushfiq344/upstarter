@extends('front_end.layouts.main')
@section('content')
    <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="{{url('dashboard/images/default_images/explore_cover.jpg')}}"
             alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{\App\Http\Controllers\Dashboard\FunctionController::get_opportunity_type_name($type_id)}}</h1>
                {{--<p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut--}}
                    {{--arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>--}}
            </div>
        </div>
    </section>

    <section class="blog_area sec_pad">
        <div class="container custom_container">
            <form action="{{route('post_explore_opp')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2">
                        <select class="selectpickers" style="display: none;" name="type" required>
                            <option value="all">Choose</option>
                            @foreach($opp_types as $type)
                                @if($type->id==$type_id)
                                    <option value="{{$type->id}}" selected>{{$type->type}}</option>
                                @else
                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select class="selectpickers" style="display: none;" name="funding_type">
                            <option value="all">Choose</option>
                            @foreach($funding_types as $fund)
                                @if($fund->id==$fund_id)
                                    <option value="{{$fund->id}}" selected>{{$fund->type}}</option>
                                @else
                                    <option value="{{$fund->id}}">{{$fund->type}}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select class="selectpickers" style="display: none;" name="degree_type">
                            <option value="all">Choose</option>
                            @foreach($degree_types as $degree)
                                @if($degree->id==$degree_id)
                                    <option value="{{$degree->id}}" selected>{{$degree->type}}</option>
                                @else
                                    <option value="{{$degree->id}}">{{$degree->type}}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select class="selectpickers" style="display: none;" name="region">
                            <option value="all">Choose</option>
                            @foreach($regions as $region)
                                @if($region->id==$region_id)
                                    <option value="{{$region->id}}" selected>{{$region->type}}</option>
                                @else
                                    <option value="{{$region->id}}">{{$region->type}}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="date" name="deadline">
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn_submit f_size_15 f_500">Explore</button>
                        <a class="btn  f_size_15 f_500" href="{{route('get_explore_opp',['type'=>'all','region'=>'all','funding_type'=>'all','deadline'=>'all','degree_type'=>'all'])}}">
                            Reset Filter
                        </a>
                    </div>
            </form>
        </div>

        <div class="row">
            @foreach($objects as $object)
                <div class="col-lg-3 mt_40">
                    <div class="h_blog_item pos_blog_item">
                        <img src="{{$object->image}}" alt="">
                        <div class="h_blog_content">
                            <a href="{{route('get_opp',['id'=>$object->id])}}" class="post_time"><i
                                        class="icon_clock_alt"></i>{{date('F j, Y', strtotime($object->created_at))}}
                            </a>
                            <a href="{{route('get_opp',['id'=>$object->id])}}"><h3>{{$object->title}}..</h3></a>
                            <div class="post-info-bottom">
                                <a href="{{route('get_opp',['id'=>$object->id])}}" class="learn_btn_two">Read More <i class="arrow_right"></i></a>
                                {{--<a class="post-info-comments" href="#">--}}
                                {{--<i class="icon_comment_alt" aria-hidden="true"></i>--}}
                                {{--<span>3 Comments</span>--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        {{$objects->links('front_end.partials.paginate')}}
        {{--<div class="row">--}}
        {{--<div class="col-md-12 ">--}}
        {{--<ul class="col-lg-12 list-unstyled page-numbers shop_page_number">--}}
        {{--<li><span aria-current="page" class="page-numbers current">1</span></li>--}}
        {{--<li><a class="page-numbers" href="#">2</a></li>--}}
        {{--<li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}


        </div>
    </section>
@endsection
@section('js_links')
    @include('front_end.partials.footer_links_for_opportunities')
@endsection
