<div class="listOfDiscountItems">
    <?php
    require_once '../controllers/ShopController.php';
    $Shop = new ShopController();
    $items;
    if(isset($_SESSION['itemByName']))
    {
        $items = $Shop->searchItemByName($_SESSION['itemByName']);
        unset($_SESSION['itemByName']);
    }else{
    $items = $Shop->getItems($_SESSION['category'], $_SESSION['brand'], $_SESSION['sizePack'], $_SESSION['order']);
    }
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