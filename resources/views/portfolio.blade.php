<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
@yield('content')

@extends('layouts.app')

@include('inc.navbar')

@section('content')

<div class="container p-4 d-flex justify-content-center"><h1>ผลงานของเรา</h1></div>
<div class="container p-4">
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-1 d-flex justify-content-center"><button type="button" class="btn btn-outline-primary button-rounded">กราฟฟิก</button></div>
        <div class="col-md-1 d-flex justify-content-center"><button type="button" class="btn btn-outline-primary button-rounded">วิดีโอ</button></div>
        <div class="col-md-1 d-flex justify-content-center"><button type="button" class="btn btn-outline-primary button-rounded">เว็บไซต์</button></div>
    </div>
</div>

<div class="container p-4">
    <div class="row" style="background-color: #0366F8">
        <div class="col-md-4 text-light">
            <br>
            <div class="container p-4">
            <div><h3>ด้านกราฟฟิก</h3></div>
            <div><b>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard ….</b></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>

<div class="container p-4">
    <div class="row" style="background-color: #0366F8">
        <div class="col-md-4 text-light">
            <br>
            <div class="container p-4">
            <div><h3>วิดีโอ</h3></div>
            <div><b>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard ….</b></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>

<div class="container p-4">
    <div class="row" style="background-color: #0366F8">
        <div class="col-md-4 text-light">
            <br>
            <div class="container p-4">
            <div><h3>เว็บไซต์</h3></div>
            <div><b>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard ….</b></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-8 px-0"><img src="/images/pic5_crop.jpg" alt="" class="img-fluid"></div>
                <div class="col-md-4 px-0"><img src="/images/pic3.jpg" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')

</body>
</html>

