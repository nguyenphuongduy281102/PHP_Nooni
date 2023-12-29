<?php
require_once 'core/db/boot.php';//thiết lập kết nối cơ sở dữ liệu.
@session_start();//Bắt đầu phiên để lưu trữ thông tin người dùng.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Kiểm tra xem dữ liệu POST có chứa email và mật khẩu hay không.
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];// lấy email từ post
        $password = $_POST['password'];//lấy mật khẩu từ post
        //tìm kiếm người dùng có email tương ứng trong cơ sở dữ liệu.
        $user = get_by_email_users($email);    
        $check_login = false;
            /**Nếu tìm thấy người dùng và mật khẩu khớp:
             * Lưu thông tin người dùng vào phiên
             * 
             */
            if ($user && ($user['password'] == $password)) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['users_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                //Thiết lập $check_login thành true để đánh dấu đăng nhập thành công.
                $check_login = true;
            }
        
        //Chuyển hướng sau khi đăng nhập

        //Nếu đăng nhập thành công
        if ($check_login) {
            //Nếu có giỏ hàng và đang ở trang thanh toán chuyển hướng đến trang checkout.php
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart']) && $_SESSION['isCheck']) {
                header('Location: checkout.php');
            //Ngược lại, chuyển hướng đến trang index.php
            } else {
                header('Location: index.php');
                $error_message = '';
            }
        //Nếu đăng nhập thất bại, hiển thị thông báo lỗi và bao gồm tệp _login.php để hiển thị lại giao diện đăng nhập
        } else {
            $check_login = false;
            $error_message = 'Your account or password is incorrect! ';
            include_once './view/_login.php';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Nếu người dùng đã đăng nhập, chuyển hướng đến trang index.php
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('Location: index.php');  
    //Nếu chưa đăng nhập, hiển thị giao diện đăng nhập.
    }else { 
        include_once './view/_login.php';
    }
}