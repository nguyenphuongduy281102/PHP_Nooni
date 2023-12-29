<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];//Lấy giá trị order_id từ tham số GET trong URL
    delete_order($order_id);//Gọi hàm delete_order() để xóa đơn hàng có ID tương ứng trong cơ sở dữ liệu.

    header('Location: index.php');
}