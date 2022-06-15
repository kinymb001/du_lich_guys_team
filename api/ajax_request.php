<?php
session_start();
require_once('../utils/utility.php');
require_once('../database/dbhelper.php');

$action = getPost('action');

switch ($action) {
	case 'cart':
		addToCart();
		break;
	case 'update_cart':
		updateCart();
		break;
	case 'checkout':
		checkout();
		break;
}

function checkout() {
	if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
		return;
	}
	
	$fullname = getPost("fullname");
	$email = getPost("email");
	$phone_number = getPost("phone_number");
	$address = getPost("address");
	$note = getPost("note");
	

	$user = getUserToken();
	$userId = 0;
	if($user != null) {
		$userId = $user['id'];
	}
	$orderDate = $ngayKhoiHanh =date("Y-m-d");
	
	$totalMoney = 0;
	foreach($_SESSION['cart'] as $item) {
		$totalMoney += $item['discount'] * $item['num'];
		$ngayKhoiHanh = $item['ngay_khoi_hanh'];
	}
	
	$sql = "insert into Orders(user_id, fullname, email, phone_number, address, ngay_khoi_hanh, note, order_date, status, total_money) values ($userId, '$fullname', '$email', '$phone_number', '$address','$ngayKhoiHanh', '$note', '$orderDate', 0, '$totalMoney')";
	//var_dump($sql);die;
	execute($sql);

	$sql = "select * from Orders where order_date = '$orderDate'";
	$orderItem = executeResult($sql, true);

	$orderId = $orderItem['id'];
	

	foreach($_SESSION['cart'] as $item) {
		$product_id = $item['id'];
		$price = $item['discount'];
		$num = $item['num'];
		$totalMoney = $price * $num;

		$sql = "insert into Order_Details(order_id, product_id, price, num, total_money) values ($orderId, $product_id, $price, $num, $totalMoney)";
		execute($sql);
	}
	
	unset($_SESSION['cart']);
}

function updateCart() {
	$id = getPost('id');
	$num = getPost('num');
	$ngay_khoi_hanh = getPost('ngay_khoi_hanh');

	if(!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = [];
	}

	for($i=0;$i<count($_SESSION['cart']);$i++) {
		if($_SESSION['cart'][$i]['id'] == $id) {
			$_SESSION['cart'][$i]['num'] = $num;
			$_SESSION['cart'][$i]['ngay_khoi_hanh'] = $ngay_khoi_hanh;
			if($num <= 0) {
				array_splice($_SESSION['cart'], $i, 1);
			}
			break;
		}
	}
}

function addToCart() {
	$id = getPost('id');
	$num = getPost('num');
	$ngay_khoi_hanh = getPost('ngay_khoi_hanh');


	if(!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = [];
	}
	$isFind = false;
	for($i=0;$i<count($_SESSION['cart']);$i++) {
		if($_SESSION['cart'][$i]['id'] == $id) {
			$_SESSION['cart'][$i]['num'] += $num;
			$_SESSION['cart'][$i]['ngay_khoi_hanh'] = $ngay_khoi_hanh;
			$isFind = true;
			break;
		}
	}

	if(!$isFind) {
		$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.id = $id";
		$product = executeResult($sql, true);
		$product['num'] = $num;
		$product['ngay_khoi_hanh'] = $ngay_khoi_hanh;
	
		
		$_SESSION['cart'][] = $product;
	}
	
	
}