<!-- Cart -->

<div class="page-cart holder">
	<!-- Product -->
	<div class="product">
		<table border="0">
			<thead>
				<tr>
					<th colspan="3">SẢN PHẨM</th>
					<th>GIÁ</th>
					<th>SỐ LƯỢNG</th>
					<th>TỔNG</th> 
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product):?>
				<tr>
					<td width="40px;"><a href=""><div class="remove">x</a></div></td>
					<td ><?= $this->HTML->image('cart/day-chuyen-1.jpg') ?></td>
					<td><?=h($product->name)?></td>
					<td class="price"><?=h($product->price_sale)?></td>
					<td>
						<form action="" method="POST">
							<button>-</button>
							<input type="text" name="quatity" value=<?=h($product['count'])?>>
							<button>+</button>
						</form>
					</td>
					<td class="price"><?= h($product->price_sale*$product['count'])?></td>
				</tr>
				
			<?php endforeach;?>
			</tbody>
		</table>
		<button class="watch-product"><i class="fas fa-arrow-left"></i>Tiếp tục xem sản phẩm</button>
		<button class="update-cart">CẬP NHẬP GIỞ HÀNG</button>
	</div>
	<!-- Total price -->
	<div class="total-price">
		<table>
			<thead>
				<tr>
					<th colspan="2">TỔNG SỐ LƯỢNG</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tổng phụ</td>
					<td class="price right">896,000 đ</td>
				</tr>
				<tr>
					<td>Giao hàng</td>
					<td class="right">Giao hàng miễn phí <br> Ước tính cho <b>Việt Nam</b> <br>
						<p class="address">Đổi địa chỉ</p>
						<form action="" method="POST" class="address-form">
							<select>
								<option value="city">Việt Nam</option>
								<option value="city">japan</option>
								<option value="city">Vantican</option>
								<option value="city">USA</option>
								<option value="city">Thái Lan</option>
							</select>
							<input type="text" placeholder="Thanh phố ...">
							<input type="text" placeholder="Mã bưu điện ...">
							<button>Cập nhập</button>
						</form>
					</td>
				</tr>
				<tr>
					<td>Tổng</td>
					<td class="price right">896,000 đ</td>
				</tr>
			</tbody>
		</table>
		<div  class=" payment">
			<button class=" btn btn-primary">TIẾN HÀNH THANH TOÁN
			</button>
			<div><i class="fas fa-backspace"></i>Phiếu ưu đãi</div>
		</div>
		
		<div class="form">
			<form action="" method="POST">
				<input type="text" placeholder="Mã ưu đãi">
				<button>ÁP DỤNG</button>
			</form>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script> 
$(document).ready(function(){
  $(".address").click(function(){
    $(".address-form").slideToggle("fast");
  });
});
</script>
<!-- END: Cart -->