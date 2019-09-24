<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<?php 
     session_start();
    ?>
<body>
<?php
      $_SESSION["myName"] = "Le Van Tinh";
      $_SESSION["myProject"] = "News Website";
       print_r($_SESSION);
       session_destroy();
?>
</body>
</html>