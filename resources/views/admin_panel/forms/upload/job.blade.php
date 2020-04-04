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

            <form method="post" action="{{route('insert_form',['type'=>'job'])}}" enctype="multipart/form-data">
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
                            <label for="venue">Company Name</label>
                            <input class="form-control" value="{!! !empty($object) ? $object->company_name : '' !!}" name="company_name" placeholder="Enter Company Name" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="venue">Founding Date Date:</label>
                            <input type="date" value="{!! !empty($object) ? $object->founding_date : '' !!}" class="form-control" name="founding_date"
                                   placeholder="Enter Founding Date" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="venue">Job title</label>
                            <input class="form-control" value="{!! !empty($object) ? $object->job_title : '' !!}" name="job_title" placeholder="Enter Job Title" required>
                        </div>
                    </div>
                    @include('admin_panel.forms.upload.partials.description')
                    @include('admin_panel.forms.upload.partials.requirement')
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="venue">Application Deadline:</label>
                            <input type="date" value="{!! !empty($object) ? $object->deadline : '' !!}" class="form-control" name="deadline"
                                   placeholder="Enter Application Deadline" required>
                        </div>
                    </div>
                    @include('admin_panel.forms.upload.partials.image')
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
