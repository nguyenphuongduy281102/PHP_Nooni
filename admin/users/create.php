<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $createUser: Lấy thông tin người dùng từ dữ liệu POST
    $createUser = array(
        "id" => $_POST['id'],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "role" => $_POST["role"],
    );
    insert_users($createUser);//chèn dữ liệu người dùng mới vào cơ sở dữ liệu.

    header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi tạo người dùng thành công.
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/users/_create.php';//hiển thị giao diện tạo người dùng cho người dùng.
}