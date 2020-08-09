
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

<br><br>
<!-- about bebrands -->
<div class="container-fluid bg-primary">
<br>
<div class="container p-4">
    <div class="row align-items-center d-flex justify-content-md-center">
        <div class="col-md-6 container p-4 text-light">
            <h2>BeBrands</h2>
            <h5>รับดูแลแฟนเพจFacebook ราคาถูก พร้อมให้คำปรึกษาการตลาดออนไลน์ และทำเว็บไซต์ราคาถูก</h5>
        </div>
        <div class="col-md-6 container p-4">
            <img src="/images/about1.jpg" alt="" width="400" class="img-fluid rounded mx-auto d-block img-thumbnail">
        </div>
    </div>
</div>
</div>
<br>
<div class="container-fluid" style="background-color: #1240AA">
<div class="container p-4">
    <div class="row align-items-center d-flex justify-content-md-center">
        <div class="col-md-7 container p-4">
            <img src="/images/about2.png" alt="" width="400" class="img-fluid rounded mx-auto d-block img-thumbnail">
        </div>
        <div class="col-md-5 container p-4 text-light">
            <h5 class="text-center">รับดูแล FACEBOOK FANPAGE พร้อมแต่งภาพ บทความ เนื้อหาให้สอดคล้องกับผลิตภัณฑ์ของคุณ ตามหลักการทางการตลาด</h5>
        </div>
    </div>
</div>
</div>
<br>
<div class="container-fluid" style="background-color: #031B53">
<br>
<div class="container p-4">
    <div class="row align-items-center d-flex justify-content-md-center">
        <div class="col-md-6 container p-4 text-light">
            <li><b class="text-left">ปรับแต่ง About Facebook Fanpage ตามหลักการ SEO</b></li>
            <li><b class="text-left">ตกแต่งและสร้างภาพโฆษณาที่สวยงาม โดดเด่น</b></li>
            <li><b class="text-left">สร้างโพสแบบ Story Picture ใช้ภาพเล่าเรื่องราวในธุรกิจของคุณ</b></li>
            <li><b class="text-left">อัพเดตข่าวสารที่ทันสมัย ที่สอดคล้องกับธุรกิจของคุณ</b></li>
            <li><b class="text-left">แต่งและปรับบทความที่เกี่ยวข้องกับธุรกิจของคุณ เพื่อดึงดูดความสนใจของลูกค้ามายังแฟนเพจของคุณ</b></li>

        </div>
        <div class="col-md-6 container p-4">
            <img src="/images/about1.jpg" alt="" width="400" class="img-fluid rounded mx-auto d-block img-thumbnail">
        </div>
    </div>
</div>
</div>
<br>
<div class="container-fluid bg-info">
<br>
<div class="container p-4">
    <div class="row align-items-center d-flex justify-content-md-center">
        <div class="col-md-6 container p-4">
            <img src="/images/about4.jpg" alt="" width="400" class="img-fluid rounded mx-auto d-block img-thumbnail">
        </div>
        <div class="col-md-6 container p-4 text-light">
            <li><b class="text-left">โพสบน Facebook Fanpage 2 โพสต่อวัน</b></li>
            <li><b class="text-left">ออกแบบภาพโฆษณา 5 ภาพ</b></li>
            <li><b class="text-left">สร้างโพสแบบ Story Picture 1โพส </b></li>
            <li><b class="text-left">สร้างบทความหรือรีไรท์บทความที่สอดคล้องกับเนื้อหาของคุณ 1 บทความ </b></li>
            <li><b class="text-left">อัพเดตข่าวสารที่เกี่ยวข้องเกี่ยวกับผลิตภัณฑ์</b></li>
            <li><b class="text-left">สรุปรายงานการโพสทุกๆ 1 เดือน</b></li>
            <li><b class="text-left">ระยะเวลา 1 เดือน</b></li>

        </div>
        
    </div>
</div>
</div>
<br>

<!-- BeBrands Team
<div class="container p-4">
    <div class="container">
        <h1 class="text-center">ทีมของเรา</h1>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
            <div class="col-md-4 justify-content-center">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
            <div class="col-md-4 justify-content-center">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 justify-content-center">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
            <div class="col-md-4 justify-content-center">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
            <div class="col-md-4 justify-content-center">
                <img src="/images/profile_crop.jpg" alt="" width="200" height="200" class="img-responsive mx-auto d-block rounded-circle">
                <div class="d-flex justify-content-center"><h5>Name Surname</h5></div>
                <div class="d-flex justify-content-center"><b>Position</b></div>
            </div>
        </div>
    </div>
</div> -->

@include('inc.footer')
</body>
</html>

