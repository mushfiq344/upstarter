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
    <!-- for ck editor -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

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
</div>
<div class="row mt-4 mb-4 ml-4">
    <div class="col-md-6 intro mb-4 ml-4">
        <h2>{{$object->title}}</h2>
        <p>

        </p>
    </div>

</div>
<div class="row  article mr-4 ml-4">
    <div class="col-md-9 mb-4">
        <div class="row ml-2">
            <div class="col-12 ">
                <img src="{{$object->image}}" style="object-fit: cover; width: 100%;">
            </div>
        </div>
        <div class="row ml-3 mt-1 mr-1">
            <div class="col-12">
                <h1>Description</h1>
            </div>
            <div class="col-12">
                {{$object->description}}
            </div>
        </div>
        <div class="row ml-3 mt-1 mr-1">
            <div class="col-12">
                <h1>Application Process</h1>
            </div>
            <div class="col-12">

                {!! nl2br($object->application_process) !!}
            </div>

        </div>
        <div class="row ml-3 mt-1 mr-1">
            <div class="col-12">
                <h1>Benefits</h1>
            </div>
            <div class="col-12">

                {!! nl2br($object->benefits) !!}
            </div>

        </div>
        <div class="row ml-3 mt-1 mr-1">
            <div class="col-12">
                <h1>Eligibilities</h1>
            </div>
            <div class="col-12">

                {!! nl2br($object->eligibilities) !!}
            </div>

        </div>
        <div class="row ml-3 mt-1 mr-1">
            <div class="col-12">
                <h1>Eligibilities</h1>
            </div>
            <div class="col-12">

                {!! nl2br($object->eligibilities) !!}
            </div>

        </div>

        <div class="row ml-3 mt-1 mr-1">
            <div class="col-2">
                <button onclick="go_to_site('{{$object->website_link}}')" type="submit" style="background-color:#7E8AFF;color: white;" class="form-control">Website Link</button>
            </div>
            <div class="col-2">
                <button onclick="inc_appli('{{$object->id}}','opportunity','{{$object->application_link}}')"   style="background-color:#7E8AFF;color: white;" class="form-control">Application</button>
            </div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 mr-4  sidebar">
            <ul class="list-group">
                <li class="list-group-item"><span style="font-weight: bold;">Details</span></li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/settings.svg')}}">
                        </div>
                        <div class="col-6">
                            <span style="font-weight: bold;">Category</span> {{\App\Models\Opp_type::get_opportunity_type_name($object->type)}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/data.svg')}}">
                        </div>
                        <div class="col-6">
                            <span style="font-weight: bold;">Fundting Type</span> {{\App\Models\Fund::get_funding_type_name($object->funding_type)}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/circle.svg')}}" style="height: 20px;">
                        </div>
                        <div class="col-6">
                            <span style="font-weight: bold;">Contact Info</span> {{$object->contact_info}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/clock.svg')}}" style="height: 20px;">
                        </div>
                        <div class="col-6">
                            <span style="font-weight: bold;">Deadline</span>
                            <br> {{$object->application_deadline}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/clock.svg')}}" style="height: 20px;">
                        </div>
                        <div class="col-6">
                            <span style="font-weight: bold;">Tags</span>
                            <br> {{$object->tags}}
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>

</div>
<div class="row">
    <footer>
        <img src="{{url('upstarter/img/default/banners/Group.svg')}} " width="100% " style="z-index:-500;object-fit: cover;">

    </footer>
</div>


<!-- custom js -->
<script src="{{url('upstarter/js/main.js')}}"></script>
<script>
    CKEDITOR.replace('application_process', {});
</script>
<script>
    function inc_appli(id,type,link) {
        $.ajax({
            data: {id: id,type:type},
            type: "GET",
            url: '{{route('inc_application')}}',
            cache: false,
            success: function (resp) {
                console.log(resp);
                window.open(link, '_blank');
            }
        });

    }
    function go_to_site(link) {
        
        window.open(link, '_blank');
         
    }
    function subscribe() {
        alert('g');
        var text=document.getElementById("number").value;

    }
</script>
</body>


</html>