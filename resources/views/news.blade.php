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

<div class="container p-4 d-flex justify-content-end">
        
        <form class="form-inline btn-group">
            <div class="btn-group" role="group" aria-label="Basic example">
            <input class="form-control mr-sm-2 button-rounded" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 button-rounded" type="submit">Search</button>
        </div>
        </form>
      
</div>

<div class="container">
    <h4 class="text-left">บทความ ข่าวสาร ล่าสุด</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
        <div class="row d-flex justify-content-center">
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
            <img class="d-block w-100" src="/images/pic1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <div class="mask rgba-black-light"></div>
          </div>
        </div>
        <div class="carousel-item"> <!-- 5555-->
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="/images/pic4.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <div class="mask rgba-black-light"></div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="/images/pic5.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 >Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
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

        <!-- another news -->
        <div class="col-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><img src="/images/pic1.jpg" alt="" class="img-fluid rounded"></div>
                    <div class="col-md-6"><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.</a></b></div>   
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><img src="/images/pic4.jpg" alt="" class="img-fluid rounded"></div>
                    <div class="col-md-6"><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.</a></b></div>   
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><img src="/images/pic5.jpg" alt="" class="img-fluid rounded"></div>
                    <div class="col-md-6"><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.</a></b></div>   
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container"><hr class="my-4 "></div>

<div class="container p-4">
    <b>บทความ ข่าวสาร เพิ่มเติม</b>
</div>

<div role="main" class="container">
    <div class="row">

    <div class="col-md-9 blog-main">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic1.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic4.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic5.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic1.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic4.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic5.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic1.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic4.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container">
                <div><img src="/images/pic5.jpg" alt="" class="img-fluid rounded"></div>
                <div><b><a href="">Lorem Ipsum is simply dummy text of the printing and typesettingindustry.Lorem Ipsum has been the industry's standard</a></b></div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-3 blog-sidebar d-flex justify-content-end">
        <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
    </div>
    </div>
</div>

<div class="container p-4 d-flex justify-content-center">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><b>Previous</b></a></li>
        <li class="page-item"><a class="page-link" href="#"><b>1</b></a></li>
        <li class="page-item"><a class="page-link" href="#"><b>2</b></a></li>
        <li class="page-item"><a class="page-link" href="#"><b>3</b></a></li>
        <li class="page-item"><a class="page-link" href="#"><b>Next</b></a></li>
    </ul>
    </nav>
</div>

@include('inc.footer')
</body>
</html>

