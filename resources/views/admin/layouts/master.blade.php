<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin @yield('title')</title>
	<!-- theme -->
	<link href="{{ URL::asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('public/admin/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('public/admin/css/styles.css') }}" rel="stylesheet">
	<!--Icons-->
	<script src="{{ URL::asset('public/admin/js/lumino.glyphs.js') }}"></script>
	<link href="{{ URL::asset('public/css/common.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ URL::asset('public/admin/js/html5shiv.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/respond.min.js') }}"></script>
	<![endif]-->
	<!-- CKEditor & CKFinder : soan thao van ban -->
    <script src="{{ url('public/admin/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ url('public/admin/js/ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
        var baseURL = "{!! url('/') !!}";
    </script>
    <script src="{{ url('public/admin/js/func_ckfinder.js')}}"></script>
    <!-- END CKEditor & CKFinder -->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}"><span>DC</span> Shop</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ Auth::user()->username }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!--
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							-->
							<li><a href="{{ url('/logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li id="homeMenu"><a href="{{ url('/admin/dashboard') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Dashboard</a></li>
			<li id="cateMenu"><a href="{{ url('/admin/cate/list') }}"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Category</a></li>
			<li id="productMenu"><a href="{{ url('/admin/product/list') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Product</a></li>
			<!--<li><a href="{{ url('/admin/prduct/list') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Product Image</a></li>-->
			<li id="userMenu"><a href="{{ url('/admin/user/list') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>User</a></li>

		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url('/admin/home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				@yield("icons")
			</ol>
		</div>

		@yield('content')

	</div>	<!--/.main-->

	<script src="{{ URL::asset('public/admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/chart.min.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/chart-data.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/easypiechart.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/easypiechart-data.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ URL::asset('public/admin/js/myscript.js') }}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
		$(function() {
			var url = window.location.href;
			if(url.indexOf('home') >= 0)
			{
				$("#homeMenu").addClass("active");
			}
			else if(url.indexOf('cate') >= 0)
			{
				$("#cateMenu").addClass("active");
			}
			else if(url.indexOf('product') >= 0)
			{
				$("#productMenu").addClass("active");
			}
			else if(url.indexOf('user') >= 0)
			{
				$("#userMenu").addClass("active");
			}
		});
    </script>
</body>

</html>