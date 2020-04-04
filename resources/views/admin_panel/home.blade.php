@extends('admin_panel.layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to {{project_name}} - Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4"><img
                                            src="{{url('dashboard/assets/images/services-icon/01.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Opportunities</h5>
                                <h4 class="font-500">{{$total_opp}} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                                </h4>
                            </div>
                            <div class="pt-2">
                                <div class="float-right"><a href="{{route('list',['type'=>'opportunity'])}}"
                                                            class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                                <p class="text-white-50 mb-0">See The List</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-xl-3 col-md-6">--}}
                    {{--<div class="card mini-stat bg-primary text-white">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="mb-4">--}}
                                {{--<div class="float-left mini-stat-img mr-4"><img--}}
                                            {{--src="{{url('public/dashboard/assets/images/services-icon/02.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<h5 class="font-16 text-uppercase mt-0 text-white-50">Regions</h5>--}}
                                {{--<h4 class="font-500">{{$total_regions}} <i--}}
                                            {{--class="mdi mdi-arrow-down text-danger ml-2"></i></h4>--}}
                            {{--</div>--}}
                            {{--<div class="pt-2">--}}
                                {{--<div class="float-right"><a href="{{route('list',['type'=>'region'])}}"--}}
                                                            {{--class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>--}}
                                {{--</div>--}}
                                {{--<p class="text-white-50 mb-0">See The List</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4"><img
                                            src="{{url('dashboard/assets/images/services-icon/02.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Visitor</h5>
                                <h4 class="font-500">{{$total_views}} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                                </h4>
                                {{--<div class="mini-stat-label bg-info">--}}
                                {{--<p class="mb-0">00%</p>--}}
                                {{--</div>--}}
                            </div>
                            <div class="pt-2">
                                <div class="float-right"><a href="{{route('list',['type'=>'opportunity'])}}"
                                                            class="text-white-50"><i
                                                class="mdi mdi-arrow-right h5"></i></a></div>
                                <p class="text-white-50 mb-0">See Total List</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4"><img
                                            src="{{url('dashboard/assets/images/services-icon/04.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Applications</h5>
                                <h4 class="font-500">{{$total_applications}} <i
                                            class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                {{--<div class="mini-stat-label bg-warning">--}}
                                {{--<p class="mb-0">+ 84%</p>--}}
                                {{--</div>--}}
                            </div>
                            <div class="pt-2">
                                {{--<div class="float-right"><a href="#" class="text-white-50"><i--}}
                                {{--class="mdi mdi-arrow-right h5"></i></a></div>--}}
                                {{--<p class="text-white-50 mb-0">Since last month</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Sales Report</h4>
                                <div class="cleafix"><p class="float-left"><i
                                                class="mdi mdi-calendar mr-1 text-primary"></i> Jan 01 - Jan 31</p><h5
                                            class="font-18 text-right">$4231</h5></div>
                                <div id="ct-donut" class="ct-chart wid"></div>
                                <div class="mt-4">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td><span class="badge badge-primary">Desk</span></td>
                                                <td>Desktop</td>
                                                <td class="text-right">54.5%</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-success">Mob</span></td>
                                                <td>Mobile</td>
                                                <td class="text-right">28.0%</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-warning">Tab</span></td>
                                                <td>Tablets</td>
                                                <td class="text-right">17.5%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-4">Activity</h4>
                                <ol class="activity-feed">
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 22</span> <span
                                                    class="activity-text">Responded to need “Volunteer Activities”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 20</span> <span
                                                    class="activity-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui deleniti atque...<a
                                                        href="#" class="text-success">Read more</a></span></div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 19</span> <span
                                                    class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 17</span> <span
                                                    class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 16</span> <span
                                                    class="activity-text">Sed ut perspiciatis unde omnis iste natus error sit rem.</span>
                                        </div>
                                    </li>
                                </ol>
                                <div class="text-center"><a href="#" class="btn btn-primary">Load More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-center text-white py-4"><h5
                                                    class="mt-0 mb-4 text-white-50 font-16">Top Product Sale</h5>
                                            <h1>1452</h1>
                                            <p>Computer</p>
                                            <p class="text-white-50 mb-0">At solmen va esser necessi far uniform
                                                myth... <a href="#" class="text-white">View more</a></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            {{--<div class="row">--}}
            {{--<div class="col-xl-9">--}}
            {{--<div class="card">--}}
            {{--<div class="card-body">--}}
            {{--<h4 class="mt-0 header-title mb-5">Monthly Earning</h4>--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-7">--}}
            {{--<div>--}}
            {{--<div id="chart-with-area" class="ct-chart earning ct-golden-section"></div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-5">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="text-center">--}}
            {{--<p class="text-muted mb-4">This month</p>--}}
            {{--<h4>$34,252</h4>--}}
            {{--<p class="text-muted mb-5">It will be as simple as in fact it will be--}}
            {{--occidental.</p><span class="peity-donut"--}}
            {{--data-peity="{ &quot;fill&quot;: [&quot;#02a499&quot;, &quot;#f2f2f2&quot;], &quot;innerRadius&quot;: 28, &quot;radius&quot;: 32 }"--}}
            {{--data-width="72" data-height="72">4/5</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="text-center">--}}
            {{--<p class="text-muted mb-4">Last month</p>--}}
            {{--<h4>$36,253</h4>--}}
            {{--<p class="text-muted mb-5">It will be as simple as in fact it will be--}}
            {{--occidental.</p><span class="peity-donut"--}}
            {{--data-peity="{ &quot;fill&quot;: [&quot;#02a499&quot;, &quot;#f2f2f2&quot;], &quot;innerRadius&quot;: 28, &quot;radius&quot;: 32 }"--}}
            {{--data-width="72" data-height="72">3/5</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div><!-- end row -->--}}
            {{--</div>--}}
            {{--</div><!-- end card -->--}}
            {{--</div>--}}
            {{--<div class="col-xl-3">--}}
            {{--<div class="card">--}}
            {{--<div class="card-body">--}}
            {{--<div>--}}
            {{--<h4 class="mt-0 header-title mb-4">Sales Analytics</h4>--}}
            {{--</div>--}}
            {{--<div class="wid-peity mb-4">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
            {{--<div>--}}
            {{--<p class="text-muted">Online</p>--}}
            {{--<h5 class="mb-4">1,542</h5>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="mb-4"><span class="peity-line" data-width="100%"--}}
            {{--data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}"--}}
            {{--data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="wid-peity mb-4">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
            {{--<div>--}}
            {{--<p class="text-muted">Offline</p>--}}
            {{--<h5 class="mb-4">6,451</h5>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="mb-4"><span class="peity-line" data-width="100%"--}}
            {{--data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}"--}}
            {{--data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
            {{--<div>--}}
            {{--<p class="text-muted">Marketing</p>--}}
            {{--<h5>84,574</h5>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="mb-4"><span class="peity-line" data-width="100%"--}}
            {{--data-peity="{ &quot;fill&quot;: [&quot;rgba(2, 164, 153,0.3)&quot;],&quot;stroke&quot;: [&quot;rgba(2, 164, 153,0.8)&quot;]}"--}}
            {{--data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div><!-- end row -->--}}
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Top Visited Posts</h4>
                            <ol class="activity-feed">
                                @foreach($top_visited_opps as $opp)
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span
                                                    class="date"><a
                                                        href="{{'/opportunity/'.$opp->id}}">{{date('F j, Y', strtotime($opp->created_at))}}</a></span>
                                            <span
                                                    class="activity-text">{{$opp->title}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                            <div class="text-center"><a href="{{route('list',['type'=>'opportunity'])}}"
                                                        class="btn btn-primary">Load More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Top Applied Posts</h4>
                            <ol class="activity-feed">
                                @foreach($top_applied_opps as $opp)
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span
                                                    class="date"><a
                                                        href="{{'/opportunity/'.$opp->id}}">{{date('F j, Y', strtotime($opp->created_at))}}</a></span>
                                            <span
                                                    class="activity-text">{{$opp->title}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                            <div class="text-center"><a href="{{route('list',['type'=>'opportunity'])}}"
                                                        class="btn btn-primary">Load More</a></div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-xl-5">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                {{--<div class="card text-center">--}}
                {{--<div class="card-body">--}}
                {{--<div class="py-4"><i--}}
                {{--class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>--}}
                {{--<h5 class="text-primary mt-4">Order Successful</h5>--}}
                {{--<p class="text-muted">Thanks you so much for your order.</p>--}}
                {{--<div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Chack Status</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                {{--<div class="card bg-primary">--}}
                {{--<div class="card-body">--}}
                {{--<div class="text-center text-white py-4">--}}
                {{--<h5 class="mt-0 mb-4 text-white-50 font-16">Top Product Sale</h5>--}}
                {{--<h1>1452</h1>--}}
                {{--<p>Computer</p>--}}
                {{--<p class="text-white-50 mb-0">At solmen va esser necessi far uniform myth... <a--}}
                {{--href="#" class="text-white">View more</a></p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                {{--<h4 class="mt-0 header-title mb-4">Client Reviews</h4>--}}
                {{--<p class="text-muted mb-5">" Everyone realizes why a new common language would be--}}
                {{--desirable one could refuse to pay expensive translators it would be necessary.--}}
                {{--"</p>--}}
                {{--<div class="float-right mt-2"><a href="#" class="text-primary"><i--}}
                {{--class="mdi mdi-arrow-right h5"></i></a></div>--}}
                {{--<h6 class="mb-0"><img src="assets/images/users/user-3.jpg" alt=""--}}
                {{--class="thumb-sm rounded-circle mr-2"> James Athey</h6>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div><!-- end row -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Regions</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Region</th>
                                            <th scope="col">Total Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($regions as $region)
                                            @if($region->country_id!='Undefined')
                                                <tr>

                                                    <th scope="row">#{{$region->country_id}}</th>
                                                    <td>{{\App\Http\Controllers\Dashboard\FunctionController::get_country_name($region->country_id)}}</td>
                                                    <td>{{$region->user_count}}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-xl-4">--}}
                {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                {{--<h4 class="mt-0 header-title mb-4">Chat</h4>--}}
                {{--<div class="chat-conversation">--}}
                {{--<div class="slimScrollDiv"--}}
                {{--style="position: relative; overflow: hidden; width: auto; height: 446.091px;">--}}
                {{--<ul class="conversation-list slimscroll"--}}
                {{--style="max-height: 400px; overflow: hidden; width: auto; height: 446.091px;">--}}
                {{--<li class="clearfix">--}}
                {{--<div class="chat-avatar"><img src="assets/images/users/user-2.jpg"--}}
                {{--alt="male"> <span class="time">10:00</span>--}}
                {{--</div>--}}
                {{--<div class="conversation-text">--}}
                {{--<div class="ctext-wrap"><span class="user-name">John Deo</span>--}}
                {{--<p>Hello!</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="clearfix odd">--}}
                {{--<div class="chat-avatar"><img src="assets/images/users/user-3.jpg"--}}
                {{--alt="Female"> <span class="time">10:01</span>--}}
                {{--</div>--}}
                {{--<div class="conversation-text">--}}
                {{--<div class="ctext-wrap"><span class="user-name">Smith</span>--}}
                {{--<p>Hi, How are you? What about our next meeting?</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="clearfix">--}}
                {{--<div class="chat-avatar"><img src="assets/images/users/user-2.jpg"--}}
                {{--alt="male"> <span class="time">10:04</span>--}}
                {{--</div>--}}
                {{--<div class="conversation-text">--}}
                {{--<div class="ctext-wrap"><span class="user-name">John Deo</span>--}}
                {{--<p>Yeah everything is fine</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="clearfix odd">--}}
                {{--<div class="chat-avatar"><img src="assets/images/users/user-3.jpg"--}}
                {{--alt="male"> <span class="time">10:05</span>--}}
                {{--</div>--}}
                {{--<div class="conversation-text">--}}
                {{--<div class="ctext-wrap"><span class="user-name">Smith</span>--}}
                {{--<p>Wow that's great</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="clearfix odd">--}}
                {{--<div class="chat-avatar"><img src="assets/images/users/user-3.jpg"--}}
                {{--alt="male"> <span class="time">10:08</span>--}}
                {{--</div>--}}
                {{--<div class="conversation-text">--}}
                {{--<div class="ctext-wrap"><span class="user-name mb-2">Smith</span> <img--}}
                {{--src="assets/images/small/img-1.jpg" alt="" height="48px"--}}
                {{--class="rounded mr-2"> <img--}}
                {{--src="assets/images/small/img-2.jpg" alt="" height="48px"--}}
                {{--class="rounded"></div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="slimScrollBar"--}}
                {{--style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 336.134px;"></div>--}}
                {{--<div class="slimScrollRail"--}}
                {{--style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-9 col-8 chat-inputbar"><input type="text"--}}
                {{--class="form-control chat-input"--}}
                {{--placeholder="Enter your text">--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-4 chat-send">--}}
                {{--<button type="submit" class="btn btn-success btn-block">Send</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div><!-- end row -->
        </div>
    </div><!-- content -->
@endsection
