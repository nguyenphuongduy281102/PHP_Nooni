<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/img/logo/logo.png" type="image/x-icon">
</head>
<body>
    <!-- === Header === -->
    <?php include 'inc/header.php'; ?>

        <!-- CART -->
        <div class="cart-modal">
            <div class="cart-container">
                <div class="cart-content">
                    <div class="close-cart">
                        <i class='bx bx-x'></i>
                    </div>

                    <div class="cart-item">
                        <div class="img-product"><img src="./public/img/products/chair/chair-2.jpg" alt=""></div>
                        <div class="info">
                            <div class="name-product">Wood Outdoor Adirondack Chair - Black</div>
                            <div class="quantity-product">
                                <input type="button" value="-" class="minus">
                                <span class="quantity">1</span>
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="price-product">$1,009</div>
                        </div>
                        <div class="remove-item"><i class='bx bx-trash'></i></div>
                    </div>

                    <div class="total">
                        <span>Subtotal</span>
                        <span>$1,009</span>
                    </div>

                    <div class="btn-cart">
                        <button class="btn-view-cart"><a href="_cart.php">VIEW CART</a></button>
                        <button class="btn-checkout"><a href="_check_out.php">CHECKOUT</a></button>
                    </div>
                </div>
            </div>
        </div>

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
                <span class="current">Categories</span>
            </div>
            <h1 class="heading-title">Categories</h1>
        </div>
    </div>

    <!-- === Content === -->
    <div id="categories-container">
        <!-- Section shop by category -->
        <div id="category" class="category">
            <div class="container">
                <div class="item">
                    <div class="category-img"><img src="./public/img/chair-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Chair</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/table-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Table</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/lamp-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Lamp</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/bed-310x310.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Bed</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container">
            <div id="left-sidebar" class="ts-sidebar">
                <div class="widget-title-wrapper">
                    <h3>Type</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Bed(7)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Bedroom Furniture(18)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Cabinet(5)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Chair(12)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Dining & Kitchen(25)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Home Office(23)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Lamp(7)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Living Room(24)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                New & Now(33)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Outdoor Lounge(23)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Sofa(8)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Table(5)
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget-title-wrapper">
                    <h3>Color</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Beige (12)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Black (5)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Blue (3)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Brown (6)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Chacoal (6)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Gold (3)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Green (8)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Pink (2)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Slate Grey (5)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Teak (9)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                White (6)
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget-title-wrapper">
                    <h3>Price</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                $500 & Under
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                $500 - $999
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                $1,000 - $1,999
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                $2,000 - $5,000
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                $5000 & Over
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget-title-wrapper">
                    <h3>Material</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Concrete (3)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Fleece (2)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Glass (6)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Leather (3)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Marble (4)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Metal (15)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Velvet (9)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Wood (22)
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget-title-wrapper">
                    <h3>Size</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                1-Seat (1)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                2-Seats (1)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                3-Seats (1)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Euro Sham (11)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                King (7)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                One Size (4)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Queen (5)
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget-title-wrapper">
                    <h3>Patterns & Textures</h3>
                </div>
                <div class="ts-product-categories-widget-wrapper">
                    <ul>
                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Abstract (3)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Floral (2)  
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Geometric (5)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Patterned (6)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Solid (20)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Textured (11)
                            </a>
                        </li>

                        <li class="cat-item">
                            <a href="#">
                                <input type="checkbox">
                                Whimsical (10)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="primary" class="site-content">
                <div class="before-loop-wrapper">
                    <div class="gridlist-toggle">
                        <span class="list"><i class='bx bx-server'></i></span>
                        <span class="grid active"><i class='bx bx-grid-alt'></i></span>
                    </div>

                    <div class="cat-filter">
                        <div class="show-products">
                            <input type="checkbox">
                            <span>Show only products on sale</span>
                        </div>

                        <div class="sort">
                            Sort by latest
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                </div>

                <div class="products">
                    <?php foreach($product_list as $product) { ?>
                        <div class="item">
                            <div class="img-product">
                                <img src="./public/img/<?php echo $product['image']; ?>.jpg" alt="image">
                                <div class="quick-view"><i class='bx bx-search'></i></div>
                                <div class="compare"><i class='bx bx-git-compare'></i></div>
                                <div class="wishlist"><i class='bx bx-heart'></i></div>
                                <button class="btn-product">SELECT OPTION</button>
                            </div>
                            <div class="info-product">
                                <a class="name" href="#"><?php echo $product['name']; ?></a>
                                <span class="price">$<?php echo $product['price']; ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <ul class="page-numbers">
                    <?php for($i = 1; $i <= 3; $i++) { ?>
                        <?php echo '<li><a href="categories.php?page='.$i.'">'.$i.'</a></li>' ?>
                    <?php } ?>
                    
                    <li><a href="#"><i class='bx bx-chevrons-right'></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

</body>
<script>

    // OPEN AND CLOSE CART
const cartOpen = document.querySelector('.cart-icon');
const cartModal = document.querySelector('.cart-modal');
const closeCart = document.querySelector('.close-cart');
const cart = document.querySelector('.cart-container');

function showCartModal() {
    cartModal.classList.add('open');
}

function closeCartModal() {
    cartModal.classList.remove('open');
}

cartOpen.addEventListener('click', showCartModal);
closeCart.addEventListener('click', closeCartModal);
cartModal.addEventListener('click', closeCartModal);
cart.addEventListener('click', function(event) {
    event.stopPropagation();
});


// OPEN AND CLOSE MENU
const menuOpen = document.querySelector('.menu-icon');
const menuModal = document.querySelector('.menu-modal');
const closeMenu = document.querySelector('.close-menu');
const menu = document.querySelector('.menu-container');

function showMenuModal() {
    menuModal.classList.add('open');
}

function closeMenuModal() {
    menuModal.classList.remove('open');
}

menuOpen.addEventListener('click', showMenuModal);
closeMenu.addEventListener('click', closeMenuModal);
menuModal.addEventListener('click', closeMenuModal);
menu.addEventListener('click', function(event) {
    event.stopPropagation();
});



// OPEN AND CLOSE SEARCH
const searchOpen = document.querySelector('.search-icon');
const searchModal = document.querySelector('.search-modal');
const closeSearch = document.querySelector('.close-search');
const search = document.querySelector('.search-container');

function showSearchModal() {
    searchModal.classList.add('open');
}

function closeSearchModal() {
    searchModal.classList.remove('open');
}

searchOpen.addEventListener('click', showSearchModal);
closeSearch.addEventListener('click', closeSearchModal);
searchModal.addEventListener('click', closeSearchModal);
search.addEventListener('click', function(event) {
    event.stopPropagation();
});


    /* button scroll to top design */
    let toTop = document.getElementById('toTop');
    toTop.style.display = 'none';
    window.addEventListener('scroll', () => {
        if(this.scrollY > 200){
            toTop.style.display = 'block';
        }else{
            toTop.style.display = 'none';
        }
    })
    toTop.onclick = function(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>
</html>