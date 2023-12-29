<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_list = get_all_products();//Gọi hàm get_all_products()  để lấy danh sách tất cả sản phẩm từ cơ sở dữ liệu.
    include_once '../view/products/_index.php';
}