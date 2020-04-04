<!doctype html>
<html lang="en">

    <head>
        @include('front_end.partials.head')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    </head>

    <body style="background-color: #fbfbfd">

        <div class="body_wrapper">
            @include('front_end.partials.header')
            @if($type=='About Us')
                <section class="breadcrumb_area"
                         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{url("dashboard/images/default_images/static_about_us_cover.jpg")}}'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
                    <img class="breadcrumb_shap" src="" alt="">
                    <div class="container">
                        <div class="breadcrumb_content text-center">
                            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$type}}</h1>

                        </div>
                    </div>
                </section>
            @elseif($type=='Faqs')
                <section class="breadcrumb_area"
                         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{url("dashboard/images/default_images/static_faqs_cover.jpg")}}'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
                    <img class="breadcrumb_shap" src="" alt="">
                    <div class="container">
                        <div class="breadcrumb_content text-center">
                            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$type}}</h1>

                        </div>
                    </div>
                </section>
            @elseif($type=='Terms And Conditions')
                <section class="breadcrumb_area"
                         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{url("dashboard/images/default_images/static_terms_cover.jpg")}}'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
                    <img class="breadcrumb_shap" src="" alt="">
                    <div class="container">
                        <div class="breadcrumb_content text-center">
                            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$type}}</h1>

                        </div>
                    </div>
                </section>
            @elseif($type=='Contact Us')
                <section class="breadcrumb_area"
                         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{url("dashboard/images/default_images/static_about_us_cover.jpg")}}'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
                    <img class="breadcrumb_shap" src="" alt="">
                    <div class="container">
                        <div class="breadcrumb_content text-center">
                            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$type}}</h1>

                        </div>
                    </div>
                </section>
            @endif
            @if($type!='Faqs')
                <section class="job_details_area sec_pad">
                    <div class="container custom_container">
                        <div class="row flex-row-reverse">
                            <div class="col-lg-4 pl_30">
                                {{--<div class="job_info">--}}
                                {{--<div>--}}
                                {{--<div class="mt_30">--}}
                                {{--<div class="widget_title">--}}
                                {{--<h3 class="f_p f_size_20 t_color3"><i class="fas fa-bolt"></i> Trending--}}
                                {{--</h3>--}}
                                {{--<div class="border_bottom"></div>--}}
                                {{--</div>--}}
                                {{--@foreach($trendings as $trending)--}}
                                {{--<div>--}}
                                {{--<div class="media post_item">--}}
                                {{--<img height="70px" width="70px" src="{{$trending->image}}"--}}
                                {{--alt="">--}}
                                {{--<div class="blog-sidebar media-body">--}}
                                {{--<a href="{{route('get_opp',['id'=>$trending->id])}}">--}}
                                {{--<h3 class="f_size_16 f_p f_400">{{$trending->title}}.--}}
                                {{--</h3>--}}
                                {{--</a>--}}
                                {{--<div class="entry_post_info">--}}
                                {{--By:--}}
                                {{--<a href="{{route('get_opp',['id'=>$trending->id])}}}}">Admin</a>--}}
                                {{--<a href="{{route('get_opp',['id'=>$trending->id])}}">{{date('F j, Y', strtotime($trending->created_at))}}</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<br>--}}
                                {{--@endforeach--}}
                                {{--</div>--}}
                                {{--<div class="f_social_icon_two text-center">--}}
                                {{--<a href="https://www.facebook.com/YouthScholarship/"><i class="ti-facebook"></i></a>--}}
                                {{--<a href="#"><i class="ti-twitter-alt"></i></a>--}}
                                {{--<a href="#"><i class="ti-vimeo-alt"></i></a>--}}
                                {{--<a href="#"><i class="ti-pinterest"></i></a>--}}
                                {{--</div>--}}

                                {{--</div>--}}

                                {{--</div>--}}
                            </div>
                            <div class="col-lg-8">
                                <div class="details_content">
                                    {{--<div class="sec_title mb_70">--}}

                                    {{--<h3 class="f_p f_size_22 f_500 t_color3 mt_30 mb_20">Job Requirements</h3>--}}
                                    {{--<p class="f_400 f_size_15">Why I say old chap that is spiffing pukka, bamboozled--}}
                                    {{--wind up--}}
                                    {{--bugger buggered zonked hanky panky a blinding shot the little rotter, bubble and--}}
                                    {{--squeak--}}
                                    {{--vagabond cheeky bugger at public school pardon you bloke the BBC. Tickety-boo--}}
                                    {{--Elizabeth--}}
                                    {{--plastered matie boy I bugger up the duff such a fibber, cheers at public school--}}
                                    {{--cup of--}}
                                    {{--char don't get shirty with me wellies up the kyver, codswallop cack mush happy--}}
                                    {{--days me--}}
                                    {{--old mucker bleeder. Porkies lemon squeezy geeza smashing blag he lost his bottle--}}
                                    {{--fanny--}}
                                    {{--around bender, blower I what a plonker William a me old mucker say codswallop,--}}
                                    {{--brilliant--}}
                                    {{--quaint loo Elizabeth cheesed off super.!</p>--}}
                                    {{--</div>--}}
                                    {{--<iframe width="100%" height="600" src="https://www.youtube.com/embed/FWkTH9MuEnI"--}}
                                    {{--frameborder="0"--}}
                                    {{--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
                                    {{--allowfullscreen></iframe>--}}
                                    <div class="sec_title mb_70 mt_30">
                                        @if($type=='About Us')
                                            <p class="f_400 f_size_15">Youth Scholarship is an education based website
                                                and
                                                is a slot of opportunity for students. This
                                                website publishes all global and regional scholarships. Youth
                                                Scholarship
                                                concerns to offer a
                                                better world by individual career development.</p>
                                        @elseif($type=='Terms And Conditions')
                                            <p class="f_400 f_size_15">This website contained all information’s only for
                                                general information purposes. The contents of this site are provided as
                                                a free information resource for scholarship seekers. We tend to keep all
                                                information’s up to date and correct, and subsequently its addressing
                                                all scholarship seekers to be appeared in details that Youth scholarship
                                                may change any demonstrated post at any time without advance notice.
                                                Moreover we don’t make representations or warranties of any kind,
                                                express or implied, about the completeness, accuracy, reliability,
                                                suitability or availability with respect to the website or the
                                                information, products, services, or related graphics contained on the
                                                website. Be notified that yscholarship.com does not offer grants,
                                                prizes, awards, funds, certificates, scholarships, or conduct lotteries.
                                                As per all circumstances Youth Scholarship won’t be liable for any
                                                direct and indirect consequential loss or damage, or any loss or damage.
                                                Any reliance you dispose on such information is therefore strictly at
                                                your own risk. So, it directly refers to be connected with scholarship
                                                provider organization for further queries.Terms</p>
                                        @else
                                            @include('admin_panel.forms.upload.partials.alert_message')
                                            <form action="{{route('insert_form_subs',['type'=>'subscriber'])}}" method="post">
                                                @csrf
                                                <h3>Contact Us:</h3>
                                                <div class="form-group row">

                                                    <div class="col-md-8">
                                                    <input class="form-control" name="name" type="text"
                                                           placeholder="Type Name Here">
                                                    </div>
                                                    <div class="col-md-8 mt-2">
                                                        <input class="form-control" name="email" type="email"
                                                           placeholder="Type Email Address Here">

                                                    </div>
                                                    <div class="col-md-12"></div>
                                                    <div class="col-md-2 mt-2">
                                                       <input class="form-control btn btn-success" type="submit" value="Subscribe">
                                                    </div>
                                                    </div>

                                            </form>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section class="job_details_area sec_pad">
                    <div class="container custom_container">
                        <div class="tab-content faq_content" id="myTabContent">
                            <div class="tab-pane fade show active" id="purchas" role="tabpanel"
                                 aria-labelledby="purchas-tab">

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    What Is Youth Scholarship ?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Youth Scholarship is a worthy slot of Scholarship opportunity. Youth
                                                Scholarship have been accomplished
                                                by bringing all scholarship opportunities in a one platform from the
                                                different corner of the world. It poses
                                                as a serving title in terms of important scholarship publisher. For
                                                being more clarified, <a href="https://www.yscholarship.com"> please
                                                    visit our site</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    What does Youth Scholarship do?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Youth Scholarship is a media or bridges between the scholarship
                                                providers and scholarship seekers for
                                                free. Youth Scholarship assists students to find their scholarship
                                                regarding their previous background and
                                                it is dedicated for all young students in free to access.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    What are the types of Scholarship YS share ?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Youth Scholarship publicizes a number of opportunity for young students
                                                or upcoming scholars, included
                                                stakes are: Scholarship, awards, grants, workshop, and etc.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingfour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapsefour" aria-expanded="false"
                                                        aria-controls="collapsefour">
                                                    How will I communicate with Youth Scholarship ?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Scholars are encouraged to find us via the following steps:
                                                <ul>
                                                    <li>Contact for Email: <a href="mailto:youthscholarship@gmail.com">Mail
                                                            Us</a></li>
                                                    <li>Contact for Facebook :</li>
                                                    <li>Contact for Instagram:</li>
                                                    <li>Contact for Twitter:</li>
                                                    <li>Contact for Pinterest:</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingfive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapsefive" aria-expanded="false"
                                                        aria-controls="collapsefive">
                                                    How will I be in the range of organization of scholarship?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Please be notified that Youth Scholarship mainly circulates or
                                                disseminates information about Scholarship,
                                                awards, grants,and workshop from the main of icial site of scholarship
                                                providers. So scholarship seekers
                                                are suggested to access the of icial sites of scholarship provider or
                                                advise to be connected with
                                                organizations of scholarship provider.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion2">
                                    <div class="card">
                                        <div class="card-header" id="headingsix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapsesix" aria-expanded="false"
                                                        aria-controls="collapsesix">
                                                    Can I invite Youth Scholarship to my institution or Campus?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                             data-parent="#accordion2">
                                            <div class="card-body">
                                                We always appreciate your Interest. If you wish to invite Youth
                                                Scholarship in your institute or campus
                                                then you have intended to reach us via <a
                                                        href="mailto:youthscholarship@gmail.com">youthscholarship@gmail.com</a></li>
                                                , and Youth Scholarship team keeps a
                                                feedback for further process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingseven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseseven" aria-expanded="false"
                                                        aria-controls="collapseseven">
                                                    Can I promote my Youth Scholarship at my institute?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                                             data-parent="#accordion2">
                                            <div class="card-body">
                                                Yes! You can speared Youth Scholarship in your ranges.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="returns" role="tabpanel" aria-labelledby="returns-tab">
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20">How to purchase</h3>
                                <div id="accordion3">
                                    <div class="card">
                                        <div class="card-header" id="heading10">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapse10" aria-expanded="true"
                                                        aria-controls="collapse10">
                                                    What Is Youth Scholarship ?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse10" class="collapse show" aria-labelledby="heading10"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                Youth Scholarship is a worthy slot of Scholarship opportunity. Youth
                                                Scholarship have been accomplished
                                                by bringing all scholarship opportunities in a one platform from the
                                                different corner of the world. It poses
                                                as a serving title in terms of important scholarship publisher. For
                                                being more clarified, <a href="https://www.yscholarship.com"> please
                                                    visit our site</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading11">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse11" aria-expanded="false"
                                                        aria-controls="collapse11">
                                                    Where can I find instructions on how to use my watch?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading12">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse12" aria-expanded="false"
                                                        aria-controls="collapse12">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading13">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse13" aria-expanded="false"
                                                        aria-controls="collapse13">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse13" class="collapse" aria-labelledby="heading13"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading14">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse14" aria-expanded="false"
                                                        aria-controls="collapse14">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse14" class="collapse" aria-labelledby="heading14"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20">How to purchase</h3>
                                <div id="accordion4">
                                    <div class="card">
                                        <div class="card-header" id="heading15">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapse15" aria-expanded="true"
                                                        aria-controls="collapse15">
                                                    How do I repair an item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse15" class="collapse show" aria-labelledby="heading15"
                                             data-parent="#accordion4">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading16">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse16" aria-expanded="false"
                                                        aria-controls="collapse16">
                                                    Where can I find instructions on how to use my watch?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse16" class="collapse" aria-labelledby="heading16"
                                             data-parent="#accordion4">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading17">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse17" aria-expanded="false"
                                                        aria-controls="collapse17">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse17" class="collapse" aria-labelledby="heading17"
                                             data-parent="#accordion4">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading18">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse18" aria-expanded="false"
                                                        aria-controls="collapse18">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse18" class="collapse" aria-labelledby="heading18"
                                             data-parent="#accordion4">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading19">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse19" aria-expanded="false"
                                                        aria-controls="collapse19">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse19" class="collapse" aria-labelledby="heading19"
                                             data-parent="#accordion4">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20 mt_100">How to pay</h3>
                                <div id="accordion5">
                                    <div class="card">
                                        <div class="card-header" id="heading20">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse20" aria-expanded="false"
                                                        aria-controls="collapse20">
                                                    How do I repair an item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse20" class="collapse" aria-labelledby="heading20"
                                             data-parent="#accordion5">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading21">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse21" aria-expanded="false"
                                                        aria-controls="collapse21">
                                                    Where can I find instructions on how to use my watch?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse21" class="collapse" aria-labelledby="heading21"
                                             data-parent="#accordion5">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading22">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse22" aria-expanded="false"
                                                        aria-controls="collapse22">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse22" class="collapse" aria-labelledby="heading22"
                                             data-parent="#accordion5">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading23">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse23" aria-expanded="false"
                                                        aria-controls="collapse23">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse23" class="collapse" aria-labelledby="heading23"
                                             data-parent="#accordion5">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="care" role="tabpanel" aria-labelledby="care-tab">
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20">How to purchase</h3>
                                <div id="accordion6">
                                    <div class="card">
                                        <div class="card-header" id="heading24">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapse24" aria-expanded="true"
                                                        aria-controls="collapse24">
                                                    How do I repair an item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse24" class="collapse show" aria-labelledby="heading24"
                                             data-parent="#accordion6">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading25">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse25" aria-expanded="false"
                                                        aria-controls="collapse25">
                                                    Where can I find instructions on how to use my watch?<i
                                                            class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse25" class="collapse" aria-labelledby="heading25"
                                             data-parent="#accordion6">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading26">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse26" aria-expanded="false"
                                                        aria-controls="collapse26">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse26" class="collapse" aria-labelledby="heading26"
                                             data-parent="#accordion6">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading27">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse27" aria-expanded="false"
                                                        aria-controls="collapse27">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse27" class="collapse" aria-labelledby="heading27"
                                             data-parent="#accordion6">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading28">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse28" aria-expanded="false"
                                                        aria-controls="collapse28">
                                                    Is there a warranty on my item?<i class="ti-plus"></i><i
                                                            class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse28" class="collapse" aria-labelledby="heading28"
                                             data-parent="#accordion6">
                                            <div class="card-body">
                                                Why I say old chap that is spiffing pukka, bamboozled wind up bugger
                                                buggered zonked hanky panky a blinding shot the little rotter, bubble
                                                and squeak vagabond cheeky bugger at public school pardon you bloke the
                                                BBC. Tickety-boo Elizabeth plastered matie.!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @include('front_end.partials.footer_codes')
        </div>
        <!-- Optional JavaScript -->
        <script>
            $('.summernote').summernote({
                tabsize: 2,
                height: 100
            });
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @include('front_end.partials.footer_links_for_index')
    </body>

</html>