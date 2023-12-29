<?php
require_once 'core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $is_register_success = true;

    /**Kiểm tra dữ liệu POST:
    Kiểm tra xem email, mật khẩu và xác nhận mật khẩu được gửi trong dữ liệu POST hay không.
    Đảm bảo các trường này không rỗng sau khi loại bỏ dấu cách thừa.
    Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp hay không. */
    if(isset($_POST['email']) && !empty(trim($_POST['email'])) 
    && isset($_POST['password']) && !empty(trim($_POST['password'])) 
    && isset($_POST['cpassword']) && !empty(trim($_POST['cpassword']))
    && $_POST['password'] == $_POST['cpassword']){
        //Gọi hàm register($_POST['email'], $_POST['password']); để tạo tài khoản người dùng mới trong cơ sở dữ liệu
        $user = register($_POST['email'], $_POST['password']);
        /**Nếu đăng ký thành công:
        Lưu thông tin người dùng vào phiên ($_SESSION['user']).
        Chuyển hướng người dùng đến trang login.php để đăng nhập. */
        if($user == false){
            $_SESSION['flash_message'] = 'User already exist!';
            $is_register_success = false;
        /**Nếu đăng ký thất bại (ví dụ, do email đã tồn tại):
        Lưu thông báo lỗi vào phiên ($_SESSION['flash_message']).
        Chuyển hướng người dùng đến lại trang register.php để thử lại. */
        }else{
            $_SESSION['user'] = $user;
            $is_register_success = true;
        }
    /**Nếu dữ liệu không hợp lệ:
    Lưu thông báo lỗi vào phiên ($_SESSION['flash_message']).
    Chuyển hướng người dùng đến lại trang register.php để sửa lại thông tin. */
    }else{
        $_SESSION['flash_message'] = 'Register failed';
        $is_register_success = false;
    }
      
    if($is_register_success){
        header('Location: login.php');
    }else{
        header('Location: register.php');
    }
}
//Nếu phương thức yêu cầu là GET, hiển thị giao diện đăng ký cho người dùng.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once './view/_register.php';
}