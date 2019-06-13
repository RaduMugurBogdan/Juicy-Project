<div class="listOfDiscountItems">
<<<<<<< Updated upstream
    <?php
    require_once '../controllers/ShopController.php';
    $Shop = new ShopController();
    $items = $Shop->getItems($_SESSION['category'], $_SESSION['brand'], $_SESSION['sizePack']);
    if ($items !== false) {
        foreach ($items as $item) {
            ?>
            <div class="item-container">
                <div class="item-header">
                    <div class="item-logo">
                        <img src=<?php echo $item['url']; ?> alt="">
                    </div>
                    <div class="item-price-discount">
                        <span>-<?php echo $item['discount']; ?>%</span>
                    </div>
                </div>
                <div class="item-body">
                    <div class="item-title">
                        <?php echo $item['product_name']; ?>
                    </div>
                    <div class="item-subtitle">
                        <?php echo $item['drink_type']; ?>
                    </div>
                    <div class="item-price">
                        <?php echo $item['price']; ?><span>RON</span>
                    </div>
                    <div class="item-goto">
                        <a href="item.php?id=<?php echo $item['id_product']; ?>">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                        </a>
                        <a href="?addToCart=<?php echo $item['id_product']; ?>">
                            <button class="btn special red">
                                + cart
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
    }
} else {
    ?>
        <div class="msg erro">No items</div>
    <?php
}

?>
</div>
=======
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://cdn.shopify.com/s/files/1/1501/3776/products/IMG_9569_1024x1024.jpg?v=1532551009"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://en.cocacola.co.id/content/dam/journey/id/en/private/brands/598x336/MMP-Orange-598x336.png"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://cdn.shopify.com/s/files/1/1501/3776/products/IMG_9569_1024x1024.jpg?v=1532551009"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://en.cocacola.co.id/content/dam/journey/id/en/private/brands/598x336/MMP-Orange-598x336.png"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://en.cocacola.co.id/content/dam/journey/id/en/private/brands/598x336/MMP-Orange-598x336.png"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    <div class="item-header">
                        <div class="item-logo">
                            <img src="https://en.cocacola.co.id/content/dam/journey/id/en/private/brands/598x336/MMP-Orange-598x336.png"
                                alt="">
                        </div>
                        <div class="item-price-discount">
                            <span>-12%</span>
                        </div>
                    </div>
                    <div class="item-body">
                        <div class="item-title">
                            Minute Main Pupy
                        </div>
                        <div class="item-subtitle">
                            Suc natural
                        </div>
                        <div class="item-price">
                            123.69 <span>RON</span>
                        </div>
                        <div class="item-goto">
                            <button class="btn special red">
                                Vezi produs
                            </button>
                            <button class="btn special red">
                                + Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> Stashed changes
