<?php
include_once 'core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
            //Gọi hàm delete() để xóa một mục khỏi giỏ hàng.
            case 'delete':delete();
                break;
            //Gọi hàm create() để thêm một mục mới vào giỏ hàng.
            case 'create':create();
                break;
            //Gọi hàm update_to_cart() để cập nhật số lượng của một mục trong giỏ hàng, sử dụng productId và value từ dữ liệu POST.
            case 'update':update_to_cart($_POST['productId'], $_POST['value']);
                break;
        }
    }
    //Chuyển hướng đến trang cart.php
    header('location: cart.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     /**1Kiểm tra xem giỏ hàng đã được lưu trong phiên người dùng chưa.
      * 2Nếu giỏ hàng tồn tại, lấy nó từ phiên.
      3Nếu giỏ hàng chưa tồn tại, tạo một mảng trống để chứa giỏ hàng.
     
     */
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }
    //hiển thị giao diện của giỏ hàng.
    include_once 'view/_cart.php';
    
}