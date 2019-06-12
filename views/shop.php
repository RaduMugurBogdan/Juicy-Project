<?php
require_once 'checkRoutes.php';
// session_start();
require_once '../controllers/AccountController.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['category'])) {
        $_SESSION['category'] = isset($_POST['category']) ? $_POST['category'] : "";
        $_SESSION['brand'] = isset($_POST['brand']) ? $_POST['brand'] : "";
        // $_SESSION['sizePack'] = isset($_POST['sizePack']) ? $_POST['sizePack'] : "";
    }
} else {
    if (!isset($_SESSION['category'])) {
        $_SESSION['category'] = "";
    }
    if (!isset($_SESSION['brand'])) {
        $_SESSION['brand'] = "";
    }
    // if(!isset($_SESSION['category'])){
    //     $_SESSION['category'] = "";
    // }

    // $_SESSION['brand'] = "";
    // $_SESSION['sizePack'] = "";
    // name like '%$chart%' ord
}

if (isset($_GET['addToCart'])) {
    array_push($_SESSION['cart'], $_GET['addToCart']);
    header("Location:/Juicy-Project/views/shop.php");
}

if (isset($_GET['reset'])) {
    if ($_GET['reset'] == 'all') {
        $_SESSION['category'] = "";
        $_SESSION['brand'] = "";
        $_SESSION['sizePack'] = "";
        header("Location:/Juicy-Project/views/shop.php");
    }
    if ($_GET['reset'] == 'category') {
        $_SESSION['category'] = "";
        header("Location:/Juicy-Project/views/shop.php");
    }
    if ($_GET['reset'] == 'brand') {
        $_SESSION['brand'] = "";
        header("Location:/Juicy-Project/views/shop.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juicy</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/food-icons-rounded/110/Cocktail-512.png" />
</head>

<body onload="loadNumberOfItems()">
    <div class="container">
        <?php require_once "header.php" ?>

        <h1 class="aside-title">Having Fun at Shopping</h1>
    </div>
    <div class="container special-container effect1">
        <div class="filter-side">
            <form action="#" method="post">
                <p class="aside-title">Apply filters</p>
                <aside class="filter-container">

                    <p class="aside-title">Category</p>

                    <div class="choiceApply"><input <?php echo $_SESSION['category'] == "carb" ? "checked" : "" ?> type="radio" name="category" id="drinks1" value="carb"><label for="drinks1"> Carbonated drinks</label></div>
                    <div class="choiceApply"><input <?php echo $_SESSION['category'] == "nat" ? "checked" : "" ?> type="radio" name="category" id="drinks2" value="nat"><label for="drinks2"> Natural drinks</label></div>
                    <div class="choiceApply"><input <?php echo $_SESSION['category'] == "acid" ? "checked" : "" ?> type="radio" name="category" id="drinks3" value="acid"><label for="drinks3">Acid</label></div>

                </aside>
                <aside class="filter-container">
                    <p class="aside-title">Brand</p>
                    <div class="choiceApply"><input <?php echo $_SESSION['brand'] == "cat1" ? "checked" : "" ?> type="radio" name="brand" id="drink11" value="cat1"><label for="drink11"> Cat 1</label></div>
                    <div class="choiceApply"><input <?php echo $_SESSION['brand'] == "cat2" ? "checked" : "" ?> type="radio" name="brand" id="drink21" value="cayt2"><label for="drink21"> cat 2</label></div>
                    <div class="choiceApply"><input <?php echo $_SESSION['brand'] == "cat3" ? "checked" : "" ?> type="radio" name="brand" id="drink31" value="cat3"><label for="drink31"> Cat 3</label></div>
                </aside>
                <!-- <aside class="filter-container">
                    <p class="aside-title">Category</p>


                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink111" value="other"><label for="drink111"> Carbonated drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink112" value="other"><label for="drink112"> Natural drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink113" value="other"><label for="drink113"> Natural drinks</label></div>
                </aside> -->
                <aside class="filter-container">
                    <p class="aside-title">Size Pack</p>

                    <div><input type="checkbox" name="sizePack[]" value="6" id="drink1111" value="other"><label for="drink1111">
                            Carbonated drinks</label></div>
                    <div><input type="checkbox" name="sizePack[]" value="12" id="drink1121" value="other"><label for="drink1121">
                            Natural drinks</label></div>
                    <div><input type="checkbox" name="sizePack[]" value="18" id="drink1131" value="other"><label for="drink1131">
                            Natural drinks</label></div>
                </aside>
                <button class="btn special red" type="submit">Apply Filters</button>
            </form>
        </div>
        <div class="main-view-shop">
            <div class="shop-container show-filters ">
                Beverages(<span class="sub-title" id="numberOfItems">0</span>)
                <div class="top-search-container">
                    <input type="text" placeholder="Search..">
                    <button type="button"><i class="fas fa-search"></i></button>
                </div>
                <select class="top-bar-selector">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="vw">VW</option>
                    <option value="audi" selected>Audi</option>
                    <option value="Order by">Order by</option>
                </select>
            </div>
            <div class="shop-container other-filters ">
                <ul>
                    <li><?php echo $_SESSION['category'] ? $_SESSION['category'] : "" ?></li>
                    <li><?php echo $_SESSION['brand'] ? $_SESSION['brand'] : "" ?></li>
                    <li>asd</li>
                    <li>asd</li>
                    <?php if ($_SESSION['category'] || $_SESSION['brand']) echo '
<li><a  href="?reset=all">reset</a></li>
                    ';  ?>

                </ul>
            </div>
            <div class="shop-container view-list ">
                <?php require_once 'view-items.php'; ?>
            </div>
        </div>


    </div>
    <?php require_once 'footer.php'; ?>

    <script src="../assets/js/main.js"></script>
</body>

</html>