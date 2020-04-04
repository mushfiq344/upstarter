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
        <div class="container">

            <form method="post" action="{{route('insert_form',['type'=>'organization'])}}"
                  enctype="multipart/form-data">
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
                            <label for="venue">Organization Name:</label>
                            <input class="form-control" value="{!! !empty($object) ? $object->organization_name: '' !!}" name="organization_name" placeholder="Enter Organization Name"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file mb-3">
                            @if(!empty($object))
                                <input type="file" class="custom-file-input" id="choose_logo" name="logo">
                            @else
                                <input type="file" class="custom-file-input" id="choose_logo" name="logo" required>
                            @endif
                            <label class="custom-file-label" for="customFile">Choose Logo</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <img id="logoPreview" src="{!! !empty($object) ? $object->logo : '' !!}" height="200">
                        </div>
                    </div>
                    @include('admin_panel.forms.upload.partials.description')
                    @include('admin_panel.forms.upload.partials.image')
                    @include('admin_panel.forms.upload.partials.address')
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="venue">Website Link:</label>
                            <input type="text" class="form-control" name="link" value="{!! !empty($object) ? $object->website_link : '' !!}"
                                   placeholder="Enter Website Link" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="venue">Contact Info:</label>
                            <input type="text" class="form-control" name="contact_info"
                                   placeholder="Enter Contact Info"  value="{!! !empty($object) ? $object->contact_info : '' !!}" required>
                        </div>
                    </div>
                    <div class="col-md-12 float-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
@endsection
@section('footer')
    @include('admin_panel.forms.upload.partials.footer')
@endsection