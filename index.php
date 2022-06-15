<!--Trang chủ-->



<?php 
require_once('layouts/header.php');

$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id order by Product.updated_at desc limit 0,12";
$lastestItems = executeResult($sql);
?>


<!-- banner -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://tapchivannghe.com/wp-content/uploads/2019/06/downloadfiles-wallpapers-1920_1200-colorful_sunset_twilight_8133.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://media.lamchame.vn/images/2018/10/01/1_nc8u9m19-x2nisvg_-haqg.jpeg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://duhocinec.com/static/assets/uploads/du-hoc-thuy-sy/kinh-nghiem/du-hoc-thuy-si-dieu-dac-biet-1.jpg" alt="New York">
    </div>
     <div class="carousel-item">
      <img src="https://vcdn1-dulich.vnecdn.net/2019/10/04/tha-c-ba-n-gio-c-vnexpress-2-1570193122.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=DwZQDZzs4ymEF59jPZnz5Q" alt="New York">
    </div>
     <div class="carousel-item">
      <img src="https://khamphamoingay.com/wp-content/uploads/2019/06/nhung-hinh-anh-ve-thien-nhien-dep-nhat-the-gioi-1.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-- banner stop -->
<div class="container">
	 <h1 class="heading">
        <span>Các Gói Tour Mới Nhất</span>
        
    </h1>
	<div class="row">
	<?php
		foreach($lastestItems as $item) {
			echo '<div class="col-md-3 col-6 product-item">
					<a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height: 220px;"></a>
					<p style="font-weight: bold;">'.$item['category_name'].'</p>
					<a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$item['title'].'</p></a>
					<p style="color: red; font-weight: bold;">'.number_format($item['discount']).' VND</p>
					
				</div>';
		}
	?>
	</div>
</div>

  <section class="services" id="services">
        <h1 class="heading"><span>Dịch Vụ</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Khách Sạn </h3>
                <p>Tiêu Chuẩn 5*, Giá 3*</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Ẩm Thực</h3>
                <p>Tươi Ngon, Thượng Hạng </p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Hướng Dẫn An Toàn</h3>
                <p>Hướng Dẫn An Toàn</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>Vòng Quanh Thế Giới</h3>
                <p>Sắp Có</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>Thời Gian Đi Ngắn</h3>
                <p>Đi Bằng Máy Bay</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>Phiêu Lưu</h3>
                <p>Motorcycle</p>
            </div>
        </div>
    </section>

<section class="gallery" id="gallery">
        <h1 class="heading"><span>Cẩm Nang</span></h1>
        <div class="box-container">
            <div class="box">
                <a href="han_book_song_huong.php" title="Chiêm ngưỡng vẻ đẹp sông Hương xứ Huế" class="pa1x1">
                    <img src="anh_du_lich/a1.jpg" alt="Chiêm ngưỡng vẻ đẹp sông Hương xứ Huế">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="Chiêm ngưỡng vẻ đẹp sông Hương xứ Huế">Chiêm ngưỡng vẻ đẹp sông Hương xứ Huế</a></h4>
                    <a href="han_book_song_huong.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <a href="han_book_tay_bac.php" title="ĐẾN TÂY BẮC THƯỞNG THỨC 5 MÓN ĂN ĐỘC ĐÁO" class="pa1x1">
                    <img src="anh_du_lich/a2.jpg" alt="ĐẾN TÂY BẮC THƯỞNG THỨC 5 MÓN ĂN ĐỘC ĐÁO ">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="ĐẾN TÂY BẮC THƯỞNG THỨC 5 MÓN ĂN ĐỘC ĐÁO">ĐẾN TÂY BẮC THƯỞNG THỨC 5 MÓN ĂN ĐỘC ĐÁO</a></h4>
                    <a href="han_book_tay_bac.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <a href="han_book_phu_quoc.php" title="Độc đáo nghề nuôi trai lấy ngọc ở Phú Quốc" class="pa1x1">
                    <img src="anh_du_lich/a3.jpg" alt="Độc đáo nghề nuôi trai lấy ngọc ở Phú Quốc">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="Độc đáo nghề nuôi trai lấy ngọc ở Phú Quốc">Độc đáo nghề nuôi trai lấy ngọc ở Phú Quốc</a></h4>
                    <a href="han_book_phu_quoc.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <a href="han_book_ha_noi.php" title="Sống ảo cạn pin vào mùa hoa cúc chi vàng rực ngay sát Hà Nội" class="pa1x1">
                    <img src="anh_du_lich/a4.jpg" alt="">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="Sống ảo cạn pin vào mùa hoa cúc chi vàng rực ngay sát Hà Nội">Mùa hoa cúc chi vàng rực ngay sát Hà Nội</a></h4>
                    <a href="han_book_ha_noi.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <a href="han_book_da_nang.php" title="Kinh nghiệm du lịch Đà Nẵng" class="pa1x1">
                    <img src="anh_du_lich/a5.jpg" alt="">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="Kinh nghiệm du lịch Đà Nẵng ">Du lịch Đà Nẵng </a></h4>
                    <a href="han_book_da_nang.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <a href="han_book_nha_trang.php" title="Kinh nghiệm du lịch Nha Trang" class="pa1x1">
                    <img src="anh_du_lich/a6.jpg" alt="">
                </a>
                <div class="content">
                    <h4><a class="title_location" href="" title="Kinh nghiệm du lịch Nha Trang ">Du lịch Nha Trang </a></h4>
                    <a href="han_book_nha_trang.php" class="btn_hb">Xem thêm</a>
                </div>
            </div>
        </div>

    </section>


<?php
require_once('layouts/footer.php');
?>