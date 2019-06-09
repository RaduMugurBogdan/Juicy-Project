<header>
    <?php
    $path = $_SERVER['REQUEST_URI'];
$dirs = explode('/', $path);
$last_dir = $dirs[count($dirs) - 1];
    
    ?>
    <div class="logo-body">
        <img src="../assets/images/logo.png" alt="23andfour logo" class="logo">
    </div>
    <nav>
        <a href='#' class="hide-desktop">
            <img src="../assets/images/ham.svg" alt="toggle menu" class="menu" id="menu">
        </a>
        <ul class="show-desktop hide-mobile" id="nav">
            <li id="exit" class="exit-btn hide-desktop"><img src="../assets/images/exit.svg" alt="exit menu"></li>
            <li><a href="index.php" class="<?php if($last_dir === "index.php") echo "active"; ?>" ><i class="fas fa-home"></i> Home</a></li>
            <li><a href="index.php#contact" class="<?php if($last_dir === "index.php#contact") echo "active"; ?>"><i class="fas fa-address-card"></i> Contact</a></li>
            <li><a href="shop.php" class="<?php if($last_dir === "shop.php") echo "active"; ?>"><i class="fas fa-shopping-cart"></i> Shop</a></li>
            <li><a href="login.php" class="<?php if($last_dir === "login.php") echo "active"; ?>"><i class="fas fa-user"></i> Login</a></li>
            <?php
            if($last_dir === "shop.php")
            echo '
            <li><a href="shop.php"><i class="fas fa-shopping-cart"></i> Shop Cart (0)</a></li>
            ';
            ?>
        </ul>
    </nav>
</header>