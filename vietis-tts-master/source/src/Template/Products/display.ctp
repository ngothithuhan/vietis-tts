
<div class="main">
	<div class="holder">
		<div class=" clearfix product-main ">
			<div class="clearfix product-gallery ">
				<?= $this->Html->image('product/day-chuyen-1.jpg');?>
			</div>
			<div class="clearfix product-content ">
				<ul class=" clearfix product-breadcrumb ">
					<li>
						<a href="#">Trang chủ </a>
					</li>
					<li>/</li>
					<li class="active"> <a href="#">Dây chuyền</a></li>
				</ul>
				<h1 class="product-title">Personalized Infinity Necklace in Sterling Silver</h1>
				<div class="border-bottom-small"></div>
				<div class="price">398,000 ₫</div>
				<div class="product-summary">
					<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium.</p>
				</div>
				<div class="add-to-cart">
					<?= $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'Carts','action'=>'add')));?>
						<button>-</button>
						<input type="text" name="quantity" value="1">
						<input type="hidden" name="product_id" value="14">
						<button>+</button>
						<button class="btn-submit" type="submit">Thêm vào giỏ</button>
					 <?php echo $this->Form->end();?>
				</div>
				<div class="partner">
					<div class="shipper">
						<strong>Tính phí ship tự động</strong>
						<div class="gallery-shipper">
							<div class="row-inner">
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-ghn.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-ghtk.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-ninja-van.jpg')?>
									</a>
								</div>
							</div>
							<div class="row-inner">
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-shipchung.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-viettle-post.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-vn-post.jpg')?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="bank">
						<strong>Thanh toán</strong>
						<div class="gallery-bank">
							<div class="row-inner">
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-acb.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-techcombank.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo/logo-vib.jpg')?>
									</a>
								</div>
							</div>
							<div class="row-inner">
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-vcb.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-paypal.jpg')?>
									</a>
								</div>
								<div class="col-inner">
									<a href="#" class="image-lightbox">
										<?= $this->Html->image('logo/logo-mastercard.jpg')?>
									</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- <strong class="subcribe">"Hãy trở thành Affilicate của chúng tôi để tìm thêm thu nhập thụ động, kiếm tiền online"</strong>
				<a href="#" class="btn btn-subcribe">Đăng ký Affilicate</a> -->
				<div class="product-meta">
					<span>Danh mục: </span> <a href="#">Dây chuyền</a>
				</div>
			</div>
		</div>
		<div class="product-footer" >
			<div class="product-tabbed">
				<div class="clearfix tab-items">
				  <button class="btn-tab active" onclick="return openTab('Desciption',this)">Mô tả</button>
				  <button class="btn-tab" onclick="return openTab('More',this)">Thông tin bổ sung</button>
				 <!--  <button class="btn-tab" onclick="return openTab('Review',this)">Đánh giá (0) </button> -->
				</div>

				<div id="Desciption" class="clearfix content-tab tab">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nibh ligula, faucibus sit amet aliquet ac, molestie a massa. Fusce vitae feugiat enim, id fermentum magna. Aenean convallis egestas massa ac rhoncus. Integer iaculis et erat id auctor. Vivamus porta, mi a porttitor imperdiet, purus metus tempus elit, ut dictum mauris dui a tellus. Integer at ipsum sit amet sem vulputate ultricies in vel orci. Aliquam feugiat vulputate ligula, quis posuere tortor condimentum eget. Sed consequat ante sed congue pellentesque. Cras massa purus, venenatis in eros at, vestibulum finibus sapien. Nunc sodales facilisis tortor, sit amet scelerisque metus pharetra at. Proin efficitur consequat ipsum quis scelerisque. Quisque ac venenatis purus.</p>
				</div>

				<div id="More" class="clearfix content-tab tab " style="display:none">
				  <table>
				  	<tr>
				  		<td class="attitude">Màu sắc</td>
				  		<td>Đen, Xanh dương, Nâu, Vàng, Cam, Hồng, Bạc</td>
				  	</tr>
				  	<tr>
				  		<td class="attitude">Size</td>
				  		<td>L,M,S</td>
				  	</tr>
				  </table>
				</div>

				<!-- <div id="Review" class="content-tab tab" style="display:none">
				  <h5>Đánh giá</h5>
				  <p>Chưa có đánh giá nào.</p>
				  <div class="review-box">
				  	<h3>Hãy là người đầu tiên nhận xét “Personalized Infinity Necklace in Sterling Silver” </h3>
				  	<strong>Đánh giá của bạn</strong>
				  	<form>
				  		<div class="check-review">
				  			
				  		</div>
				  		<div class="form-group-inner">
				  			<strong>Nhận xét của bạn *</strong>
				  			<textarea class="comment form-input" name="content"></textarea>
				  		</div>
				  		<div class="row">
				  			<div class="form-group-inner col-6">
				  			<strong>Tên *</strong>
				  			<input type="text" name="name" class="form-input" >
				  		</div>
				  		<div class="form-group-inner col-6">
				  			<strong>Email *</strong>
				  			<input type="text" name="email" class="form-input" >
				  		</div>
				  		</div>
				  		
						<button class="btn btn-submit">Gửi đi</button>
				  	</form>
				  </div>
				</div> -->
			</div>
			<div class="product-same">
				<h4 class="m-4 pl-3 font-weight-bold">Sản phẩm tương tự</h4>
				<div class="list-product">
					<a href="#" class="image-product-same">
						<div class="product-same-item">
							<?= $this->html->image('product/ring-2-300x300.jpg')?>
							<a href="" class="title">CURB BRACELET</a>
							<strong class="price font-weight-bold price">150,000 ₫</strong>
							<a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
						</div>
					</a>
					<a href="#" class="image-product-same">
						<div class="product-same-item">
							<?= $this->html->image('product/ring-2-300x300.jpg')?>
							<a href="" class="title">CURB BRACELET</a>
							<strong class="price font-weight-bold price">150,000 ₫</strong>
							<a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
						</div>
					</a>
					
					<a href="#" class="image-product-same">
						<div class="product-same-item">
							<?= $this->html->image('product/ring-2-300x300.jpg')?>
							<a href="" class="title">CURB BRACELET</a>
							<strong class="price font-weight-bold price">150,000 ₫</strong>
							<a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
						</div>
					</a>
					<a href="#" class="image-product-same">
						<div class="product-same-item">
							<?= $this->html->image('product/ring-2-300x300.jpg')?>
							<a href="" class="title">CURB BRACELET</a>
							<strong class="price font-weight-bold price">150,000 ₫</strong>
							<a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
						</div>
					</a>
					<a href="#" class="image-product-same">
						<div class="product-same-item">
							<?= $this->html->image('product/ring-2-300x300.jpg')?>
							<a href="" class="title">CURB BRACELET</a>
							<strong class="price font-weight-bold price">150,000 ₫</strong>
							<a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
						</div>
					</a>
				</div>	
			</div>
		</div>
	</div>
</div>
<script>
function openTab(tabName,current) {
  var i;
  var x = document.getElementsByClassName("tab");
  var y= document.getElementsByClassName("btn-tab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
    y[i].classList.remove('active');
  }
  document.getElementById(tabName).style.display = "block"; 
  current.classList.add('active');

}
</script>