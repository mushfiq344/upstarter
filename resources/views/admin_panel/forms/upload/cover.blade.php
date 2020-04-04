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

        <form method="post" action="{{route('insert_category',['type'=>$type])}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-12">
                    <div class="custom-file mb-3">
                        @if(!empty($object))
                            <input type="file" class="custom-file-input" id="choose_cover" name="cover">
                        @else
                            <input type="file" class="custom-file-input" id="choose_cover" name="cover" required>
                        @endif
                        <label class="custom-file-label" for="customFile">Choose Cover</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center">
                        <img id="coverPreview" src="{{url('dashboard/images/default_images/'.$type.'.jpg')}}" height="200">
                    </div>
                </div>
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
