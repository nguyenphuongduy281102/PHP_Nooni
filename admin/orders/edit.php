<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $updateOrder: Lấy thông tin đơn hàng từ dữ liệu POST
    $updateOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        "users_id" => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
    );

    update_order($updateOrder);//cập nhật dữ liệu đơn hàng trong cơ sở dữ liệu.

    header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi cập nhật đơn hàng thành công.
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];//Lấy giá trị order_id từ tham số GET trong URL
    $order = get_order($order_id);//Gọi hàm get_order() để lấy thông tin đơn hàng có ID tương ứng từ cơ sở dữ liệu.

    include_once '../view/orders/_edit.php';
}