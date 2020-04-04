@extends('admin_panel.layouts.dashboard_for_form') @section('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- include summernote css/js-->

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

{{--for ck editor--}}
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

@endsection @section('content')
<div class="container">

    <form method="post" action="{{route('insert_form',['type'=>'opportunity'])}}" enctype="multipart/form-data">
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
                <label for="inputState">Funding Type:</label>
                <select id="fund_type_select" class="form-control" name="funding_type">
                        <option value="">Choose...</option>
                        @foreach($funding_types as $fund)
                            <option value="{{$fund->id}}">{{$fund->type}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group col-md-12">
                <label for="inputState">Degree Type:</label>
                <select id="degree_type_select" class="form-control" name="degree_type">
                        <option value="">Choose...</option>
                        @foreach($degree_types as $degree)
                            <option value="{{$degree->id}}">{{$degree->type}}</option>
                        @endforeach
                    </select>
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
    </form>
</div>

@endsection @section('footer') @include('admin_panel.forms.upload.partials.footer')
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
</script>
@if(!empty($object))
<script>
    $("#type_select").val('{{$object->type}}');
    $("#fund_type_select").val('{{$object->funding_type}}');
    $("#degree_type_select").val('{{$object->degree_type}}');
</script>

@endif @endsection