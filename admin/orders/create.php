<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $createOrder: Lấy thông tin đơn hàng từ dữ liệu POST
    $createOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        'users_id' => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        'date' => date('Y-m-d H:i:s'),
    );
    insert_order($createOrder);//chèn dữ liệu đơn hàng mới vào cơ sở dữ liệu.

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/orders/_create.php';
}