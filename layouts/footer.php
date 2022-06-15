<footer style="background-color: #ffa500 !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>GIỚI THIỆU</h4>
				<ul>
					<li>CÔNG TY DU LỊCH GUYs TEAM</li>
					<li>Chúng tôi luôn tiên phong trong lĩnh vực du lịch theo tour. Chúng tôi luôn nỗ lực tạo ra những phút giây hạnh phúc, thư giãn, vui vẻ và thoải mái nhất cho khách hàng.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                <li>Địa Chỉ : 273 Kim Mã-Ba Đình-Hà Nội</li>
                <li>Facebook : facebook.com/guysteam</li>
                <li>Điện Thoại : 0987654321</li>
                <li>Email : guysteam@gmail.com</li>
			</div>
			<div class="col-md-4">
				<h4>ĐỐI TÁC CỦA CHÚNG TÔI</h4>
                <li>Đại Học Thuỷ Lợi</li>
                <li>61TH5</li>
			</div>
		</div>
	</div>
	<div style="background-color: #3f9609; width: 100%; text-align: center; padding: 20px;">
		© 2021/11/02 GUYs TEAM
	</div>
</footer>

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num, ngay_khoi_hanh) {
		console.log(productId);
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num,
			'ngay_khoi_hanh': ngay_khoi_hanh,
		},// function(data) {
			//location.reload()
		//}
		)}
</script>

</body>
</html>