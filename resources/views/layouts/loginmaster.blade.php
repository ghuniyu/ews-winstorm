<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="babycodes">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{url('assets/plugins/lib/modernizr.js')}}"></script>
    <link rel="icon" href="{{url('assets/images/favicon.png')}}" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/animate-it/animate.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style-default.css')}}">
    <style>body{ color: #363A5C;</style>
</head>

<body class="login2">

@yield('content')

    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/plugins.js')}}"></script>
    
    <script type="text/javascript" src="{{url('assets/plugins/validation/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/validation/additional-methods.min.js')}}"></script>

    <script type="text/javascript" src="{{url('assets/js/page-login2.js')}}"></script>
</body>
</html>