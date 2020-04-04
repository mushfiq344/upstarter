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


</head>


<a href="/"><img href="/" class="top-logo" src="{{url('upstarter/img/default/logos/logo.svg')}}"></a>
<div class="row mr-4">
    <div class="col-md-8 col-sm-12">
        <img src="{{url('upstarter/img/default/covers/sign-in.svg')}}" style="width:100%;">
    </div>
    <div class="col-md-4 mt-4">
        <div class="col-md-12 mr-4 mt-4 sidebar">
            <div class="row ml-1">
                <h2>Sign Up for Upstarter</h2>
            </div>
            <div class="row">
                <div class="col-8">
                    <button class="btn form-control" style="background-color:#7E8AFF;color: white;border-radius: 30px;"><i class="fab fa-facebook-f"></i> sign-up For Facebook</button>
                </div>
                <div class="col-2 mt-1 mb-1">
                    <button class="btn btn-outline-light" style="background: url('http://127.0.0.1/designs/style/img/default/icons/google.svg');background-position:center; background-repeat: no-repeat;background-color:white;height: 40px;width: 40px;border-radius: 50%;"></button>
                </div>
                <div class="col-2 mt-1 mb-1">
                    <button class="btn  btn-outline-light" style="background: url('http://127.0.0.1/designs/style/img/default/icons/twitter_fill.svg');background-position:center; background-repeat: no-repeat;background-color:white;height: 40px;width: 40px;border-radius: 50%;"></button>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <hr>
                </div>
                <div class="col-1">or</div>
                <div class="col-5">
                    <hr>
                </div>
            </div>
            <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row ml-1 mr-1">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" style="background-color:#F1F1F1;outline: none;">
                </div>
                <div class="row ml-1 mr-1 mb-2">
                    <label>password</label>
                    <input class="form-control" id="userpassword" name="password" type="password" style="background-color:#F1F1F1;outline: none;">
                </div>
                <div class="row mr-1 ml-1">
                    <button type="submit" style="background-color:#7E8AFF;color: white;" class="form-control">Sign-In</button>
                </div>
            </form>
            <div class="row float-right mr-2">
                Already a member? Sign In
            </div>
        </div>

    </div>

</div>


<!-- custom js -->
<script src="{{url('upstarter/js/main.js')}}"></script>

</body>


</html>