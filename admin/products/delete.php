<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['product_id'];//Lấy giá trị product_id từ tham số GET trong URL
    delete_products($product_id);//Gọi hàm delete_products() để xóa sản phẩm có ID tương ứng trong cơ sở dữ liệu.

    header('Location: index.php');
}