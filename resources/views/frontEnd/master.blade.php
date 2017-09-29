<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="{{asset('public/frontEnd/images/logo3.jpg')}}">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/jquery-ui.css')}}" rel="stylesheet" type="text/css" >
<link href="{{asset('public/frontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/frontEnd/css/flexslider.css')}}" type="text/css" media="screen" />
<!-- pignose css -->



<!-- //pignose css -->



<link href="{{asset('public/frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- single -->


<!-- single -->
<script type="text/javascript" src="{{asset('public/frontEnd/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{asset('public/frontEnd/js/simpleCart.min.js')}}"></script>
	<script src="{{asset('public/frontEnd/js/imagezoom.js')}}"></script>
    <script src="{{asset('public/frontEnd/js/jquery.flexslider.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('public/frontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('public/frontEnd/js/jquery.easing.min.js')}}"></script>
</head>
<body>


<!-- ========================================================================================================================-->
@include('frontEnd.includes.header')

<!-- ======================================================================================================================= -->

@include('frontEnd.includes.menu')


<!--=========================================================================================================================-->
@yield('mainContent')

<!--===========================================================================================================================-->
@include('frontEnd.includes.coupons')

<!--===========================================================================================================================-->

@include('frontEnd.includes.footer')

<div style="position: fixed; z-index: 65535; left:0px; bottom: -2px; width:100%;"> 
			<marquee>
				<a href="https://www.facebook.com/tarikul.oashi" target="blank" > 
					<abbr title="Follow us at Facebook">
						<img src="{{asset('public/frontEnd/images/Social-Truck_fb2.png')}}" width="120px" height="100px"/> 
					</abbr> 
				</a> 
				
				<a href="https://www.linkdin.com/" target="blank"> 
					<abbr title="Subscribe Our Feeds">
						<img src="{{asset('public/frontEnd/images/Social-Truck_li2.png')}}" width="120px" height="100px"/> 
					</abbr> 
				</a>
				
				<a href="https://www.twitter.com/" target="blank"> 
					<abbr title="Follow Us on Twitter">
						<img src="{{asset('public/frontEnd/images/Social-Truck_twi.png')}}" width="120px" height="100px"/>
					</abbr> 
				</a> 
			</marquee>
		</div>


</body>
</html>
