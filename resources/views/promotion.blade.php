<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
@yield('content')

@extends('layouts.app')

@include('inc.navbar')

@section('content')

<!-- slideshow -->
<!-- slideshow -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="first-slide crop-img img-fluid" src="/images/slideshow6_crop.jpg" width="1920" height="600" alt="First slide">
            <div class="container" >
              <div class="carousel-caption">
                
                  <div class="row align-items-center">
                    <div class="col-md-7 text-right">
                      <h2 style="color: white; text-shadow: 2px 2px 4px #000000">ดูแล facebook fanpage</h2>
                      <p><h6 style="color: white; text-shadow: 2px 2px 4px #000000">คอนเทนท์ดี ภาพสวย เพิ่มความโดดเด่นให้แบรนด์ของคุณ</h6></p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-start">
                      <p><a class="btn btn-lg btn-warning button-rounded shadow" href="http://line.me/ti/p/%40bebrandagency" role="button"><b>จองคิวออนไลน์</b></a></p>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide crop-img img-fluid" src="/images/slideshow2.jpg" width="1920" height="600" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">

                <div class="row align-items-center">
                  <div class="col-md-8 text-right">
                    <h2 style="color: white; text-shadow: 2px 2px 4px #000000">ราคาเริ่มต้น เพียง 3900.-</h2>
                    <p><b style="color: white; text-shadow: 2px 2px 4px #000000">จองคิววันนี้ รับส่วนลดฟรี 10% พร้อมออกแบบภาพปกและโปรไฟล์ฟรีมูลค่า 700.-</b></p>
                  </div>
                  <div class="col-md-4 d-flex justify-content-start">
                    <p><a class="btn btn-lg btn-warning button-rounded shadow" href="http://line.me/ti/p/%40bebrandagency" role="button"><b>จองคิวออนไลน์</b></a></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="third-slide crop-img img-fluid" src="/images/slideshow3.jpg" width="1920" height="600" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">

                <div class="row align-items-center">
                  <div class="col-md-9 text-right">
                    <h3 style="color: white; text-shadow: 2px 2px 4px #000000">เพจไม่สวย ยอดขายตก อย่าปล่อยให้โอกาสทำเงินหลุดลอย</h3>
                    <p><b style="color: white; text-shadow: 2px 2px 4px #000000">ปรับเพจใหม่ให้สวยดึงดูด เพิ่มโอกาสสร้างยอดขาย เพิ่มปริมาณผู้เข้าชมสนค้า</b></p>
                  </div>
                  <div class="col-md-3 d-flex justify-content-start">
                    <p><a class="btn btn-lg btn-warning button-rounded shadow" href="http://line.me/ti/p/%40bebrandagency" role="button"><b>จองคิวออนไลน์</b></a></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<br>
<!-- promotion1-->
<div class="d-flex justify-content-center container-fluid">
    <div class="row">     
        <div class="col">        
            <img src="/images/promo1_crop.jpg" alt="test" class="img-responsive promo-crop">         
            
              <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-10%, -90%)">
                  <div>
                    <div class="d-flex justify-content-center text-dark"><h3>จองคิววันนี้</h3></div>
                    <div class="d-flex justify-content-center text-dark"><b>รับส่วนลดฟรี 10% พร้อมออกแบบภาพปกและโปรไฟล์ฟรีมูลค่า 700.-</b></div>
                    <div class="d-flex justify-content-center"><button type="button" class="btn btn-warning button-rounded shadow-sm">เลือกโปรโมชั่น 1</button></div>
                  </div>
                </div>
              </div>          
        </div>            
    </div>  
</div>
<div class="d-flex justify-content-center container-fluid">
    <div class="row ">     
        <div class="col ">        
            <img src="/images/slideshow4_crop.jpg" alt="test" class="img-responsive promo-crop">         
              <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-90%, -10%)">
                  <div>
                    <div class="d-flex justify-content-center"><h3 style="color: white; text-shadow: 2px 2px 4px #000000">จองคิววันนี้</h3></div>
                    <div class="d-flex justify-content-center"><b style="color: white; text-shadow: 2px 2px 4px #000000">รับส่วนลดฟรี 10% พร้อมออกแบบภาพปกและโปรไฟล์ฟรีมูลค่า 700.-</b></div>
                    <div class="d-flex justify-content-center"><button type="button" class="btn btn-warning button-rounded shadow-sm">เลือกโปรโมชั่น 2</button></div>
                  </div>
                </div>
              </div>          
        </div>            
    </div>  
</div>
<div class="d-flex justify-content-center container-fluid">
    <div class="row">     
        <div class="col">        
            <img src="/images/pic1crop.jpg" alt="test" class="img-responsive promo-crop">         
            
              <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-10%, -90%)">
                  <div>
                    <div class="d-flex justify-content-center"><h3 style="color: white; text-shadow: 2px 2px 4px #000000">จองคิววันนี้</h3></div>
                    <div class="d-flex justify-content-center"><b style="color: white; text-shadow: 2px 2px 4px #000000">รับส่วนลดฟรี 10% พร้อมออกแบบภาพปกและโปรไฟล์ฟรีมูลค่า 700.-</b></div>
                    <div class="d-flex justify-content-center"><button type="button" class="btn btn-warning button-rounded shadow-sm">เลือกโปรโมชั่น 3</button></div>
                  </div>
                </div>
              </div>          
        </div>            
    </div>  
</div>
  
@include('inc.footer')
</body>
</html>

