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
						<a href="#payment" title="Giới thiệu" class="hvr-underline-from-left">
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
	<div class="box-wp-2">
		<section class="section">
			<div class="sec-01">
				<h1>Welcome <p>TO {{ $project->name }}</p></h1>
				<p>{!! $project->description !!}</p>
			</div>
			<div class="box-wp">
				<div class="sec-02 clearfix">
					<div class="box-left">
						<iframe width="505" height="305" src="{{ $project->video }}" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="box-right">
						<h2>TỔNG QUAN</h2>
						{!! $project->overview !!}
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="sec-03" id="location">
				<h2 class="h2-bdb">VỊ TRÍ DỰ ÁN</h2>
				<p class="mt-30"></p>
				{!! $project->location->description !!}
				<p class="mt-30 txt-center">
					<img src="{{ asset('uploads/images') }}/{{ $project->location->image }}" alt="">
				</p>
			</div>	
		</section>
		<section class="section" id="overall_ground">
			<div class="sec-03">
				<h2 class="h2-bdb">MẶT BẰNG TỔNG THỂ DỰ ÁN</h2>
				{!! $project->overall_ground->description !!}
				<p class="mt-30 txt-center">
					<img src="{{ asset('uploads/images') }}/{{ $project->overall_ground->image }}" alt="">
				</p>
			</div>
		</section>
		<section class="section">
			<div class="sec-03">
				<h2 class="h2-bdb" id="sample_villas">CÁC MẪU VILLAS</h2>
				<p class="mt-30">{{ $project->sample_villa->description }}</p>
				<div class="box-wp">
					<ul class="tabs clearfix mt-45">
						<li rel="tab1" class="active">{{ $project->sample_villa->sample1->title }}</li>
						<li rel="tab2">{{ $project->sample_villa->sample2->title }}</li>
						<li rel="tab3">{{ $project->sample_villa->sample3->title }}</li>
						<li rel="tab4">{{ $project->sample_villa->sample4->title }}</li>
						<li rel="tab5">{{ $project->sample_villa->sample5->title }}</li>
					</ul>
					<div class="tab_container">
						<div class="tab_content" id="tab1">
							<img src="{{ asset('uploads/images') }}/{{ $project->sample_villa->sample1->image }}" alt="">
						</div>
						<div class="tab_content" id="tab2">
							<img src="{{ asset('uploads/images') }}/{{ $project->sample_villa->sample2->image }}" alt="">
						</div>
						<div class="tab_content" id="tab3">
							<img src="{{ asset('uploads/images') }}/{{ $project->sample_villa->sample3->image }}" alt="">
						</div>
						<div class="tab_content" id="tab4">
							<img src="{{ asset('uploads/images') }}/{{ $project->sample_villa->sample4->image }}" alt="">
						</div>
						<div class="tab_content" id="tab5">
							<img src="{{ asset('uploads/images') }}/{{ $project->sample_villa->sample5->image }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section" id="invest">
			<div class="benefits"  id="investment">
				<div class="bd-lr2">
					<h2>CHÍNH SÁCH ĐẦU TƯ</h2>
				</div>
				<div class="comma">
					<img src="{{ asset('client') }}/img/comma.png" alt="">
					<div class="box-total clearfix">
						<div class="box mh-box">
							<h3>
								<span><img src="{{ asset('client') }}/img/icon-1.png" alt=""></span>
								{{ $project->investment->inve1->title }}
							</h3>
							{!! str_limit($project->investment->inve1->description,235) !!}
						</div>
						<div class="box mh-box">
							<h3>
								<span><img src="{{ asset('client') }}/img/icon-2.png" alt=""></span>
								{{ $project->investment->inve2->title }}
							</h3>
							{!! str_limit($project->investment->inve2->description,235) !!}
						</div>
						<div class="box mh-box">
							<h3>
								<span><img src="{{ asset('client') }}/img/icon-3.png" alt=""></span>
								{{ $project->investment->inve3->title }}
							</h3>
							{!! str_limit($project->investment->inve3->description,235) !!}
						</div>
						<div class="box mh-box">
							<h3>
								<span><img src="{{ asset('client') }}/img/icon-4.png" alt=""></span>
								{{ $project->investment->inve4->title }}
							</h3>
							{!! str_limit($project->investment->inve4->description,235) !!}
						</div>
						<div class="box mh-box">
							<h3>
								<span><img src="{{ asset('client') }}/img/icon-5.png" alt=""></span>
								{{ $project->investment->inve5->title }}
							</h3>
							{!! str_limit($project->investment->inve5->description,235) !!}
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section" id="payment">
			<div class="sec-03">
				<h2 class="h2-bdb">TIẾN ĐỘ THANH TOÁN</h2>
				<p class="mt-30"></p>
				{!! $project->payment !!}
			</div>
		</section>
		<section class="section">
			<div class="sec-03">
				<h2 class="h2-bdb">TIẾN ĐỘ XÂY DỰNG</h2>
				<p class="mt-30"></p>
				{!! $project->construction !!}
			</div>
		</section>
		<section class="out-gallery">
			<h2 class="h2-bdb">HÌNH ẢNH</h2>
			<p class="mt-30 ff-none">Ưu đãi dành 8%+7% dành cho Khách hàng thanh toán sớm và hỗ trợ lãi suất 0% trong suốt 24 tháng ( 2 năm đầu không phải trả lãi và gốc ) , và nhiều phần quà giá trị khác  , Khách hàng chỉ cần có từ 200.000 USD là có thể sở hữu Biệt thự ngàn đô và hưởng chương trình cho thuê lên đến 9% của giá gốc . </p>
			<div class="box-wp">
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
		</section>	
	</div>	
@endsection