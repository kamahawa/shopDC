<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shop DC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('description')">
<meta name="author" content="Kama hawa">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{{ url('public/user/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ url('public/user/css/bootstrap-responsive.css')}}" rel="stylesheet">
<link href="{{ url('public/user/css/style.css')}}" rel="stylesheet">
<link href="{{ url('public/user/css/flexslider.css')}}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{{ url('public/user/css/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{ url('public/user/css/cloud-zoom.css')}}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
    @include('user.blocks.header')
  <div class="container">

    @include('user.blocks.nav')
  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <!-- Slider Start-->
    @include('user.blocks.slider')
  <!-- Slider End-->
  
  <!-- Section Start-->
    @include('user.blocks.otherdetail')
  <!-- Section End-->

    @yield('content')

<!-- Footer -->
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="span3 aboutus">
                    <h2>Thông tin</h2>
                    <p> Shop bán hàng online đa dạng mặt hàng và uy tín</p>
                </div>
                <div class="span3 contact">
                    <h2>Liên hệ</h2>
                    <ul>
                    <li class="mobile"> Huy Cường : 0977 538 528</li>
                    <li class="mobile"> Bích Diệp : 0169 996 60 840</li>
                    <li class="email"> kamahawa@gmail.com</li>
                    </ul>
                </div>
                <div class="span3 twitter">
                <h2>FACEBOOK </h2>
                <div id="facebook">
                facebook.com/shopDC
                </div>
                </div>
            </div>
        </div>
    </section>
  <!--
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="#">Privacy Policy</a>
          </li>
          <li><a href="#">Terms &amp; Conditions</a>
          </li>
          <li><a href="#">Affiliates</a>
          </li>
          <li><a href="#">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> All images are copyright to their owners. </div>
        <div class="span6 textright"> ShopSimple @ 2012 </div>
      </div>
    </div>
  </section>
  <a id="gotop" href="http://www.mafiashare.net">Back to top</a>
  -->
</footer>

</div>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url('public/user/js/jquery.js')}}"></script>
<script src="{{ url('public/user/js/bootstrap.js')}}"></script>
<script src="{{ url('public/user/js/respond.min.js')}}"></script>
<script src="{{ url('public/user/js/application.js')}}"></script>
<script src="{{ url('public/user/js/bootstrap-tooltip.js')}}"></script>
<script defer src="{{ url('public/user/js/jquery.fancybox.js')}}"></script>
<script defer src="{{ url('public/user/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{ url('public/user/js/jquery.tweet.js')}}"></script>
<script  src="{{ url('public/user/js/cloud-zoom.1.0.2.js')}}"></script>
<script  type="text/javascript" src="{{ url('public/user/js/jquery.validate.js')}}"></script>
<script type="text/javascript"  src="{{ url('public/user/js/jquery.carouFredSel-6.1.0-packed.js')}}"></script>
<script type="text/javascript"  src="{{ url('public/user/js/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript"  src="{{ url('public/user/js/jquery.touchSwipe.min.js')}}"></script>
<script type="text/javascript"  src="{{ url('public/user/js/jquery.ba-throttle-debounce.min.js')}}"></script>
<script defer src="{{ url('public/user/js/custom.js')}}"></script>
<script src="{{ url('public/user/js/myscript.js')}}"></script>
</body>
</html>