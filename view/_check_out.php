<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/img/logo/logo.png" type="image/x-icon">
</head>
</head>
<body>
    <!-- === Header === -->
    <?php include 'inc/header.php'; ?>

        <!-- CART -->
        <?php include 'inc/_cart.php'; ?>

        <!-- MENU -->
        <div class="menu-modal">
            <div class="menu-container">
                <div class="menu-content">
                    <div class="close-menu">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="menu-list">
                        <li class="item"><a href="_home.php">Home</a></li>
                        <li class="item"><a href="_category.php">Shop</a></li>
                        <li class="item"><a href="_search.php">Search products</a></li>
                        <li class="item"><a href="#">Product</a></li>
                        <li class="item"><a href="#">Blog</a></li>
                        <li class="item"><a href="#">About us</a></li>
                        <li class="item"><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SEARCH -->
        <div class="search-modal">
            <div class="search-container">
                <div class="search-content">
                    <div class="search-header">
                        <h2>Search for products (0)</h2>
                        <div class="close-search">
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="search--form">
                        <input type="text" class="search-input" placeholder="Search for products...">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- === Breadcrumb === -->
    <div class="breadcrumb-content">
        <div class="breadcrumb-title">
            <div class="breadcrumb-container">
                <a href="_home.php">Home</a>
                <span class="btn-arrow">/</span>
                <span class="current">Checkout</span>
            </div>
            <h1 class="heading-title">Checkout</h1>
        </div>
    </div>

    <!-- Content -->
    <div id="check_out-content">
        <div class="woocommerce-info">
            Returning customer?
            <a href="#">Click here to login</a>
        </div>

        <div class="woocommerce-info">
            Have a coupon?
            <a href="#">Click here to enter your code</a>
        </div>

        <form class="checkout-wrapper" action="checkout.php" method="post">
            <div class="woocommerce-billing-field">
                <h3>BILLING DETAILS</h3>
                <div class="field-name">
                    <div class="first_name">
                        <label for="first-name">First name<span>*</span></label>
                        <input name="name" type="text" id="first-name">
                    </div>

                    <div class="last_name">
                        <label for="last-name">Last name<span>*</span></label>
                        <input type="text" id="last-name">
                    </div>
                </div>

                <div class="field-company_name">
                    <div class="company_name">
                        <label for="company">Company name (optional)</label>
                        <input type="text" id="company">
                    </div>
                </div>

                <div class="field-location">
                    <div class="location">
                        <label for="place">Country / Region<span>*</span></label>
                        <input type="text" id="place" value="Vietnam">
                    </div>
                </div>

                <div class="field-street">
                    <div class="street_name">
                        <label for="house-number">Street address<span>*</span></label>
                        <input type="text" id="house-number" placeholder="House number and street name">
                        <input name="address" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                    </div>
                </div>

                <div class="field-postcode">
                    <div>
                        <label>Postcode / ZIP (optional)</label>
                        <input type="text">
                    </div>
                </div>

                <div class="field-town-city">
                    <div>
                        <label>Town / City<span>*</span></label>
                        <input type="text">
                    </div>
                </div>

                <div class="field-phone">
                    <div>
                        <label>Phone<span>*</span></label>
                        <input type="text">
                    </div>
                </div>

                <div class="field-email">
                    <div>
                        <label>Email address<span>*</span></label>
                        <input name="email" type="text">
                    </div>
                </div>

                <div class="field-account_user">
                    <div>
                        <label>Account username<span>*</span></label>
                        <input type="text" placeholder="Username">
                    </div>
                </div>

                <div class="field-password">
                    <div>
                        <label>Create account password<span>*</span></label>
                        <input type="text" placeholder="Password">
                    </div>
                </div>

                <div class="check-box">
                    <input type="checkbox" class="ship">
                    <span> Ship to a different address?</span>
                </div>

                <div class="field-note">
                    <div>
                        <label>Order notes (optional)</label>
                        <textarea name="" id="" cols="30" rows="15" placeholder="Notes about your order, e.g.special notes for delivety"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="order_review">
                <div class="container">
                    <h3 class="order_review_heading">YOUR ORDER</h3>
                    <div class="shop_table">
                        <div class="shop_table_heading">
                            <span>Product</span>
                            <span>Price</span>
                        </div>

                        <?php if (!empty($_SESSION['cart'])) { ?>
                            <?php foreach ($_SESSION['cart'] as $item) { ?>
                        <div class="shop_table_heading">
                            <span><?php echo $item['productName']; ?><span> x <?php echo $item['quantity']; ?></span></span>
                            <span>$<?php echo $item['productPrice']; ?></span>
                        </div>
                        <?php } ?>
                        <?php } ?>

                        <div class="shop_table_heading">
                            <span>Subtotal</span>
                            <span>$<?php echo total_cart(); ?></span>
                        </div>
    
                        <div class="shop_table_heading">
                            <span>Shipping</span>
                            <span><input type="checkbox"> Flat rate: $10</span>
                        </div>
    
                        <div class="icon">
                            <i class='bx bxs-package'></i>
                            <span>Calculate shipping</span>
                        </div>
    
                        <div class="total">
                            <span>Total</span>
                            <span>$<?php echo total_cart(); ?></span>
                        </div>
    
                        <div class="btn-action">
                            <button>PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

    <script src="./public/javascript/main.js"></script>
</body>
</html>