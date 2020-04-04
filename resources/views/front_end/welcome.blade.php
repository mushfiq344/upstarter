<!DOCTYPE html>
<html lang="en">

<head>
    <title>upstarter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{('upstarter/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="{{url('upstarter/img/default/icons/favicon.png')}}">

    <!-- custom design -->
    <link rel="stylesheet" href="{{('upstarter/css/style.css')}}">
    <!-- font -->
    <link rel="stylesheet" href="{{('upstarter/css/font.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d322b1c85b.js"></script>


</head>

<body style="">
    <img class="body-background" src="{{('upstarter/img/default/banners/banner_bg.png')}}" alt="" style="">
    <div class="container">
        <nav id="main_navbar" class="navbar navbar-expand-lg navbar-light mb-4  p-4 mb-4 navbar-custom">
            <a class="navbar-brand" href="/"><img src="{{('upstarter/img/default/logos/logo.svg')}}" height="30px"></a>
            <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active ml-4 mr-4">
                            <a class="nav-link" href="#">Courses <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active ml-4 mr-4">
                            <a class="nav-link" href="#">startup-jobs <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active ml-4 mr-4">
                            <a class="nav-link" href="/opportunities">Browse Opportunities <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active ml-4 mr-4">
                            <a class="nav-link" href="/post_opp">Post an Opportunities <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active ml-4 mr-4">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item active ml-4 mr-4">
                            <a href="/admin/login" class="btn form-control" style="background-color:#7E8AFF;color: white;border-radius: 30px;"><i class="fab fa-facebook-f"></i> Login</a>
                        </li>
                    </ul>

                </form>

            </div>
        </nav>
        <div class="row ml-4">
            <div class="jumbotron mt-4" style="width: 100%;background: transparent;">
                <div style="z-index:300;position: absoulute;" class="mt-4">
                    <p class="f-600" style="font-size: 32px; color: #434343; width: 509px" data-wow-delay="0.4s" data-wow-delay="0.4s">We are all about</p>
                    <h2 class="f-900 wow fadeInLeft" style="width:auto" data-wow-delay="0.3s">
                        Supercharging the Bangladeshi Startup Ecosystem</h2>
                    <p class="f-600  wow fadeInLeft" style="font-size: 25px; color: #434343; width: 509px" data-wow-delay="0.4s">Certe, inquam, pertinax non ero tibique, si ob rem voluptas sit, voluptatem accusantium. Filium morte multavit si sine causa, mox videro; interea hoc epicurus in malis. Hanc ego cum teneam sententiam, </p>
                    <div class="action_btn d-flex align-items-center mt_40">
                        <button class="btn" style="background-color:#7E8AFF;color: white;border-radius: 30px;"><a>Learn More</a>
                        </button>

                    </div>
                </div>
                <img class="main-cover-photo" src="{{('upstarter/img/default/banner.svg')}}" alt="Responsive image">

            </div>
        </div>
        <div class="col-12">
            <div class="row">
                @foreach($opp_types as $opp)
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <div class="card  mb-3 " style="border-radius: 10%;">
                        <div class="row" style="margin-bottom: 40px;">

                        </div>
                        <div class="row card-body text-success" style="margin-top: 40px;margin-bottom:40px;border-radius: 50%;height: 85px;width: 85px;background-color:{{$opp->bg_color}} ;margin: auto;">
                            <a href="/opportunities/{{$opp->id}}">
                                <i class="{{$opp->code}}" style="color: white;"></i>
                            </a>

                        </div>
                        <div class=" justify-content-center" style="margin-top: 15px;">
                            <h5 class="text-center" style="font-weight: 20px;">{{$opp->type}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!-- vertical cards -->
        <div class="row ">
         @foreach($opps as $opp)
            <div class="col-md-3 d-flex justify-content-center mb-2 ">
                <div class="card vertical-card ">
                    <img src="{{$opp->image}}" class="card-img-top "  alt="... " style="max-height: 150px;">
                    <div class="card-body ">
                        <h5 class="card-title ">{{$opp->title}}</h5>
                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                        <span class="date ">{{$opp->created_at}}</span>
                        <p class="card-text ">{{$opp->description}}</p>
                        <a href="{{'/opportunity/'.$opp->id}}" class="btn btn-outline-secondary ">Read More <i class="fa fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <!-- horizontal cards -->
        <!-- <h2 class="ml-2 ">Trending</h2> -->
        <br>
        <!-- <div class="row ">

            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-2 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-4 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-4 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- horizontal cards -->
        <!-- <h2 class="ml-2 ">Deadline</h2> -->
        <br>
        <!-- <div class="row ">

            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-2 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-4 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-12 justify-content-center ">
                <div class="col-md-12 mb-2 ml-2 mr-4 ">
                    <div class="horizontal-card row border rounded ">
                        <div class="col-4 ">
                            <img class="mt-3 " src="img//default/card/photo-1569025743873-ea3a9ade89f9.jpg " alt="Pineapple " style="width:100%;height:80%;object-fit:cover; ">
                        </div>
                        <div class="col-8 ">
                            <div class="row mt-2 ">
                                <div class="col-6 ">
                                    <h5 class="card-title ">Card title</h5>
                                </div>
                                <div class="col-6 ">
                                    <div class="float-right ">
                                        <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                                        <span class="date ">23 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <p>UI & UX Designer</p>
                                </div>

                            </div>
                            <div class="row mb-2 ">
                                <div class="col-12 ">
                                    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <br>
        <br>
        <br>
        <br>
    </div>






    <footer>
        <img src="{{url('upstarter/img/default/banners/Group.svg')}}" width="100% " style="z-index:-500;object-fit: cover; ">

    </footer>
    <!-- custom js -->
    <script src="{{url('upstarter/js/main.js')}}"></script>
</body>

</html>