<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/img/logo/logo.png" type="image/x-icon">
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
                <span class="current">Products detail</span>
            </div>
        </div>
    </div>

    <!-- === Content === -->
    <?php foreach ($productList as $product) { ?>
        <?php if ($product['id'] == $_GET["id"]) { ?>
            <div id="detail-container">
                <div class="img_products">
                    <div class="image" id="product-image">
                        <img src="./public/img/<?php echo $product['image']; ?>.jpg" alt="">
                    </div>
                </div>
                <div class="products_detail">
                    <h1 class="products_title" id="product-name">Wood Outdoor Adirondack Chair</h1>
                    <div class="products_rating">
                        <div class="star-rating">
                            <span>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                            <i class='bx bx-star'></i>
                        </div>
                        <span class="review-count">(3)</span>
                        <span class="lable">Stock: </span>
                        <span class="availability-text">In stock</span>
                    </div>
                    <div class="countdown"></div>
                    <div class="products_price">
                        <span class="price" id="product-price">$1,009</span>
                        <span class="old-price" id="price_old">$1,259</span>
                    </div>
                    <p class="description">
                        Aliquam condimentum dictum gravida.
                        Sed eu odio id lorem fermentum faucibus.
                        Cras tempor semper ligula.
                    </p>
                    <div class="products_attribute">
                        <h3 class="title">Color :</h3>
                        <div class="attribute">
                            <div class="option-color">
                                <img src="./public/img/black.jpg" alt="">
                            </div>
                            <div class="option-color">
                                <img src="./public/img/green.jpg" alt="">
                            </div>
                            <div class="option-color">
                                <img src="./public/img/grey.jpg" alt="">
                            </div>
                            <div class="option-color">
                                <img src="./public/img/teak.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="_method" value="create">
                        <div class="quantity button-cart">
                            <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                            <input type="hidden" name="productName" value="<?php echo $product['name']; ?>">
                            <input type="hidden" name="productImage" value="<?php echo $product['image']; ?>.jpg">
                            <input type="hidden" name="productPrice" value="<?php echo $product['price']; ?>">
                            <div class="btn-quantity">
                                <input type="button" value="-">
                                <input name="quantity" type="text" value="1">
                                <input type="button" value="+">
                            </div>
                            <div class="btn-add-cart">
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </form>
                    <button class="btn-buy-products">Buy now</button>
                    <div class="sigle-products-button">
                        <span>
                            <i class='bx bx-heart'></i>
                            Add to wishlist
                        </span>

                        <span>
                            <i class='bx bx-git-compare'></i>
                            Compare
                        </span>

                        <div class="social">
                            <i class='bx bxl-facebook'></i>
                            <i class='bx bxl-twitter'></i>
                            <i class='bx bxl-pinterest'></i>
                        </div>
                    </div>
                    <div class="meta-content">
                        <div class="sku-wrapper">
                            <span>SKU: </span>
                            <span class="sku">0093</span>
                        </div>
                        <div class="product-brands">
                            <span>BRANDS: </span>
                            <span class="brand-links"><a href="#">Creative Design</a></span>
                        </div>
                        <div class="tags-link">
                            <span>TAGS: </span>
                            <a href="#">Furniture,</a>
                            <a href="#"> Trending,</a>
                            <a href="#">Wood</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

    <div class="detail-tabs">
        <div class="tab active"><a href="#">Dimensions</a></div>
        <div class="tab"><a href="#">Details</a></div>
        <div class="tab"><a href="#">Delivery & Return</a></div>
        <div class="tab"><a href="#">Review (3)</a></div>
    </div>

    <div class="tap-des">
        <div class="left">
            <ul>
                <li><span>OVERALL: 64.5" w x 38.5" d x 35" h</span></li>
                <li><span>INSIDE SEATING: 50.5" w x 22" d x 19.5" h</span></li>
                <li><span>ARM: 7" w x 38.5" d x 22.5" h</span></li>
                <li><span>LEGS: 5.5" w x 2" d x 2" h</span></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <li><span>SEAT HEIGHT: 19.5"</span></li>
                <li><span>BACK FRAME: 30"</span></li>
                <li><span>DIAGONAL DEPTH: 29.5"</span></li>
                <li><span>WEIGHT: 121 lbs</span></li>
            </ul>
        </div>
    </div>

    <div id="cart-products">
        <div class="title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <!-- Products -->
        <div id="product-home" class="product-home">
            <div class="product-home__container">

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/cabinet-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Solid Wood Bar Storage Cabinet</a>
                        <span class="price">$1,899</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/bed-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Solid Wood Bed With Fabric Headboard</a>
                        <span class="price">$3,707 - $5,707</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/lamp3.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Floor Lamp With Polyester Shade</a>
                        <span class="price">$399</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/chair-4.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Garden Chair With Armrests</a>
                        <span class="price">$1,009</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

    <script src="./public/javascript/detail.js"></script>
</body>

</html>