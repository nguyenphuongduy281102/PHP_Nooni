<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Tạo mảng $products_id: Lấy thông tin sản phẩm từ dữ liệu POST
    $products_id = array(
        "id" => $_POST['id'],
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
    );

    update_products($products_id);//cập nhật dữ liệu sản phẩm trong cơ sở dữ liệu.

    header('Location: index.php');

}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['product_id'];//Lấy giá trị product_id từ tham số GET trong URL
    $product = get_products($product_id);//Gọi hàm get_products() để lấy thông tin sản phẩm có ID tương ứng từ cơ sở dữ liệu.

    include_once '../view/products/_edit.php';
}