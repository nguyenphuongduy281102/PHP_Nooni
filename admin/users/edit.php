<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $updateUser: Lấy thông tin người dùng từ dữ liệu POST
    $updateUser = array(
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "phone" => $_POST['phone'],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "role" => $_POST["role"],
    );

    update_users($updateUser);//cập nhật dữ liệu người dùng trong cơ sở dữ liệu.

    header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi cập nhật người dùng thành công.

}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = $_GET['user_id'];//Lấy giá trị user_id từ tham số GET trong URL
    $user = get_user($user_id);//Gọi hàm get_user() để lấy thông tin người dùng có ID tương ứng từ cơ sở dữ liệu.

    include_once '../view/users/_edit.php';
}