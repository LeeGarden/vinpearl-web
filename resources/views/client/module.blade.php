<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VINPEARL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/hover.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/slick.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/js/fancybox/helpers/jquery.fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('client') }}/js/fancybox/helpers/jquery.fancybox-thumbs.css">
	<link rel="shortcut icon" href="{{ asset('/') }}/favicon.ico">
</head>
<body>
	<div id="wrapper">
		<header class="header">
			@include('client.include.header')
		</header><!-- /header -->
		<section class="slider">
			<div class="box-wp shadow">
				<ul class="slide">
					<li>
                        <a href="#"><img src="{{ asset('client') }}/img/slide1.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('client') }}/img/slide2.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('client') }}/img/slide3.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('client') }}/img/slide4.jpg"></a>
                    </li>
				</ul>
			</div>
		</section><!-- /slider -->
		<section class="container">
			<div class="box-wp">
				<section class="section">
					<div class="sec-01">
						<h1>Welcome<p>TO VINPEARL CUA DAI - HOI AN</p></h1>
						<p>Các biệt thự trong dự án Vinpearl Nam Hội An Resort có diện tích từ 700m2 – 1.600m2, được thiết kế theo phong cách kiến trúc hiện đại kết hợp với phong cách kiến trúc cổ điển lãng mạn, tạo thành tổ hợp không gian thống nhất, hài hòa với phòng khách, phòng ngủ, phòng tắm, nhà bếp…<br/>
						Đặc biệt, mỗi biệt thự Vinpearl Hội An còn có thêm bể bơi riêng, ban công và khoảng sân vườn thoáng mát để bạn có thể thiết kế cho riêng mình những không gian mở, gần gũi với thiên nhiên – nơi mỗi ngày bạn được ngắm nhìn và tận hưởng khung cảnh thơ mộng của biển.</p>
					</div>
					<div class="sec-02 clearfix">
						<div class="box-left">
							<iframe width="505" height="305" src="https://www.youtube.com/embed/d8dCiTki6-E" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="box-right">
							<h2>TỔNG QUAN</h2>
							<p>Chủ đầu tư:	Tập đoàn Vingroup<br>
							Địa điểm: Nam Hội An, T. Quảng Nam<br>
							Tổng diện tích dự án: ... hecta<br>
							Số biệt thự GĐ1: 25 căn<br>
							Diện tích biệt thự:	700m2 - 1.600m2<br>
							Mật độ xây dựng: ~ 20%<br>
							Thiết kế kiến trúc : ....<br>
							Thiết kế cảnh quan : ...<br>
							Đơn vị vận hành: ...<br>
							Dự kiến bàn giao: ...</p>
						</div>
					</div>
				</section>
				<section class="section">
					<div class="sec-03">
						<h2 class="h2-bdb">VỊ TRÍ DỰ ÁN</h2>
						<p class="mt-30">Dự án nằm đối diện với Cù Lao Chàm – tổ hợp các đảo nhỏ với hệ động thực vật phong phú cùng những di tích lịch sử đã có từ hàng trăm năm, được UNESCO
						công nhận là Khu dự trữ sinh quyển thế giới.</p>
						<ul class="dot">
							<li>Cách Bến tàu Cửa Đại 300m</li>
							<li>Phố cổ Hội An 7km</li>
							<li>Cách sân bay quốc tế Đà Nẵng 30km.</li>
						</ul>
						<p>Từ các biệt thự trong dự án, bạn có thể dễ dàng đi thăm quan và khám phá lịch sử, cảnh quan cũng như những nền văn hóa độc đáo và lâu đời của Phố Cổ Hội An (Di sản văn hóa thế giới được Unesco công nhận năm 1999).</p>
						<p class="mt-30 txt-center">
							<img src="{{ asset('client') }}/img/modules-1.jpg" alt="">
						</p>
					</div>	
				</section>
				<section class="section">
					<div class="sec-03">
						<h2 class="h2-bdb">MẶT BẰNG TỔNG THỂ DỰ ÁN</h2>
						<p class="mt-30">Các biệt thự trong dự án Vinpearl Nam Hội An Resort có diện tích từ 700m2 – 1.600m2, được thiết kế theo phong cách kiến trúc hiện đại kết hợp với phong cách kiến trúc cổ điển lãng mạn, tạo thành tổ hợp không gian thống nhất, hài hòa với phòng khách, phòng ngủ, phòng tắm, nhà bếp…</p>
						<p class="mt-30 txt-center">
							<img src="{{ asset('client') }}/img/modules-2.jpg" alt="">
						</p>
					</div>
				</section>
				<section class="section">
					<div class="sec-03">
						<h2 class="h2-bdb">CÁC MẪU VILLAS</h2>
						<p class="mt-30">Tại Biệt thự Vinpearl Hội An Resort & Villas, chủ nhân biệt thự và du khách còn được tận hưởng những tiện ích sống đầy đủ và đẳng cấp nhất, từ hệ thống bể bơi, phòng tập
						gym, tennis, phòng chơi trẻ em, cho tới trung tâm mua sắm và vui chơi như phòng karaoke, billard… tiện nghi hiện đại, chắc chắn sẽ đem lại cho quý khách những kỳ nghỉ vàng không thể quên.
						</p>
						<ul class="tabs clearfix mt-45">
							<li rel="tab1" class="active">CĂN HỘ 5 PHÒNG NGỦ</li>
							<li rel="tab2">CĂN HỘ 4 PHÒNG NGỦ</li>
							<li rel="tab3">CĂN HỘ 3 PHÒNG NGỦ MẪU A</li>
							<li rel="tab4">CĂN HỘ 3 PHÒNG NGỦ MẪU B</li>
							<li rel="tab5">CĂN HỘ 03 -05A TÒA G2</li>
						</ul>
						<div class="tab_container">
							<div class="tab_content" id="tab1">
								<img src="{{ asset('client') }}/img/modules-3.jpg" alt="">
							</div>
							<div class="tab_content" id="tab2">
								<img src="{{ asset('client') }}/img/modules-3.jpg" alt="">
							</div>
							<div class="tab_content" id="tab3">
								<img src="{{ asset('client') }}/img/modules-3.jpg" alt="">
							</div>
							<div class="tab_content" id="tab4">
								<img src="{{ asset('client') }}/img/modules-3.jpg" alt="">
							</div>
							<div class="tab_content" id="tab5">
								<img src="{{ asset('client') }}/img/modules-3.jpg" alt="">
							</div>
						</div>
					</div>
				</section>
				<section class="section">
					<div class="benefits">
						<div class="bd-lr2">
							<h2>CHÍNH SÁCH ĐẦU TƯ</h2>
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
									<h3><span><img src="{{ asset('client') }}/img/icon-4.png" alt=""></span>QUẢN LÝ CHUYÊN NGHIỆP</h3>
									<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại, Y tế - giáo dục...</p>
								</div>
								<div class="box">
									<h3><span><img src="{{ asset('client') }}/img/icon-5.png" alt=""></span>TĂNG GIÁ ĐẦU TƯ</h3>
									<p>Là sản phẩm của Tập đoàn Vingroup, tập đoàn tư nhân lớn nhất và uy tín nhất Việt Nam, hoạt động trong các lĩnh vực then chốt của nền kinh tế: Khách sạn - du lịch, Công viên giải trí, Trung tâm thương mại...</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section">
					<div class="sec-03">
						<h2 class="h2-bdb">TIẾN ĐỘ THANH TOÁN</h2>
						<p class="txt-center mt-30">Biệt thự A giá gốc từ  50 tỉ ( chỉ có 5 căn ) <br>
						Biệt thự B giá gốc  từ 27-37  tỉ  ( có 48 căn ) <br>
						Biệt thự C giá gốc  từ  25  tỉ  ( chỉ có 8 căn ) <br>
						Biệt thự D giá gốc  từ 14.5 tỉ ( có 80 căn ) </p>
						<p class="mt-30">Ưu đãi dành 8%+7% dành cho Khách hàng thanh toán sớm và hỗ trợ lãi suất 0% trong suốt 24 tháng ( 2 năm đầu không phải trả lãi và gốc ) , và nhiều phần quà giá trị khác  , Khách hàng chỉ cần có từ 200.000 USD là có thể sở hữu Biệt thự ngàn đô và hưởng chương trình cho thuê lên đến 9% của giá gốc.</p>
					</div>
				</section>
				<section class="section">
					<div class="sec-03">
						<h2 class="h2-bdb">TIẾN ĐỘ XÂY DỰNG</h2>
						<p class="txt-center mt-30">Biệt thự A giá gốc từ  50 tỉ ( chỉ có 5 căn ) <br>
						Biệt thự B giá gốc  từ 27-37  tỉ  ( có 48 căn ) <br>
						Biệt thự C giá gốc  từ  25  tỉ  ( chỉ có 8 căn ) <br>
						Biệt thự D giá gốc  từ 14.5 tỉ ( có 80 căn ) </p>
						<p class="mt-30">Ưu đãi dành 8%+7% dành cho Khách hàng thanh toán sớm và hỗ trợ lãi suất 0% trong suốt 24 tháng ( 2 năm đầu không phải trả lãi và gốc ) , và nhiều phần quà giá trị khác  , Khách hàng chỉ cần có từ 200.000 USD là có thể sở hữu Biệt thự ngàn đô và hưởng chương trình cho thuê lên đến 9% của giá gốc.</p>
					</div>
				</section>
				<section class="out-gallery">
					<h2 class="h2-bdb">HÌNH ẢNH</h2>
					<p class="mt-30 ff-none">Ưu đãi dành 8%+7% dành cho Khách hàng thanh toán sớm và hỗ trợ lãi suất 0% trong suốt 24 tháng ( 2 năm đầu không phải trả lãi và gốc ) , và nhiều phần quà giá trị khác  , Khách hàng chỉ cần có từ 200.000 USD là có thể sở hữu Biệt thự ngàn đô và hưởng chương trình cho thuê lên đến 9% của giá gốc . </p>
					<div class="gallery clearfix">
						<div class="gallery-left">
							<div class="gallery-left-t-total clearfix">
								<div class="gallery-left-t">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-1.jpg"><img src="{{ asset('client') }}/img/gallery-1.jpg" alt=""></a>
								</div>
								<div class="gallery-left-t">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-2.jpg"><img src="{{ asset('client') }}/img/gallery-2.jpg" alt=""></a>
								</div>
							</div>
							<div class="gallery-left-b">
								<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-3.jpg"><img src="{{ asset('client') }}/img/gallery-3.jpg" alt=""></a>
							</div>
						</div>
						<div class="gallery-center">
							<div class="gallery-center-t">
								<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-4.jpg"><img src="{{ asset('client') }}/img/gallery-4.jpg" alt=""></a>
							</div>
							<div class="gallery-center-t-total clearfix">
								<div class="gallery-center-b">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-5.jpg"><img src="{{ asset('client') }}/img/gallery-5.jpg" alt=""></a>
								</div>
								<div class="gallery-center-b">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-6.jpg"><img src="{{ asset('client') }}/img/gallery-6.jpg" alt=""></a>
								</div>
							</div>
						</div>
						<div class="gallery-right">
							<div class="gallery-right-t">
								<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-7.jpg"><img src="{{ asset('client') }}/img/gallery-7.jpg" alt=""></a>
							</div>
							<div class="gallery-right-t-total clearfix">
								<div class="gallery-right-b">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-8.jpg"><img src="{{ asset('client') }}/img/gallery-8.jpg" alt=""></a>
								</div>
								<div class="gallery-right-b">
									<a class="gp-fancy-box" rel="gallery-group" href="{{ asset('client') }}/img/gallery-9.jpg"><img src="{{ asset('client') }}/img/gallery-9.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</section>	
			</div>					
		</section><!-- /container -->
		<section class="pg-bottom">
			<div class="box-wp clearfix">
				<div class="register">
					<h3>ĐĂNG KÝ MỞ BÁN</h3>
						<div class="time-total clearfix">
							<div class="time">
								<p>NGÀY</p>
								<input type="text" name="" class="inp">
							</div>
							<div class="time">
								<p>GIỜ</p>
								<input type="text" name="" class="inp">
							</div>
							<div class="time">
								<p>PHÚT</p>
								<input type="text" name="" class="inp">
							</div>
							<div class="time">
								<p>GIÂY</p>
								<input type="text" name="" class="inp">
							</div>
						</div>
						<div class="form">
							<div class="form-item">
								<p>Họ và Tên</p>
								<input type="text" id="rs-fulname" class="inp2">
								<i class="fa fa-user"></i>
							</div>	
							<div class="form-item">
								<p>Email</p>
								<input type="text" id="rs-email" class="inp2">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							</div>	
							<div class="form-item">
								<p>Số điện thoại</p>
								<input type="text" id="rs-phone" class="inp2">
								<i class="fa fa-phone fa-lg"></i>
							</div>	
							<div class="form-item">
								<p>Tin nhắn</p>
								<textarea id="rs-message" class="txtarea"></textarea>
							</div>
						</div>
						<button type="submit" id="sendRegSale" class="inp-sm" url-data="{{ asset('/dang-ky-ban') }}" data-token="{{ csrf_token() }}">GỬI ĐI</button>
				</div>
			</div>
		</section><!-- /sec06 -->
		<footer class="footer" id="contact">
			<div class="box-wp">
				<div class="ft-total clearfix">
					<div class="ft-left clearfix">
						<div class="ft-left-lh">
							<h3>LIÊN HỆ</h3>
							<p>Địa chỉ:<br>
							L1 - R4 Royal City, 72A Nguyễn Trãi,<br>
							Thanh Xuân, Hà Nội<br>
							17-19 Tôn Thất Tùng,<br>
							Quận 1, TP Hồ Chí Minh</p>
							<p>Hotline: (+84) 936 186 118</p>
							<p>Email: nam.tuvanduanvinhomes@gmail.com</p>
							<p>Thứ 2 - Thứ 6: <span class="cl-w">8h.30am den 11h.00pm</span><br>Thứ 7: <span class="cl-w">9h.00am den 9h.00pm</span><br>Chủ nhật: <span class="cl-w">9h.00am den 8h.00pm</span></p>
							<p>Hỗ trợ <span class="cl-w">24/24</span></p>
						</div>
						<div class="ft-left-dm">
							<h3>DANH MỤC</h3>
							<ul>
								<li><a href="#">Biệt thự Vinpearl</a></li>
								<li><a href="#">Căn hộ Vinpearl</a></li>
								<li><a href="#">Lợi ích đầu tư</a></li>
								<li><a href="#">Tiến độ dự án</a></li>
								<li><a href="#">Tin tức - Sự kiện</a></li>
							</ul>
						</div>
					</div>	
					<div class="ft-right">
						<h3>ĐĂNG KÝ TƯ VẤN MIỄN PHÍ</h3>
						<form action="" method="">
							<input type="text" id="fulname" name="fulname" placeholder="*Họ và Tên" class="inp3">
							<input type="text" id="email" name="email" placeholder="*Email" class="inp3">
							<input type="text" id="phone" name="phone" placeholder="*Số điện thoại" class="inp3">
							<textarea id="message" name="message" placeholder="*Tin nhắn" class="txtarea2"></textarea>
							<button type="button" id="sendConsult" url-data="{{ asset('/tu-van') }}" data-token="{{ csrf_token() }}" class="inp-sm" >GỬI ĐI</button>
						</form>
					</div>
				</div>
			</div>
		</footer><!-- /footer -->
		<a href="javascript:void(0)" title="Lên đầu trang" id="go-top"></a>
	</div>
    <script type="text/javascript" src="{{ asset('client') }}/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('client') }}/js/slick.js"></script>
    <script type="text/javascript" src="{{ asset('client') }}/js/main.js"></script>
    <script type="text/javascript" src="{{ asset('client') }}/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="{{ asset('client') }}/js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="{{ asset('client') }}/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
</body>
</html>