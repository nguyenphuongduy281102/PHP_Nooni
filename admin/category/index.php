<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Gọi hàm get_all_categories() để lấy danh sách tất cả danh mục từ cơ sở dữ liệu.
    $category_list = get_all_categories();
    include_once '../view/category/_index.php';
}