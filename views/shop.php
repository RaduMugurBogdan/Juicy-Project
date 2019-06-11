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

<body>
    <div class="container">
        <?php require_once "header.php"?>

        <h1 class="aside-title">Having Fun at Shopping</h1>
    </div>
    <div class="container special-container effect1">
        <div class="filter-side">
            <form action="#" onsubmit="return false;">
                <p class="aside-title">Apply filters</p>
                <aside class="filter-container">

                    <p class="aside-title">Beverages</p>

                    <div class="choiceApply"><input type="radio" name="radio-box" id="drinks1" value="other"><label
                            for="drinks1"> Carbonated drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drinks2" value="other"><label
                            for="drinks2"> Natural drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drinks3" value="other"><label
                            for="drinks3"> Natural drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drinks4" value="other"><label
                            for="drinks4"> Other</label></div>
                </aside>
                <aside class="filter-container">
                    <p class="aside-title">Category</p>


                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink11" value="other"><label
                            for="drink11"> Carbonated drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink21" value="other"><label
                            for="drink21"> Natural drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink31" value="other"><label
                            for="drink31"> Natural drinks</label></div>


                </aside>
                <aside class="filter-container">
                    <p class="aside-title">Category</p>


                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink111" value="other"><label
                            for="drink111"> Carbonated drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink112" value="other"><label
                            for="drink112"> Natural drinks</label></div>
                    <div class="choiceApply"><input type="radio" name="radio-box" id="drink113" value="other"><label
                            for="drink113"> Natural drinks</label></div>
                </aside>
                <aside class="filter-container">
                    <p class="aside-title">Category2</p>


                    <div><input type="checkbox" name="radio-box" id="drink1111" value="other"><label for="drink1111">
                            Carbonated drinks</label></div>
                    <div><input type="checkbox" name="radio-box" id="drink1121" value="other"><label for="drink1121">
                            Natural drinks</label></div>
                    <div><input type="checkbox" name="radio-box" id="drink1131" value="other"><label for="drink1131">
                            Natural drinks</label></div>
                </aside>
                <button class="btn special red">Apply Filters</button>
            </form>
        </div>
        <div class="main-view-shop">
            <div class="shop-container show-filters ">
                <span class="sub-title">Beverages(number)</span>
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

            </div>
            <div class="shop-container view-list ">
                <?php require_once 'view-items.php';?>
            </div>
        </div>


    </div>
    <?php require_once 'footer.php';?>
</body>

</html>