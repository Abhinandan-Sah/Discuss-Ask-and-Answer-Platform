<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./client/commonFiles.php') ?>
    <link href="./public/style.css" rel="stylesheet">
</head>
<body>
    <?php 
        include('./client/header.php');
    ?>
    <?php
        if(isset($_GET['signup']) && !isset($_SESSION['user']['username'])){
            include('./client/signup.php'); 
        }
        else if(isset($_GET['login']) && !isset($_SESSION['user']['username'])){
            include('./client/login.php');
        }
        else if(isset($_GET['ask'])){
            include('./client/ask.php');
        }
        
    ?>
</body>
</html>