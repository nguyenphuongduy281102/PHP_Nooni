<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./assets/img/logo/logo.png" type="image/x-icon">
</head>

<body>
    <!-- === Header === -->
    <header id="header" class="ts-header has-sticky">
        <div class="header-container">
            <div class="header-template">
                <div class="header-top">
                    <div class="header-top-left">
                        <div class="title">UP TO 40% OFF BEST-SELLING FURNITURE.SHOP NOW</div>
                    </div>

                    <div class="header-top-right">
                        <div class="languages">
                            <a href="#">ENGLISH<i class='bx bx-chevron-down'></i></a>
                        </div>
                        <div class="currency"><a href="#">USD<i class='bx bx-chevron-down'></i></a></div>
                    </div>
                </div>

                <div class="header-bottom">
                    <div class="container">
                        <div class="item header-b-left">
                            <div class="header-b-left__menu menu-icon">
                                <a href="#"><i class='bx bx-menu'></i></a>
                            </div>

                            <div class="header-b-left__search search-icon">
                                <a href="#"><i class='bx bx-search'></i></a>
                            </div>
                        </div>

                        <div class="item header-b-center">
                            <div class="logo"><a href="index.php"><img src="./public/img/logo.png" alt="logo"></a></div>
                        </div>

                        <div class="item header-b-right">
                            <div class="header-b-right__item user-icon" style="z-index: 100;">
                                <div class="icon"><i class='bx bx-user'></i></div>
                                <div class="header-b__login">
                                    <div class="input-signin">
                                        <input type="text" placeholder="Username or email adress*">
                                        <input type="text" placeholder="Password*">
                                    </div>

                                    <div class="action">
                                        <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == "user") { ?>
                                            <button class="btn-signin"><a href="logout.php">LOG OUT</a></button>
                                        <?php }else if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == "admin"){ ?>
                                            <button class="btn-signin"><a href="logout.php">LOG OUT</a></button>
                                            <button class="btn-signin"><a href="admin/index.php">ADMIN</a></button>
                                        <?php }else { ?>
                                            <button class="btn-signin"><a href="login.php">SIGN IN</a></button>
                                            <button class="btn-signin"><a href="register.php">REGISTER</a></button>
                                        <?php } ?>
                                        <div class="action__right">
                                            <input type="checkbox">
                                            <span>REMEMBER ME</span>
                                        </div>
                                    </div>
                                    <div class="create-account"><a href="register.php">Don't have an acount?</a></div>
                                </div>
                            </div>

                            <div class="header-b-right__item wishlist-icon">
                                <div class="icon"><i class='bx bx-heart'></i></div>
                                <div class="quantity">0</div>
                            </div>

                            <div class="header-b-right__item cart-icon">
                                <div class="icon">
                                    <a href="#"><i class='bx bx-cart'></i></a>
                                    
                                </div>
                                <div class="quantity">
                                    <?php if (!empty($_SESSION['cart'])) { ?>
                                        <?php echo number_cart_product(); ?>
                                    <?php } else { ?>
                                        <?php echo '0' ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>