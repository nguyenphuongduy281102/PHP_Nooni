<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_list = get_all_order();//Gọi hàm get_all_order() để lấy danh sách tất cả đơn hàng từ cơ sở dữ liệu.
    include_once '../view/orders/_index.php';
}