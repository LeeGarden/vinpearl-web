<!DOCTYPE html>
<html lang="en">
<head>
	@include('client.include.head')
</head>
<body>
	<div id="wrapper">
		<header class="header">
			@include('client.include.header')
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
	</div>
    @include('client.include.script')
    
</body>
</html>