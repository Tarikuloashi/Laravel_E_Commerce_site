<!-- //header -->

<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-send" aria-hidden="true"></span><a href="mailto:tarikul653@diu.edu.bd">Mail</a></li>
		</ul>
	</div>
</div>

<!-- header-bot -->


<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<a href="{{url('/')}}"><img src="{{asset('public/frontEnd/images/logo3.jpg')}}"></a>
		</div> 
		<div class="col-md-6 header-middle">
			<form >
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="{{url('/login')}}" class="use1" data-toggle="modal" "><span>Login</span></a>
					
				</li>
				<li><a class="fb"  href="https://www.facebook.com/tarikul.oashi"></a></li>
				<li><a class="twi" href="https://www.twitter.com/"></a></li>
				<li><a class="insta" href="https://www.instagram.com/"></a></li>
				<li><a class="you" href="https://www.youtube.com/"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>