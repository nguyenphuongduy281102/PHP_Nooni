<?php
require_once '../../core/db/boot.php';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $inventory = get_all_by_products();//Lấy thông tin về hàng tồn kho.
    $delivered = get_all_order_delivered();//Lấy số lượng đơn hàng đã giao.
    $customers = get_all_users_customers();//Lấy số lượng khách hàng.
    $revenue = get_revenue();// Lấy doanh thu.
    $order_list = get_all_order();//Lấy danh sách đơn hàng.
    $order = get_all_by_orders();// Lấy các thông tin khác về đơn hàng.

    //kiểm tra quyền truy cập

    //Nếu người dùng có vai trò quản trị viên, hiển thị trang thống kê.
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
        include_once '../view/statistics/_index.php';//hiển thị trang thống kê với các dữ liệu đã lấy được.
    //Nếu không phải quản trị viên, chuyển hướng đến trang chủ.
    }else{
        header('Location: ../public/home.php');
    }
}