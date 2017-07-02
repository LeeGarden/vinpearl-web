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