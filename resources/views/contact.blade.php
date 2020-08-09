<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .fa:hover {
        opacity: 0.7;
        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        .fa-facebook {
        background: #3B5998;
        color: white;  
}
    </style>
<head>
</head>
<body>
@yield('content')

@extends('layouts.app')

@include('inc.navbar')

@section('content')

<div class="container p-4">
    <div class="container p-4">
        <h2 class="text-center">ติดต่อเรา</h2>
    </div>
    <div class="row align-items-center container p-4">
        <div class="col-md-4 container justify-content-center">   
                <div class="row"><a href="http://line.me/ti/p/%40bebrandagency" class="img-fluid mx-auto d-block">
                <img src="/images/line.png" alt="" width="75" height="75" class="rounded"></a></div>
                <div class="row contianer p-4 justify-content-center"><a href="http://line.me/ti/p/%40bebrandagency" class="text-success"><h6>ช่องทาง LINE</h6></a></div>
        </div>
        <div class="col-md-4 justify-content-center">
            <div class="row"><a href="https://www.facebook.com/adminfanpageservice/" class="img-fluid mx-auto d-block">
            <img src="/images/facebook.png" alt="" width="75" height="75"></a></div>
            <div class="row contianer p-4 justify-content-center"><a href="http://line.me/ti/p/%40bebrandagency"><h6 style="color: #031B53">ช่องทาง Facebook</h6></a></div>
        </div>
        <div class="col-md-4 justify-content-center">
            <div class="row"><a href="https://mail.google.com/" class="img-fluid mx-auto d-block">
            <img src="/images/gmail.png" alt="" width="75" height="75"></a></div>
            <div class="row contianer p-4 justify-content-center"><a href="http://line.me/ti/p/%40bebrandagency" class="text-danger"><h6>ช่องทาง E-mail</h6></a></div>
        </div>
    </div>
    <br>
    <div class="row align-items-center container p-3">
        <div class="col-md-2"></div>
        <div class="col-md-4 justify-content-center">
            <div class="row"><a href="http://m.me/adminfanpageservice" class="img-fluid mx-auto d-block">
            <img src="/images/messenger.png" alt="" width="75" height="75" class="rounded"></a></div>
            <div class="row contianer p-4 justify-content-center"><a href="http://line.me/ti/p/%40bebrandagency"><h6>ช่องทาง messenger</h6></a></div>
        </div>
        <div class="col-md-4 justify-content-center">
            <div class="row"><a href="https://www.facebook.com/adminfanpageservice/" class="img-fluid mx-auto d-block">
            <img src="/images/mobile-phone.png" alt="" width="75" height="75"></a></div>
            <div class="row contianer p-4 justify-content-center"><a href="http://line.me/ti/p/%40bebrandagency" class="text-warning"><h6>โทร 06-4964-9263</h6></a></div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@include('inc.footer')

</body>
</html>

