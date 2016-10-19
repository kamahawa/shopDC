<div class="headerstrip">
	<div class="container">
		<div class="row">
			<div class="span12">
				<a href="{{ url('/') }}" class="logo pull-left"><img src="{{ url('public/user/img/logo.png')}}" alt="ShopDC" title="ShopDC"></a>
				<!-- Top Nav Start -->
				<div class="pull-left">
					<div class="navbar" id="topnav">
						<div class="navbar-inner">
							<ul class="nav" >
								<li><a class="home active" href="{{ url('/') }}">Trang chủ</a></li>
								<!--<li><a class="myaccount" href="#">My Account</a></li>-->
								<li><a class="shoppingcart" href="{{ url('/gio-hang') }}">Giỏ hàng</a></li>
								<li><a class="checkout" href="#">Thanh toán</a></li>
							</ul>
						</div>
					</div>
				</div>
				<ul class="pull-right">
					<!-- Authentication Links -->
					@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Đăng nhập</a></li>
						<li><a href="{{ url('/register') }}">Đăng ký</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->username }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="{{ url('/logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endif
				</ul>
				<!-- Top Nav End -->
			</div>
		</div>
	</div>
</div>