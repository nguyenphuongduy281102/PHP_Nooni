<?php
include_once 'core/db/boot.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $page;// biến lưu số trang
    /**Kiểm tra và thiết lập giá trị cho biến $page:
    Nếu có tham số page trong URL với giá trị hợp lệ, gán giá trị đó cho $page.
    Nếu tham số page có giá trị nhỏ hơn 1, gán $page là 1.
    Nếu không có tham số page hoặc giá trị không hợp lệ, gán $page là 1. */
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }elseif(isset($_GET['page']) && $_GET['page'] < 1) {
        $page = 1;
    }else {
        $page = 1;
    }
    //Gọi hàm get_products_by_page() để lấy danh sách sản phẩm theo trang hiện tại.
    $product_list = get_products_by_page($page);
    //hiển thị giao diện HTML của danh sách sản phẩm theo danh mục.
    include_once './view/_category.php';
}