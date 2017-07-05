@extends('client.master')
@section('header')
	<div class="box-wp-2 clearfix">
		<div class="header-left">
			<a href="{{ asset('/') }}" title="VINPEARL">
				<img src="{{ asset('client') }}/img/logo.png" alt="VINPEARL" />
			</a>
		</div>
		<div class="header-right">
			<nav class="navigation" role="navigation">
				<ul>
					<li class="active">
						<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
							<span>GIỚI THIỆU</span>
						</a>
					</li>
					<li>
						<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
							<span>BIỆT THỰ VINPEARL</span>
						</a>
						<ul>
							<?php
								use App\Http\Controllers\HomeController;
							?>
							@foreach ($menuParent as $mpr)
								<?php
									$child = HomeController::loadMenuOfParent($mpr['id']);
								?>
								<li>
									<a href="#" title="Giới thiệu">{{ $mpr['name'] }}</a>
									<ul>
										@foreach ($child as $ch)
											<li>
												<a href="{{ asset('du-an') }}/{{ $ch['slug'] }}" class="no-after" title="Giới thiệu">{{ $ch['name'] }}</a>
											</li>
										@endforeach
									</ul>
								</li>
							@endforeach
							@foreach ($menuNoChild as $mnc)
								<li>
									<a href="{{ asset('du-an') }}/{{ $mnc['slug'] }}" class="no-after" title="Giới thiệu">{{ $mnc['name'] }}</a>
								</li>
							@endforeach
						</ul>
					</li>
					<li>
						<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
							<span>CĂN HỘ VINPEARL</span>
						</a>
					</li>
					<li>
						<a href="#invest" title="Giới thiệu" class="hvr-underline-from-left">
							<span>LỢI ÍCH ĐẦU TƯ</span>
						</a>
					</li>
					<li>
						<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
							<span>TIẾN ĐỘ DỰ ÁN</span>
						</a>
					</li>
					<li>
						<a href="#event" title="Giới thiệu" class="hvr-underline-from-left">
							<span>TIN TỨC SỰ KIỆN</span>
						</a>
					</li>
					<li>
						<a href="#contact" title="Giới thiệu" class="hvr-underline-from-left">
							<span>LIÊN HỆ</span>
						</a>
					</li>
				</ul>
			</nav>	
		</div>
	</div>
@endsection
@section('container')
	<section class="sec01">
		<div class="box-wp-2">
			<div class="welcome">
				<h1><span>Welcome</span>TO VINPEARL RESORT - VILLAS</h1>
				<p class="mt-40">Would you like to savor the exquisite cuisine and bring the art of the dining to a new level? We obtain the freshest products from reputable purveyors and incorporate them into our exclusive dishes. Our menus are influenced by culinary traditions of Asia...<a href="#">See more</a></p>
				<div class="box-wp">
					<div class="box-total autoplay clearfix">
						@foreach ($listAllProject as $item)
							<div class="box">
								<div class="box-img hvr-float-shadow">
									<a href="{{ asset('du-an') }}/{{ $item['slug'] }}"><img src="{{ asset('uploads/images') }}/{{ $item->image}}" alt=""></a>
								</div>
								<h3>{{ $item->name }}</h3>
								<p>{{ str_limit($item->description,93) }}</p>
								<p><a href="{{ asset('du-an') }}/{{ $item['slug'] }}">See more</a></p>
							</div>
						@endforeach
					</div>
				</div>
				<p class="txt-center"><img src="{{ asset('client') }}/img/bd-bot.png" alt=""></p>
			</div>
		</div>
	</section><!-- /sec01 -->
	<section class="sec02" id="invest">
		<div class="box-wp-2">
			<div class="benefits">
				<div class="bd-lr">
					<h2>LỢI ÍCH ĐẦU TƯ</h2>
				</div>
				<div class="comma">
					<img src="{{ asset('client') }}/img/comma.png" alt="">
					<div class="box-total clearfix">
						<div class="box">
							<h3><span><img src="{{ asset('client') }}/img/icon-1.png" alt=""></span>UY TÍN</h3>
							<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại, Y tế - giáo dục...</p>
						</div>
						<div class="box">
							<h3><span><img src="{{ asset('client') }}/img/icon-2.png" alt=""></span>QUYỀN SỞ HỮU VĨNH VIỄN</h3>
							<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại...</p>
						</div>
						<div class="box">
							<h3><span><img src="{{ asset('client') }}/img/icon-3.png" alt=""></span>QUẢN LÝ CHUYÊN NGHIỆP</h3>
							<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại...</p>
						</div>
						<div class="box">
							<h3><span><img src="{{ asset('client') }}/img/icon-4.png" alt=""></span>TIỆN ÍCH</h3>
							<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại, Y tế - giáo dục...</p>
						</div>
						<div class="box">
							<h3><span><img src="{{ asset('client') }}/img/icon-5.png" alt=""></span>TĂNG GIÁ ĐẦU TƯ</h3>
							<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại...</p>
						</div>
					</div>
				</div>
				<p class="txt-center"><img src="{{ asset('client') }}/img/bd-bot.png" alt=""></p>
			</div>
		</div>
	</section><!-- /sec02 -->
	<section class="sec03">
		<div class="box-wp">
			<div class="out-gallery">
				<h3>OUT GALLERY</h3>
				<p class="mt-15">Would you like to savor the exquisite cuisine and bring the art of the dining to a new level? We obtain the freshest products from reputable purveyors and incorporate them into our exclusive dishes. Our menus are influenced by culinary traditions of Asia...<a href="#">See more</a></p>
				<div class="gallery clearfix">
					<ul class="gallery-top slider-for">
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide1.jpg"><img src="{{ asset('client') }}/img/slide1.jpg"></a>
						</li>
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide2.jpg"><img src="{{ asset('client') }}/img/slide2.jpg"></a>
						</li>
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide1.jpg"><img src="{{ asset('client') }}/img/slide1.jpg"></a>
						</li>
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide2.jpg"><img src="{{ asset('client') }}/img/slide2.jpg"></a>
						</li>
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide1.jpg"><img src="{{ asset('client') }}/img/slide1.jpg"></a>
						</li>
						<li>
							<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/slide2.jpg"><img src="{{ asset('client') }}/img/slide2.jpg"></a>
						</li>
					</ul>
					<ul class="gallery-bot slider-nav">
						<li>
							<img src="{{ asset('client') }}/img/slide1.jpg">
						</li>
						<li>
							<img src="{{ asset('client') }}/img/slide2.jpg">
						</li>
						<li>
							<img src="{{ asset('client') }}/img/slide1.jpg">
						</li>
						<li>
							<img src="{{ asset('client') }}/img/slide2.jpg">
						</li>
						<li>
							<img src="{{ asset('client') }}/img/slide1.jpg">
						</li>
						<li>
							<img src="{{ asset('client') }}/img/slide2.jpg">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- /sec03 -->
	<section class="sec04" id="event">
		<div class="box-wp">
			<div class="events">
				<h3>UPCOMING EVENTS</h3>
				<div class="box-total clearfix">
					<div class="box-left">
						<iframe width="475" height="280" src="{{ $first->video }}" frameborder="0" allowfullscreen></iframe>
						<div class="bl-bot">
							<ul class="clearfix">
								<li>
									<span><img src="{{ asset('client') }}/img/icon-6.png" alt=""></span>
									{{-- {{ date('F d Y', strtotime($nearestEvent->date_begin)) }} --}}
								</li>
								<li>
									<span><img src="{{ asset('client') }}/img/icon-7.png" alt=""></span>
									{{-- {{ $nearestEvent->time_begin }} --}}
								</li>
							</ul>
							<h4>{{ $first->name }}</h4>
							<p>{{ str_limit($first->description,225) }}</p>
							<p>
								<a href="{{ asset('du-an') }}/{{ $first->slug }}"><img src="{{ asset('client') }}/img/bt-read.png" alt=""></a>
							</p>
						</div>
					</div>
					<div class="box-right">
						@foreach ($list4Project as $item)
							<div class="view">
							<ul class="clearfix">
								<li>
									<span><img src="{{ asset('client') }}/img/icon-6.png" alt=""></span>
									{{-- {{ date('F d Y', strtotime($item->date_begin)) }} --}}
								</li>
								<li>
									<span><img src="{{ asset('client') }}/img/icon-7.png" alt=""></span>
									{{-- {{ $item->time_begin }} --}}
								</li>
							</ul>
							<h4><a href="{{ asset('du-an') }}/{{ $item->slug }}">{{ $item->name }}</a></h4>
						</div>
						@endforeach
						@if(count($list4Project) >= 3)
							<p class="txt-right">
								<a href="#"><img src="{{ asset('client') }}/img/bt-view.png" alt=""></a>
							</p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section><!-- /sec04 -->
@endsection