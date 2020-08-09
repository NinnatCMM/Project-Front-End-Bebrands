<!DOCTYPE html>

<html>
<head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="/css/shoppingcard.css">
<link rel="stylesheet" href="/css/main.css">

</head>
<body>
@yield('content')

@extends('layouts.app')

@include('inc.navbar')

@section('content')

<br><br><br><br>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-md-2 hidden-xs"><img src="/images/s-package.png" width="100" height="100" alt="..." class="img-responsive"/></div>
									<div class="col-md-10">
										<h4 class="nomargin">Product 1</h4>
										<p>โพสบน Facebook Fanpage Timelne จำนวน 15 โพส</p>
										<p>ปรับแต่ง About Facebook Fanpage ตามหลักการ SEO</p>
										<p>ออกแบบภาพโฆษณา 5 ภาพ</p></li>
										<p>สร้างโพสแบบ Story Picture 1 เรื่อง (ไม่เกิน 5 Artwork)</p>
										<p>อัพเดตข่าวสารที่เกี่ยวข้องเกี่ยวกับผลิตภัณฑ์</p>
										<p>สรุปรายงานการโพสทุกๆ 1 เดือน</p>
										<p>ระยะเวลาดำเนินการ 1 เดือน</p>
									</div>
								</div>
							</td>
							<td data-th="Price">฿3,900.-</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">3,900.-</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 3,900.-</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total ฿3,900.-</strong></td>
							<td><a href="#" class="btn btn-primary btn-block button-rounded">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-md-2 hidden-xs"><img src="/images/m-package.png" width="100" height="100" alt="..." class="img-responsive"/></div>
									<div class="col-md-10">
										<h4 class="nomargin">Product 2</h4>
										<p>โพสบน Facebook Fanpage Timelne จำนวน 30 โพส</p>
										<p>ปรับแต่ง About Facebook Fanpage ตามหลักการ SEO</p>
										<p>ออกแบบภาพโฆษณา 15 ภาพ</p>
										<p>สร้างโพสแบบ Story Picture 2 เรื่อง (ไม่เกิน 5 Artwork)</p>
										<p>อัพเดตข่าวสารที่เกี่ยวข้องเกี่ยวกับผลิตภัณฑ์</p>
										<p>บทความรีวิว ลงเว็บไซต์ 2 เว็บไซต์</p>
										<p>วิเคราะห์แผนการโพสและสรุปรายงานการโพสทุกๆ 1 เดือน</p>
										<p>ระยะเวลาดำเนินการ 1 เดือน</p>
									</div>
								</div>
							</td>
							<td data-th="Price">฿7,900.-</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">7,900.-</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 7,900.-</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total ฿7,900.-</strong></td>
							<td><a href="#" class="btn btn-primary btn-block button-rounded">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-md-2 hidden-xs"><img src="/images/l-package.png" width="100" height="100" alt="..." class="img-responsive"/></div>
									<div class="col-md-10">
										<h4 class="nomargin">Product 3</h4>
										<p>โพสบน Facebook Fanpage Timelne จำนวน 40 โพส</p>
										<p>ปรับแต่ง About Facebook Fanpage ตามหลักการ SEO</p>
										<p>ออกแบบภาพโฆษณา 30 ภาพ</p>
										<p>สร้างโพสแบบ Story Picture 4 เรื่อง (ไม่เกิน 5 Artwork)</p>
										<p>อัพเดตข่าวสารที่เกี่ยวข้องเกี่ยวกับผลิตภัณฑ์</p>
										<p>บทความรีวิว ลงเว็บไซต์ 3 เว็บไซต์</p>
										<p>ตัดต่อวิดีโอ 3 คลิปวิดีโอ</p>
										<p>วิเคราะห์แผนการโพสและสรุปรายงานการโพสทุกๆ 1 เดือน</p>
										<p>ระยะเวลาดำเนินการ 1 เดือน</p>
									</div>
								</div>
							</td>
							<td data-th="Price">฿13,900.-</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">13,900.-</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 13,900.-</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total ฿13,900.-</strong></td>
							<td><a href="#" class="btn btn-primary btn-block button-rounded">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-md-2 hidden-xs"><img src="/images/full-package.png" width="100" height="100" alt="..." class="img-responsive"/></div>
									<div class="col-md-10">
										<h4 class="nomargin">Product 4</h4>
										<p>โพสบน Facebook Fanpage Timelne จำนวน 45 โพส</p>
										<p>ปรับแต่ง About Facebook Fanpage ตามหลักการ SEO</p>
										<p>ออกแบบภาพโฆษณา 35 ภาพ</p>
										<p>สร้างโพสแบบ Story Picture 4 เรื่อง (ไม่เกิน 5 Artwork)</p>
										<p>อัพเดตข่าวสารที่เกี่ยวข้องเกี่ยวกับผลิตภัณฑ์</p>
										<p>บทความรีวิว ลงเว็บไซต์ 3 เว็บไซต์</p>
										<p>ตัดต่อวิดีโอ 3 คลิปวิดีโอ</p>
										<p>วิเคราะห์แผนการโพสและสรุปรายงานการโพสทุกๆ 1 เดือน</p>
										<p>ระยะเวลาดำเนินการ 1 เดือน</p>
									</div>
								</div>
							</td>
							<td data-th="Price">฿19,900.-</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">19,900.-</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 19,900.-</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total ฿19,900.-</strong></td>
							<td><a href="#" class="btn btn-primary btn-block button-rounded">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
</body>
</html>