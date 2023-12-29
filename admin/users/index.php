<?php
require_once '../../core/db/boot.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_list = get_all_users();//Gọi hàm get_all_users() để lấy danh sách tất cả người dùng từ cơ sở dữ liệu.

    include_once '../view/users/_index.php';//hiển thị danh sách người dùng cho người dùng.
}