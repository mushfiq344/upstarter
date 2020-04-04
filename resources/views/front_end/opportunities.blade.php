<!DOCTYPE html>
<html lang="en">

<head>
     <title>upstarter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('upstarter/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- custom design -->
    <link rel="stylesheet" href="{{url('upstarter/css/style.css')}}">
    <!-- font -->
    <link rel="stylesheet" href="{{url('upstarter/css/font.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d322b1c85b.js"></script>
    <!-- style -->
    <style>
        .btn-anchor:hover {
            text-decoration: none;
        }
    </style>

</head>

<div class="container pb-0">
    <nav id="main_navbar" class="navbar navbar-expand-lg navbar-light mb-4  p-4 mb-4 navbar-custom">
        <a class="navbar-brand" href="/"><img src="{{url('upstarter/img/default/logos/logo.svg')}}" height="30px"></a>
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
    <div class="row mt-4">
        <div class="col-md-6 mt-4 intro">
            <h3>Opportunities</h3>
            <p>Certe, inquam, pertinax non ero tibique, si ob rem voluptas sit, voluptatem accusantium. Filium morte multavit si sine causa, mox videro; interea hoc epicurus in malis. Hanc ego cum teneam sententiam, quid sit voluptatem ut summum malum et,
                quantum.
            </p>
        </div>
        <div class="col-md-6 mt-4" style="z-index: -100;">
            <img src="{{url('upstarter/img/default/covers/course.svg')}}" style="width:  90%;">

        </div>
    </div>
    <!-- filter -->
    {{ Form::open(array('url' => 'opportunities','method'=>'post')) }}


    <div class="row mb-4">
        <div class="col-lg-3 mt-2 float-left wow fadeInUp float-left" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div>
                <img width="32px" src="{{url('upstarter/img/default/icons/settings.svg')}}" alt=""> {{Form::label('category', 'category',['class'=>'label_input'])}}
            </div>
            <br>
            <div class="select-box mt-2">
                {{Form::select('category', $opp_types, null,['class' => 'option-box','id'=>'category'])}}
            </div>

        </div>
        <div class="col-lg-3 mt-2 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div>
                <img width="32px" src="{{url('upstarter/img/default/icons/data.svg')}}" alt="">
                <span class="label_input">Date &amp; Time</span>
            </div>
            <br>
            <div class="select-box mt-2">
                {{Form::select('deadline', $deadlines, null,['class' => 'option-box','id'=>'deadline'])}}

            </div>

        </div>
        <div class="col-lg-3 mt-2 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <div>
                <img width="32px" src="{{url('upstarter/img/default/icons/data.svg')}}" alt="">
                <span class="label_input">Regions</span>
            </div>
            <br>
            <div class="select-box mt-2">
                {{Form::select('region', $regions, null,['class' => 'option-box','id'=>'region'])}}

            </div>

        </div>
        <div class="col-lg-3 mt-4  wow fadeInUp" data-wow-delay="0.6s" style="position: relative; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

            <button class="form-control up-btn" id="search">Search</button>

        </div>
        {{ Form::close() }}
        <div class="col-lg-3  mb-4 wow fadeInUp" data-wow-delay="0.6s" style="position: relative; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;padding-bottom: 30px;">

            <a class="btn-anchor" href="/opportunities"><button type="button" class="form-control up-btn">Reset Filter</button></a>

        </div>
    </div>

    <!-- vertical cards -->
    <div class="row ">
        @foreach($opps as $opp)
        <div class="col-md-3 d-flex justify-content-center mb-2 ">
            <div class="card vertical-card ">
                <img src="{{$opp->image}}" class="card-img-top" alt="..." style="max-height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{$opp->title}}</h5>
                    <img src="{{url('upstarter/img/default/icons/clock.svg')}}">
                    <span class="date">{{$opp->created_at}}</span>
                    <p class="card-text">{{$opp->description}}</p>
                    <a href="{{url('opportunity/'.$opp->id)}}" class="btn btn-outline-none">Read More  <i class="fas fa-arrow-right ml-2" style="color:#6F6F6F;"></i></a>
                </div>
            </div>
        </div>
        @endforeach



    </div>
    <div class="row mt-4">
        <div class="col-4">

        </div>
        <div class="col-4">
            {{ $opps->links() }}
        </div>
        <div class="col-4">

        </div>

    </div>






</div>
<footer>
    <img src="{{url('upstarter/img/default/banners/Group.svg')}} " width="100% " style="z-index:-500;object-fit: cover;">

</footer>

<!-- custom js -->
<script src="{{url('upstarter/js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#search").click(function(event) {
            event.preventDefault();
            var category = $("#category option:selected").val();
            var region = $("#region option:selected").val();
            var deadline = $("#deadline option:selected").val();
            var location = "{{url('/')}}" + '/opportunities/' + category + '/' + region + '/' + deadline;


            window.open(location, '_self');
        });
    });
</script>

<div class="container pb-0 ">
    </body>


</html>