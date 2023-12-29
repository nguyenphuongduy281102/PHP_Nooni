<?php
require_once 'core/db/boot.php';

unset($_SESSION['email']);//Xóa email người dùng khỏi phiên.
unset($_SESSION['password']);//Xóa mật khẩu người dùng khỏi phiên.
unset($_SESSION['cart']);//Xóa giỏ hàng khỏi phiên, nếu có.
unset($_SESSION['role']);//Xóa vai trò người dùng khỏi phiên.
header('Location: index.php');//Chuyển hướng người dùng đến trang index.php sau khi đăng xuất.
