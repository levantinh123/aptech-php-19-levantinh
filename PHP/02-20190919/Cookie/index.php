<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
        $cookie_name = "user";
        $cookie_value = "Le Van Tinh";
        setcookie($cookie_name, $cookie_value, time()+15 );
        ?>
        
<body>
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
             echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
             echo "Cookie '" . $cookie_name . "' is set!<br>";
             echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
</body>
</html>