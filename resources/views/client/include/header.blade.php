<style type="text/css">
	.no-after::after{
		content: ""!important;
	}
	.mb-30{
		margin-bottom: 30px;
	}
</style>
<div class="box-wp clearfix">
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
					<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
						<span>LỢI ÍCH ĐẦU TƯ</span>
					</a>
				</li>
				<li>
					<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
						<span>TIẾN ĐỘ DỰ ÁN</span>
					</a>
				</li>
				<li>
					<a href="#" title="Giới thiệu" class="hvr-underline-from-left">
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