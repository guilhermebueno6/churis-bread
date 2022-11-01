<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <title> {{ $title }} </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>


    <div class="mycontainer">
        <div class="header">
            <div class="preheader">
                <h3>Free Delivery on all orders above 20$</h3>
            </div>
            <div class="mainheader">
                <div class="logo">
                    <a href="fireplacesbyjack.php"><img style="margin: 10px 10px 10px 50px;" src="images/logo_icon.png"></a>
                </div>
                <div class="buttons">
                    <a class="<?php if($title == "About Us") { echo 'underline'; } ?>" href="index.php">ABOUT US</a>
                    <a class="<?php if($title == "Products") { echo 'underline'; } ?>" href="index.php">PRODUCTS</a>
                    <a class="<?php if($title == "Membership") { echo 'underline'; } ?>" href="index.php">MEMBERSHIP</a>
                    <a class="<?php if($title == "Careers") { echo 'underline'; } ?>" href="index.php">CAREERS</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>

