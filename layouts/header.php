<?php
	session_start();
	require_once('utils/utility.php');
	require_once('database/dbhelper.php');

	$sql = "select * from Category";
	$menuItems = executeResult($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Chủ - Du Lịch GUYs Team</title>
	<link rel="shortcut icon" href="anh_du_lich/logo.png">


	 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<style type="text/css">
		:root{
 		 --orange:#ffa500;
		}
		.nav li {
			text-transform: uppercase;
			color: lightgray;
			margin-top: 20px;
		}
		.nav li a {
			color: #ffa500;
			font-weight: bold;
		}

		.carousel-inner img {
			height: 550px;
			width: 100%;
		}

		.product-item:hover {
			background-color: #f5f6f7;
			cursor: pointer;
			margin-bottom: 10px;
		}

		footer {
			padding-top: 20px;
		}

		footer ul {
			list-style-type: none;
			padding: 0px;
			margin: 0px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.cart_icon {
			position: fixed;
			z-index: 999999;
			right: 0px;
			top: 45%;
		}

		.cart_icon img {
			width: 45px;
		}
		
		

		.cart_icon .cart_count {
			background-color: red;
			color: white;
			font-size: 16px;
			padding-top: 2px;
			padding-bottom: 2px;
			padding-left: 10px;
			padding-right: 10px;
			font-weight: bold;
			border-radius: 12px;
			position: fixed;
			right: 40px;
		}
			.packages .box-container {
				display: flex;
				flex-wrap: wrap;
				gap: 2rem;
			}

			.packages .box-container .box {
				flex: 1 1 30rem;
				border-radius: .5rem;
				overflow: hidden;
				box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
			}

			.packages .box-container .box img {
				height: 25rem;
				width: 100%;
				object-fit: cover;
			}

			.packages .box-container .box .content {
				padding: 2rem;
			}

			.packages .box-container .box .content h5 {
				font-size: 2rem;
				color: #333;
			}

			.packages .box-container .box .content h5 i {
				color: var(--orange);
			}

			.packages .box-container .box .content .stars i {
				font-size: 1.7rem;
				color: var(--orange);
			}

			.packages .box-container .box .content .price {
				font-size: 2rem;
				color: #333;
				padding-top: 1rem;
			}

			.packages .box-container .box .content .price span {
				color: #666;
				font-size: 1.5rem;
				text-decoration: line-through;
			}

			*::selection{
			background:var(--orange);
			color:#fff;
			}


			section{
			padding:2rem 9%;
			}

			.heading{
			text-align: center;
			padding:2.5rem 0
			}

			.heading span{
			font-size: 3rem;
			background:rgba(255, 165, 0,.2);
			color:var(--orange);
			border-radius: .5rem;
			padding:.2rem 1rem;
			}

			.heading span.space{
			background:none;
			}

			.btn_hb{
			display: inline-block;
			margin-top: 1rem;
			background:var(--orange);
			color:#fff;
			padding:.2rem 1rem;
			border:.2rem solid var(--orange);
			cursor: pointer;
			font-size: 1.8rem;
			}

			.btn_hb:hover{
			background:rgba(255, 165, 0,.2);
			color:var(--orange);
			}


			.services .box-container{
			display: flex;
			flex-wrap: wrap;
			gap:1rem;
			}

			.services .box-container .box{
			flex: 1 1 15rem;
			border-radius: .5rem;
			padding:1rem;
			text-align: center;
			}

			.services .box-container .box i{
			padding:1rem;
			font-size: 3.5rem;
			color:var(--orange);
			}

			.services .box-container .box h3{
			font-size: 2rem;
			color:#333;
			}

			.services .box-container .box p{
			font-size: 1.5rem;
			color:#666;
			padding:1rem 0;
			}

			.services .box-container .box:hover{
			box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
			}

			.gallery .box-container{
			display: flex;
			flex-wrap: wrap;
			gap:1.5rem;
			}

			.gallery .box-container .box{
			overflow: hidden;
			box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
			border:1rem solid #fff;
			border-radius: .5rem;
			flex:1 1 20rem;
			height: 20rem;
			position: relative;
			}

			.gallery .box-container .box img{
			height: 100%;
			width:100%;
			object-fit: cover;
			}

			.gallery .box-container .box .content{
			position: absolute;
			top:-100%; left:0;
			height: 100%;
			width:100%;
			text-align: center;
			background:rgba(0,0,0,.7);
			padding:2rem;
			padding-top: 5rem;
			}

			.gallery .box-container .box:hover .content{
			top:0;
			}

			.gallery .box-container .box .content h3{
			font-size: 2.5rem;
			color:var(--orange);
			}

			.gallery .box-container .box .content p{
			font-size: 1.5rem;
			color:#eee;
			padding:.5rem 0;
			}


	</style>
</head>
<body>
<!-- Menu START -->
<div class="container">
	<ul class="nav">
		<li class="nav-item" style="margin-top: 0px !important;">
			<a href="index.php"><img src="anh_du_lich/logo.png" style="height: 80px;"></a>
		</li>
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Trang Chủ</a>
	  </li>
	  <?php
	  	foreach($menuItems as $item) {
	  		echo '<li class="nav-item">
				    <a class="nav-link" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
				  </li>';
	  	}
	  ?>
		
	   
	  <li class="nav-item">
	     <a href="#services" class="nav-link">Dịch Vụ</a>
	  </li>	 
	  <li class="nav-item">
	    <a  href="#gallery" class="nav-link">Cẩm Nang Du Lịch</a></a>
	  </li>	  
	  <li class="nav-item">
	    <a class="nav-link" href="contact.php">Liên Hệ</a>
	  </li>
	</ul>
</div>
<!-- Menu Stop -->