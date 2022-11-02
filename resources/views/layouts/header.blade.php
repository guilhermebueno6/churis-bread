<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <title> {{ $title }} </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <script>
        var noOp = function() {}


        window.console = {
        log: noOp,
        dir: noOp,
        warn: noOp,
        error: noOp,
        // all other methods...
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/e098c0f3f7.js" crossorigin="anonymous"></script>
</head>


    <div class="mycontainer">
        <div class="header">
            <div class="preheader hidden">
                <h3 class="my-2">Free Delivery on all orders above 20$</h3>
            </div>
            <div class="mainheader">
                <div class="logo">
                    <img src="images/logo_icon.png">
                </div>
                <div class="buttons">
                    <a href="#our-company">ABOUT US</a>
                    <a class="<?php if($title == "Products") { echo 'underline'; } ?>" href="#best-sellers">PRODUCTS</a>
                    <!-- <a href="#">MEMBERSHIP</a> -->
                    <!-- <a href="#">CAREERS</a> -->
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>

