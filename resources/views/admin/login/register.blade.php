
@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Account Register Form Flat Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Account Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('/admin/register')}}/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('/admin/register')}}/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <!-- //css files -->
</head>
<body>
<!-- main -->
<div class="w3ls-header">
    <h1>Account Register form</h1>
    <div class="header-main">
        <h2>Create Account</h2>
        <div class="header-bottom">
            <div class="header-right w3agile">
                <div class="header-left-bottom agileinfo">
                    <form action="{{route('register')}}" method="post">
                        {{csrf_field()}}

                        <div class="icon1 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input  type="text" id="name" placeholder="Your Full Name" name="name"/>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="icon1 {{ $errors->has('companyname') ? ' has-error' : '' }}">
                            <input  type="text" id="companyname" placeholder="Company Name" name="companyname"/>
                            @if ($errors->has('companyname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="icon1{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" id="email" placeholder="Your Email" name="email"/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="icon1{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" placeholder="Password" name="password" required=""/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="icon1">
                            <input type="password" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required=""/>
                        </div>
                        <div class="login-check">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> I Accept to the <a href="#">Terms &amp; Conditions</a></label>
                        </div>
                        <div class="bottom">
                            <input type="submit" value="Create account" />
                        </div>
                        <div class="social w3layouts">
                            <div class="clear"></div>
                            <p>Already a member? <a href="#">Signin</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header end here-->
<!-- copyright start here -->
<div class="copyright">
    <p>© 2017 Account Register Form. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<!--copyright end here-->
</body>
</html>
@endsection