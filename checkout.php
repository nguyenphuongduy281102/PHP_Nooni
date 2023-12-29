<?php
require_once 'core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['name'])) {
        //lấy email từ phiên người dùng và tìm kiếm người dùng trong cơ sở dữ liệu dựa vào email.
        $email = $_SESSION['email'];
        $user = get_by_email_users($email);
        /**Nếu tìm thấy người dùng, lấy ID người dùng từ kết quả tìm kiếm.
        Tạo một mảng orders chứa thông tin đơn hàng (mã đơn hàng, trạng thái, ID người dùng).
        Lưu mã đơn hàng vào phiên.
        Chèn đơn hàng vào cơ sở dữ liệu. */
        if ($user) {
            $id = $user['id'];
            $orders = array(
                'code' => string_random(5),
                'status' => 'pending',
                'users_id' => $id,
            );
            $_SESSION['order'] = $orders['code'];
            insert_orders($orders);
            
            //lấy ID của đơn hàng vừa được chèn vào cơ sở dữ liệu.
            $orderId = get_last_inserted_order_id();

            /**duyệt từng sản phẩm trong giỏ hàng và thực hiện các bước sau:
            Tạo một mảng orderItems chứa thông tin chi tiết đơn hàng (ID đơn hàng, ID sản phẩm, số lượng, giá).
            Chèn chi tiết đơn hàng vào cơ sở dữ liệu. */
            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                $orderItems = array(
                    "orders_id" => $orderId,
                    "products_id" => $cart[$i]['productId'],
                    "quantity" => $cart[$i]['quantity'],
                    "price" => $cart[$i]['productPrice'] *  $cart[$i]['quantity'],
                );
                insert_order_items($orderItems);
            }
            //xóa giỏ hàng khỏi phiên và chuyển hướng người dùng đến trang order.php
            unset($_SESSION['cart']);
            header('location: order.php');
            //chuyển hướng người dùng đến trang login.php nếu người dùng không tồn tại trong cơ sở dữ liệu.
        }else{
            header('location: login.php');
        }
    }
}
// kiểm tra đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $_SESSION['isCheck'] = false;

    if (isset($_SESSION['email'])) {
        include_once './view/_check_out.php'; 
    }else { 
        $_SESSION['isCheck'] = true;
        include_once './view/_login.php';
    }   

}

function string_random($len = 10){
    $keys = array_merge(range(0,9), range('0', '9'));

    $key = "";
    for($i=0; $i < $len; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

function get_last_inserted_order_id() {
    global $pdo; // Biến PDO cần được khai báo ở đây, thay thế bằng biến PDO của bạn
    return $pdo->lastInsertId();
}