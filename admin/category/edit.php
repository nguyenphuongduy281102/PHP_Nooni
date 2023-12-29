<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateCategory = array(
        "id" => $_POST['id'],
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST['description'],
    );

    update_category($updateCategory);//cập nhật dữ liệu danh mục trong cơ sở dữ liệu.
    
    header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi cập nhật danh mục thành công.

}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $category_id = $_GET['category_id'];//Lấy giá trị category_id từ tham số GET trong URL
    $category = get_category($category_id);//để lấy thông tin danh mục có ID tương ứng từ cơ sở dữ liệu.

    include_once '../view/category/_edit.php';
}