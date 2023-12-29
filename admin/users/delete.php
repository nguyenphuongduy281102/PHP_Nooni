<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = $_GET['user_id'];//Lấy giá trị user_id từ tham số GET trong URL
    delete_users($user_id);//Gọi hàm delete_users() để xóa người dùng có ID tương ứng trong cơ sở dữ liệu.
    //Chuyển hướng người dùng đến trang index.php sau khi xóa người dùng thành công.
    header('Location: index.php');
}