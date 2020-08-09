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

              </div>4
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

<!-- auto video -->
      <div class="container-fluid p-4" style="background-color: #71BAF8">
          <div class="container p-4" style="background-color: #71BAF8">
            <img src="/images/BeBrands1.png" class="rounded mx-auto d-block" width="auto" height="100" alt="">
          </div>
          <div class="embed-responsive embed-responsive-16by9 container p-4">
                <iframe class="embed-responsive-item p-4" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fadminfanpageservice%2Fvideos%2F252953782074748%2F&show" control autoplay></iframe>
          </div>
      </div>


<!-- promotion section-->
<div class="container p-4">
<div class="container p-2" style="background-color: #ECECEC">
  <div class="row d-flex justify-content-center text-dark"><h2>สร้างรายได้ผ่าน facebook</h2></div>
  <div class="row d-flex justify-content-center text-dark"><h5>BeBrands ช่วยธุรกิจของคุณได้อย่างไร</h5></div>
</div>
<br>
  <div class="container p-4">
  <div class="row align-items-start">
    <div class="col-md-1">
    </div>
    <div class="col-md-2 container p-4 justify-content-center">
      <img src="/images/eye.png" alt="" class="mx-auto d-block" width="100" height="100"><br>
      <div class="row justify-content-center text-dark"><h5>ดึงดูดความสนใจ</h5></div>
      <div class="row justify-content-center text-center"><b>ด้วยคอนเทนท์โดดเด่น ภาพสวย เนื้อหาน่าสนใจ</b></div>
    </div>
    <div class="col-md-2 container p-4 justify-content-center">
      <img src="/images/clock.png" alt="" class="mx-auto d-block" width="100" height="100"><br>
      <div class="row justify-content-center text-dark"><h5>ประหยัดเวลา</h5></div>
      <div class="row justify-content-center text-center"><b>ช่วยให้คุณประหยัดเวลา บริหารธุรกิจอื่น<br>ไม่ต้องเสียเวลาทำภาพทำคอนเทนท์</b></div>
    </div>
    <div class="col-md-2 container p-4 justify-content-center">
      <img src="/images/handshake.png" alt="" class="mx-auto d-block" width="100" height="100"><br>
      <div class="row justify-content-center text-dark"><h5>สร้างความน่าเชื่อถือ</h5></div>
      <div class="row justify-content-center text-center"><b>ด้วยภาพลักษณ์สวย<br>เป็นคอนเซปเดียวกัน</b></div>
    </div>
    <div class="col-md-2 container p-4 justify-content-center">
      <img src="/images/profit.png" alt="" class="mx-auto d-block" width="100" height="100"><br>
      <div class="row justify-content-center text-dark"><h5>คุ้มค่าในราคา</h5></div>
      <div class="row justify-content-center text-center"><b>ที่คุณกำหนดได้<br>จ่ายเฉพาะสิ่งที่ต้องการ<br>ราคาคุยกันได้</b></div>
    </div>
    <div class="col-md-2 container p-4 justify-content-center">
      <img src="/images/leader.png" alt="" class="mx-auto d-block" width="100" height="100"><br>
      <div class="row justify-content-center text-dark"><h5>รวมทีมงานมืออาชีพ</h5></div>
      <div class="row justify-content-center text-center"><b>ตอบไว แก้ปัญหาเร็ว ติดต่อได้ ไม่ต้องกลัว<br>ทิ้งงาน การันตีด้วยผลงานมากกว่า 5 ปี</b></div>
    </div>
    <div class="col-md-1">
    </div>
  </div>
  </div>
  
  <div class="container p-2" style="background-color: #ECECEC">
	<div class="row align-items-center">
        <div class="col d-flex justify-content-center text-dark">
        <h4>โปรโมชั่นมากมายสำหรับลูกค้า</h4>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
        <a href="promotion" class="btn btn-warning button-rounded shadow-sm">ดูโปรโมชั่น</a>
        </div>
  </div>
  </div>
</div>

<!-- Shopping Card -->
<div class="container-fluid p-4 bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="/images/slideshow1.jpg" alt="Card image cap" height="200" width="auto">
          <div class="card-body text-center">
            <h5 class="card-title text-dark">Fanpage Admin</h5>
            <p class="card-text"><b>เลือกแพคเกจบริการสุดคุ้ม<br>สำหรับแฟนเพจธุรกิจของคุณ</b></p>
            <a href="#" class="btn btn-warning button-rounded shadow-sm">Shopping Card</a>
            </div>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="/images/slideshow3.jpg" alt="Card image cap" height="200" width="auto">
          <div class="card-body text-center">
            <h5 class="card-title">บริการ BeBrands</h5>
            <p class="card-text"><b>บริการต่างๆจาก BeBrands<br>เพื่อเพิ่มยอดขายแก่ธุรกิจของคุณ<b></p>
            <a href="about" class="btn btn-warning button-rounded shadow-sm">เกี่ยวกับ BeBrands</a>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>
<br>

<!-- portfolio -->
<div class="container-fluid" style="background-color: #ECECEC">
<br>
  <div class="row d-flex justify-content-center ">
    <h1 style="color: #031B53">ผลงานของเรา</h1>
  </div>
  <div class="row d-flex justify-content-center">
    <a href="portfolio" class="btn btn-warning btn-lg button-rounded"><b>ดูผลงาน</b></a>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="container p-4">
      <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="/images/port1.png" alt="First slide">
            <div class="mask rgba-black-light"></div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="/images/port2.png" alt="Second slide">
            <div class="mask rgba-black-light"></div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="/images/port3.png" alt="Third slide">
            <div class="mask rgba-black-light"></div>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    </div>
  </div>
</div>

<!-- ตัวช่วยธุรกิจ -->
<div class="container-fluid p-4">
<br>
  <div class="row d-flex justify-content-center text-info">
    <h3>BeBrands ตัวช่วยธุรกิจบน Facebook มืออาชีพ</h3>
  </div><br>
  <div class="row d-flex justify-content-center text-warning">
    <h4>ทีมเดียวครบทั้ง</h4>
  </div>
  <br>

  <div class="container">
    <div class="row align-items-center p-4">
      <div class="col-md-3 justify-content-center">
        <img src="/images/content.png" alt="" class="mx-auto d-block" width="130" height="130"><br><br>
        <div class="row justify-content-center text-center text-dark"><h6>คอนเทนท์</h6></div>
      </div>
      <div class="col-md-3 justify-content-center">
        <img src="/images/graphic.png" alt="" class="mx-auto d-block" width="130" height="130"><br><br>
        <div class="row justify-content-center text-center text-dark"><h6>ภาพกราฟฟิก</h6></div> 
      </div>
      <div class="col-md-3 justify-content-center">
        <img src="/images/video.png" alt="" class="mx-auto d-block" width="130" height="130"><br><br>
        <div class="row justify-content-center text-center text-dark"><h6>วิดีโอ</h6></div>
      </div>
      <div class="col-md-3 justify-content-center">
        <img src="/images/ads (1).png" alt="" class="mx-auto d-block" width="130" height="130"><br><br>
        <div class="row justify-content-center text-center text-dark"><h6>ตั้งค่าโฆษณา</h6></div>
      </div>
    </div>
  </div>
  
</div>

@include('inc.footer')
</body>
</html>


