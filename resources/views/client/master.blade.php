<!DOCTYPE html>
<html lang="en">
<head>
	@include('client.include.head')
	<style type="text/css">
		.no-after::after{
			content: ""!important;
		}
		.navigation > ul > li a span {
		    font-size: 80%;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<header class="header">
			@yield('header')
		</header><!-- /header -->
		<section class="slider">
			@include('client.include.slide-top')
		</section><!-- /slider -->
		<section clas="container">
			@yield('container')
		</section><!-- /container -->
		<section class="pg-bottom">
			@include('client.include.register-sale')
		</section><!-- /sec06 -->
		<footer class="footer" id="contact">
    		@include('client.include.footer')
		</footer><!-- /footer -->

		<a href="javascript:void(0)" title="Lên đầu trang" id="go-top"></a>
		<div id="hotline">
			<div data-wow-delay="1.5s" class="wow animate bounceInLeft animated">
				<h3>Hotline: 0936.186.118</h3>
			</div>
		</div>
	</div>
    @include('client.include.script')
</body>
</html>