<?php

@include 'config.php';
session_start();


if(isset($_POST['delete_account'])){


      $id = $_SESSION['id'];

      $delete = "DELETE FROM user_form WHERE id='$id'";
      mysqli_query($conn, $delete);
      echo "Deleted Successfully";

      header('location:login.php');
}


?>



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h1>Delete Account</h1>
    <?php
      if(isset($error)){
         foreach($error as $error_msg){
            echo '<span class="error-msg">'.$error_msg.'</span>';
         }
      }
    ?>
    <p>Are you sure you want to delete your account?</p>
    <form method="POST">
        <input type="hidden" name="delete_account" value="true">
        <button type="submit">Yes, delete my account</button>
    </form>
</body>
</html>
