<?php 
require_once '../controllers/AccountController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::SignIn();
}
?>
<?php
require_once 'checkRoutes.php';
$error = '';
$mess = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch ($error) {
        case 'false':
            $mess = 'Te rugam sa te logezi.';
        case 'emailNotValid':
            $mess = 'Email-ul sau parola sunt incorecte. Te rugam sa incerci din nou.';
    }
}
if(isset($_GET['success'])){
  switch ($_GET['success']) {
    case 'accountCreated':
        $mess = 'Cont creat cu succes.Te rugam sa te logezi.';

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/food-icons-rounded/110/Cocktail-512.png" />
    <title>JUICY</title>
</head>

<body>
    <div class="container">
        <?php require_once "header.php"?>
    </div>
    <div class="container register">
        <form class="formContactContainer register" action="" method="post">
            <h2>Login in account!</h2>
            <input class="inputBoxes" class="form-control" type="text" placeholder="E-mail..." name="email">
            <input class="inputBoxes" class="form-control" type="text" placeholder="Password..." name="password">
            <div class="links">
                <a href="register.php">Register</a>
                <a href="#">Forgot Password</a>
            </div>
            <button class="btn special blue" type="submit" name="send">Send</button>
        </form>
    </div>
</body>

</html>

<?php  
    require_once 'popup-success.php'; 
?>

<?php
require_once '../controllers/AccountController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::SignIn();
}
?>
<?php
require_once 'checkRoutes.php';
$error = '';
$mess = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch ($error) {
        case 'false':
            $mess = 'Te rugam sa te logezi.';
        case 'emailNotValid':
            $mess = 'Email-ul sau parola sunt incorecte. Te rugam sa incerci din nou.';
    }
}
?>