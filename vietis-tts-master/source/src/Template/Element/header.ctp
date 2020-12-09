
<!-- Header top -->
<header class="header1">
	<div class="holder">
		<ul class="clearfix andress">
			<li><i class="fas fa-home"></i> 319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</li>
			<li><i class="fas fa-phone"></i> <a href="tel:0769220167">0769 220 167</a></li>
		</ul>
		<ul class=" clearfix search">
			<li class="item-search">
				<a href="#"><i class="fas fa-search"></i></a>
				<form action="#" method="GET">
					<input type="text" placeholder="Tìm kiếm" name="keyword">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</li>
			<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-user"></i></a></li>
		</ul>
	</div>
</header>

<!-- END:header top -->
<header class="header2">
	<div class="holder">
		<div class="logo">
			<a href="#">
				<img src="http://mauweb.monamedia.net/karo/wp-content/uploads/2019/05/logo-mona.png" class="clearfix">
			</a>	
		</div>
		<ul class="clearfix menu">
			<li><a href="http://localhost/ecommerce.websize/source/" class="active">Trang chủ</a></li>
			<li><a href="http://localhost:8080/pages/about">Giới thiệu</a></li>
			<li class="shop"><a href="#">Cửa hàng <i class="fas fa-chevron-down"></i></a>
				<ul class="sub-menu">
					<li><a href="http://localhost:8080/categories/1">Nhẫn</a></li>
					<li><a href="http://localhost:8080/categories/1">Bông tai</a></li>
					<li><a href="http://localhost:8080/categories/1">Dây chuyền</a></li>
				</ul>

			</li>
			<li><a href="http://localhost/ecommerce.websize/source/new">Tin tức</a></li>
			<li><a href="http://localhost/ecommerce.websize/source/contact">Liên hệ</a></li>
		</ul>
		<ul class="clearfix cart-box">
			<li class="cart">
				<a href="http://localhost/ecommerce.websize/source/Carts">Giỏ hàng / 
					<span class="amount">0</span>
					<span>₫</span>
					<span class="cart-icon"><span class="cart-icon-top"></span>0</span>
				</a> 
				<div class="show-cart">
					<p>Chưa có sản phẩm nào trong giỏ hàng</p>
					<div class="has-product">
						<table >
							<tr>
								<td width="30%"><img src="http://mauweb.monamedia.net/karo/wp-content/uploads/2019/05/day-chuyen-1.jpg"></td>
								<td width="50%">
									<a href="#" class="title">Personalized Infinity Necklace in Sterling Silver</a>
									<p><span class="quantity">1 x</span><span class="font-weight-bold"> 398,000 ₫</span></p>
								</td>
								<td ><a href="#" class="delete-product">x</a></td>
							</tr>
							<tr>
								<td width="30%"><img src="http://mauweb.monamedia.net/karo/wp-content/uploads/2019/05/day-chuyen-1.jpg"></td>
								<td width="50%">
									<a href="#" class="title">Personalized Infinity Necklace in Sterling Silver</a>
									<p><span class="quantity">1 x</span><span> 398,000 ₫</span></p>
								</td>
								<td ><a href="#" class="delete-product">x</a></td>
							</tr>
						</table>
					</div>
					<p class="total">Tổng phụ: <strong>1,544,000 <u>đ</u></strong></p>
					<a href="#" class="btn-view-cart">Xem giỏ hàng</a>
					<a href="#" class="btn-checkout">Thanh toán</a>
				</div>
			</li>
		</ul>	
	</div>	
</header>
<!-- modal login -->
<div class="modal  mt-5 login " id="myModal">
	<div class="modal-content">
		<div class="panel">
			<div class="h-50 text-center logo">
				<?= $this->Html->image('logo-mona.png',['alt' => 'Logo Mona']);?>
			</div>
			<form action="#" method="post">
				<div class="form-group">
					<label>Email/SĐT <span class="text-danger">*</span></label>
					<input type="text" name="username" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>Mật khẩu <span class="text-danger">*</span></label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember"> <span class="small">Ghi nhớ mật khẩu?</span>
				</div>
				<input type="submit" name="login" class=" m-auto btn-login" value="Đăng nhập">
				
				<a href="/register" class="ml-3 register">Đăng ký tài khoản mới</a>
				
				
			</form>
		</div>
	</div>
</div>
<!-- END: modal login -->

