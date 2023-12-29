<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $createProduct: Lấy thông tin sản phẩm từ dữ liệu POST
    $createProduct = array(
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
        "category_id" => $_POST["category_id"]
    );
    insert_products($createProduct);//chèn dữ liệu sản phẩm mới vào cơ sở dữ liệu.

    header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi tạo sản phẩm thành công.
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/products/_create.php';//hiển thị giao diện tạo sản phẩm cho người dùng.
}