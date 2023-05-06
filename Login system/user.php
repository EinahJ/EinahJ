<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PolySocial - User</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="content">
            <a href="logout.php" class="btn">Logout</a>
            <a href="delete.php" class="btn">Delete Account</a>
            </div>
        </div>
    </body>
</html>
