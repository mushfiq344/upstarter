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
<form method="post" action="{{route('insert_form',['type'=>'opportunity'])}}" enctype="multipart/form-data">
<div class="row  article mr-4 ml-4">
    <div class="col-md-9 mb-4">
   
        {{ csrf_field() }}
        <div class="row">
            @if(!empty($object))
            <div class="col-md-12" style="display: none;">
                <div class="form-group">
                    <input class="form-control" value="{!! !empty($object) ? $object->id : '' !!}" name="object_id" placeholder="Enter Opportunity Title" required>
                </div>
            </div>
            @endif
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Opportunity Title:</label>
                    <input class="form-control" value="{!! !empty($object) ? $object->title : '' !!}" name="opportunity_title" placeholder="Enter Opportunity Title" required>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="inputState">Opportunity Type:</label>
                <select id="type_select" class="form-control" name="opportunity_type">
                        <option value="">Choose...</option>
                        @foreach($opportunity_types as $opportunity_type)
                            <option value="{{$opportunity_type->id}}">{{$opportunity_type->type}}</option>
                        @endforeach
                    </select>
            </div>
            @include('admin_panel.forms.upload.partials.description') @include('admin_panel.forms.upload.partials.application_process') @include('admin_panel.forms.upload.partials.benefits') @include('admin_panel.forms.upload.partials.eligibilities')
            <div class="form-group col-md-12">
                <label for="inputState">Eligible Regions:</label>
                <textarea class="form-control" name="region" cols="30" placeholder="type Eligible Region">{!! !empty($object) ? $object->region : '' !!}</textarea>
            </div>
            <div class="form-group col-md-12">
                
            </div>
            <div class="form-group col-md-12">
                
            </div>
            @include('admin_panel.forms.upload.partials.image') @include('admin_panel.forms.upload.partials.address')
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Application Link:</label>
                    <input type="text" class="form-control" name="link" value="{!! !empty($object) ? $object->application_link : '' !!}" placeholder="Enter Application Link">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Official Website Link:</label>
                    <input type="text" class="form-control" name="website_link" value="{!! !empty($object) ? $object->website_link : '' !!}" placeholder="Enter Application Link">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Start Date:</label>
                    <input type="date" value="{!! !empty($object) ? $object->start_date : date('Y-m-d') !!}" class="form-control" name="start_date" placeholder="Enter Starting Date">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">End Date:</label>
                    <input type="date" value="{!! !empty($object) ? $object->end_date : date('Y-m-d') !!}" class="form-control" name="end_date" placeholder="Enter Ending Date">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Application Deadline:</label>
                    <input type="date" value="{!! !empty($object) ? $object->application_deadline : date('Y-m-d') !!}" class="form-control" name="deadline" placeholder="Enter Application Deadline">
                </div>
            </div>

            @include('admin_panel.forms.upload.partials.country_state_city')
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Contact Info:</label>
                    <textarea type="text" class="form-control" name="contact_info" placeholder="Enter Contact Info">{!! !empty($object) ? $object->contact_info : '' !!}
                        </textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="venue">Tags:</label>
                    <textarea type="text" class="form-control" name="tags" placeholder="Enter Tags">{!! !empty($object) ? $object->tags : '' !!}
                        </textarea>
                </div>
            </div>
            <div class="col-md-12 float-right">
                <button type="submit" class="btn btn-primary">Submit</button>
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
                        <div class="col-10">
                        <label for="inputState">Funding Type:</label>
                        <select id="fund_type_select" class="form-control" name="funding_type">
                        <option value="">Choose...</option>
                        @foreach($funding_types as $fund)
                            <option value="{{$fund->id}}">{{$fund->type}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="{{url('upstarter/img/default/icons/settings.svg')}}">
                        </div>
                        <div class="col-10">
                        <label for="inputState">Degree Type:</label>
                <select id="degree_type_select" class="form-control" name="degree_type">
                        <option value="">Choose...</option>
                        @foreach($degree_types as $degree)
                            <option value="{{$degree->id}}">{{$degree->type}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                </li>
                
                
            </ul>
        </div>

    </div>
</div>
</form>
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
<script>
    CKEDITOR.replace('detail', {
        filebrowserUploadUrl: "{{route('image_upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('application_process', {
        filebrowserUploadUrl: "{{route('image_upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('benefits', {
        filebrowserUploadUrl: "{{route('image_upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('eligibilities', {
        filebrowserUploadUrl: "{{route('image_upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script
</body>


</html>