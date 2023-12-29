<?php
include_once 'core/db/boot.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
            case 'delete':delete();
                break;
            case 'create':create();
                break;
            case 'update':update_to_cart($_POST['productId'], $_POST['value']);
                break;
        }
    }
    header('location: index.php'); 
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_list = get_all_products();
    /**Kiểm tra xem giỏ hàng đã được lưu trong phiên người dùng chưa.
    Nếu tồn tại, lấy nó từ phiên: $cart = $_SESSION['cart'];
    Nếu chưa tồn tại, tạo một mảng trống: $cart = array(); */
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = array();
    }
    // hiển thị giao diện trang chủ
    include_once './view/_home.php';
}