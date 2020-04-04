@extends('admin_panel.layouts.dashboard_for_form')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js-->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
@endsection
@section('content')

    @include('admin_panel.forms.upload.partials.alert_message')
    <div class="container">

        <form method="post" action="{{route('insert_form',['type'=>$type])}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">

                @if(!empty($object))
                    <div class="col-md-12" style="display: none;">
                        <div class="form-group">
                            <input class="form-control" value="{!! !empty($object) ? $object->id : '' !!}"
                                   name="object_id" placeholder="Enter Opportunity Title" required>
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="venue">{{ucfirst($type)}} Title:</label>
                        <input class="form-control" value="{!! !empty($object) ? $object->title : Request::old('title') !!}" name="title"
                               placeholder="Enter Blog Title" required>
                    </div>
                </div>
                @include('admin_panel.forms.upload.partials.description')
                <div class="col-md-12">
                    <button style="float: right" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
@section('footer')
    @include('admin_panel.forms.upload.partials.footer')
@endsection
