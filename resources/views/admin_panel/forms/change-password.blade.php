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

        <form method="post" action="{{ route('change-password-save') }}" aria-label="{{ __('Change Password') }}" >
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="venue"> Old Password:</label>
                        <input class="form-control  {{ $errors->has('old_password') ? ' is-invalid' : '' }}"
                               value="{{ old('old_password') }}" name="old_password"
                               placeholder="Enter Old Password" type="password" required>
                        @if ($errors->has('old_password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('old_password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="venue">New password:</label>
                        <input class="form-control form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}"
                               value="{{ old('new_password') }}" name="new_password"
                               placeholder="Enter New Password" type="password" required>
                        @if ($errors->has('new_password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('new_password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="venue"> Confirm New Password:</label>
                        <input class="form-control" id="new-password-confirm"
                               value="{{ old('new_password_confirmation') }}" name="new_password_confirmation"
                               placeholder="Confirm New Password" type="password" required>
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
