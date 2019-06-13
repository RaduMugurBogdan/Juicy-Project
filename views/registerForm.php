<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>Document</title>
</head>
<?php include("header.php"); ?>

<body>
    <div class="container register">
        <form class="formContactContainer register">
            <h2>Register!</h2>
            <input class="inputBoxes" type="text" placeholder="Name..." name="name">
            <input class="inputBoxes" type="text" placeholder="Password..." name="password">
            <input class="inputBoxes" type="text" placeholder="Confirm password..." name="cpassword">
            <input class="inputBoxes" type="text" placeholder="E-mail..." name="mail">
            <input class="inputBoxes" type="text" placeholder="Phone number..." name="phone">
            <textarea class="inputTextBoxArea" placeholder="Adresa" name="mesaj" cols="1" rows="3"></textarea>
            <button class="btn special blue" type="submit" name="trimite">Send</button>
        </form>
    </div>
</body>

</html>