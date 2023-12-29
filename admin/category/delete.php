<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Lấy giá trị category_id từ tham số GET trong URL
    $category_id = $_GET['category_id'];
    //xóa danh mục có ID tương ứng trong cơ sở dữ liệu.
    delete_category($category_id);
    //Chuyển hướng người dùng đến trang index.php sau khi xóa danh mục thành công.
    header('Location: index.php');
}