<!-- CART -->
<?php if (!empty($_SESSION['cart'])) { ?>
    <div class="cart-modal">
        <div class="cart-container" style="overflow: hidden;">
            <div class="cart-content" style="overflow: hidden;">
                <div class="close-cart">
                    <i class='bx bx-x'></i>
                </div>

                <?php foreach ($_SESSION['cart'] as $item) { ?>
                    <div class="cart-item">
                        <div class="img-product"><img src="./public/img/<?php echo $item['productImage']; ?>" alt=""></div>
                        <div class="info">
                            <div class="name-product">Wood Outdoor Adirondack Chair - Black</div>
                            <div class="quantity-product">
                                <input type="button" value="-" class="minus">
                                <span class="quantity">1</span>
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="price-product">$1,009</div>
                        </div>

                        <form action="index.php" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                            <div class="remove-item"><button><i class='bx bx-trash'></i></button></div>
                        </form>
                    </div>
                <?php } ?>

                <div class="total">
                    <span>Subtotal</span>
                    <span>$1,009</span>
                </div>
                <div class="btn-cart">
                    <button class="btn-view-cart"><a href="cart.php">VIEW CART</a></button>
                    <button class="btn-checkout"><a href="checkout.php">CHECKOUT</a></button>
                    
                </div>

            </div>
        </div>
    </div>
<?php } ?>