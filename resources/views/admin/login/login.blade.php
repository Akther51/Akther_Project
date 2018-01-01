<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Jolly Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="{{asset('/admin/Login')}}/css/font-awesome.min.css" />
    <link href="{{asset('/admin/Login')}}/css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>
<h1>Login Form</h1>
<div class="main-w3">
    <form action="{{route('login')}}" method="post">
        {{csrf_field()}}
        <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
        <div class="login-w3ls">
            <div class="icons">
                <input type="email" name="email" placeholder="Email" required="">
                <span class="fa fa-home" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="icons">
                <input type="password" name="password" placeholder="Password" required="">
                <span class="fa fa-key" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="btnn">
                <input type="checkbox" class="checked"><span class="span">Remember me</span><br>
                <button type="submit">Login</button>
                <span class="btn btn-primary">
                     <a href="{{url('/register')}}"><h2>Register</h2></a>
                </span><br>
                <a href="#" class="for" >Forgot password</a>
            </div>
        </div>
    </form>
</div>
<div class="copy">
    <p>Login All Time | All Rights Reserved<a href="#" target="_blank"></a>
</div>
</body>
</html>
