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
							</ul>
							<ul class="nav navbar-nav">
								<?php
								$menu_level_1 = \Illuminate\Support\Facades\DB::table('cates')->where('parent_id', 0)->get();
								?>
								@foreach($menu_level_1 as $item_level_1)
									<li class="dropdown">
										<a href="{{ url('loai-san-pham-chinh',[$item_level_1->id, $item_level_1->alias]) }}" class="dropdown-toggle" data-toggle="dropdown">{{ $item_level_1->name }}
											<?php
											$menu_level_2 = \Illuminate\Support\Facades\DB::table('cates')->where('parent_id', $item_level_1->id)->get();
											?>
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											<?php
											$menu_level_2 = \Illuminate\Support\Facades\DB::table('cates')->where('parent_id', $item_level_1->id)->get();
											?>
											@foreach($menu_level_2 as $item_level_2)
												<li><a href="{{ url('loai-san-pham',[$item_level_2->id, $item_level_2->alias]) }}">{{ $item_level_2->name }}</a></li>
											@endforeach
										</ul>
									</li>
								@endforeach
								<li><a href="{{ url('lien-he') }}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--
				<ul class="pull-right authen">
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
				-->
				<!-- Top Nav End -->
			</div>
		</div>
	</div>
</div>