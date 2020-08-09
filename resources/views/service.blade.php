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

<!-- picture zone -->
<div class="d-flex justify-content-center container-fluid">
    <div class="row">     
        <div class="col">  
        <source srcset="..." type="image/svg+xml">     
            <img src="/images/slide_home1_crop.png" alt="test" class="img-fluid">                    
              <div class="container">
                <div class="carousel-caption">
                  <div><a href="shoppingcard" class="btn btn-lg button-rounded text-light shadow" style="background-color: #031B53">Shopping Card</a></div>
                </div>
              </div>              
        </div>            
    </div>  
</div>

<!-- goods -->
<div class="container p-4">
    <div class="row d-flex align-items-center">
        <div class="col-md-4 container p-4 align-items-center">
            <img src="/images/s-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>S Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>3,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a class="btn btn-outline-primary button-rounded text-primary" data-toggle="modal" data-target="#myModalS">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalS" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">S Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/s-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 3,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
        <div class="col-md-4 container p-4 justify-content-center">
            <img src="/images/m-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>M Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>7,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a href="#" class="btn btn-outline-primary button-rounded" data-toggle="modal" data-target="#myModalM">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalM" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">M Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/m-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 13,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
        <div class="col-md-4 container p-4 justify-content-center">
            <img src="/images/l-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>L Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>13,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a href="#" class="btn btn-outline-primary button-rounded" data-toggle="modal" data-target="#myModalL">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalL" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">L Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/s-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 13,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="col-md-4 container p-4 justify-content-center">
            <img src="/images/full-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>Full Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>19,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a href="#" class="btn btn-outline-primary button-rounded" data-toggle="modal" data-target="#myModalF">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalF" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">Full Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/s-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 19,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button" data-toggle="modal" data-target="#myModal"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
        <div class="col-md-4 container p-4 justify-content-center">
            <img src="/images/s-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>S Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>3,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a href="#" class="btn btn-outline-primary button-rounded" data-toggle="modal" data-target="#myModalS">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalS" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">S Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/s-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 3,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
        <div class="col-md-4 container p-4 justify-content-center">
            <img src="/images/m-package.png" alt="" class="rounded mx-auto d-block" width="75%" height="auto">
            <div class="container p-2">
                <div class="row p-1 justify-content-center"><h4>M Package</h4></div>  
                <div class="row p-1 justify-content-center"><button class="btn btn-dark" disabled>7,900.00 ฿</button></div>              
                <div class="row p-1 justify-content-center"><a href="#" class="btn btn-outline-primary button-rounded" data-toggle="modal" data-target="#myModalM">เพิ่มลงตะกร้า</a>
                    <div class="modal fade" id="myModalM" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-11 d-flex justify-content-center"><h4 class="modal-title text-white">M Package</h4></div>
                                    <div class="col-md-1 justify-content-end"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="/images/s-package.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 container">
                                        <div class="row p-2 justify-content-center"><h6>ราคา 7,900.- บาท/เดือน</h6></div>
                                        <div class="row p-2 justify-content-center"><form>
                                            <input class="container btn-md text-center" type="number" name="quantity" min="1">
                                        </form></div>
                                        <div class="row justify-content-center"><a class="btn btn-sm btn-warning button-rounded text-dark" role="button"><p>เพิ่มลงตะกร้า</p></a></div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
        
                        </div>
                    </div>
                </div> 
                <div class="row p-1 justify-content-center"><a href="shoppingcard">ดูรายละเอียดเพิ่มเติม</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Service -->
<div class="d-flex justify-content-center container-fluid">
    <div class="row">     
        <div class="col">        
            <img src="/images/slideshow1.jpg" alt="test" class="img-fluid">         
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-10%, -90%)">
                  <div>
                    <div class="d-flex justify-content-center"><h3 style="color: white; text-shadow: 2px 2px 4px #000000">Example headline.</h3></div>
                    <div class="d-flex justify-content-center"><button type="button" class="btn btn-primary button-rounded shadow">บริการของเรา</button></div>
                  </div>
                </div>
              </div> 
            </div>         
        </div>            
    </div>  
</div>
<div class="d-flex justify-content-center container-fluid">
    <div class="row ">     
        <div class="col ">        
            <img src="/images/paymoney_crop.jpg" alt="test" class="img-fluid">         
              <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-90%, -10%)">
                  <div>
                    <div class="d-flex justify-content-center text-light"><h3 style="color: white; text-shadow: 2px 2px 4px #000000">ชำระค่าบริการได้ที่นี่</h3><br></div>
                    <div class="d-flex justify-content-center"><button type="button" class="btn btn-lg btn-primary button-rounded shadow">ชำระค่าบริการ</button></div>
                  </div>
                </div>
              </div>          
        </div>            
    </div>  
</div>

@include('inc.footer')
</body>
</html>

