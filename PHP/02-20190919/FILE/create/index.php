<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
  <?php
     $file = fopen("tinh.txt", "w") or die("Can't open the file.");
     fwrite($file, "letinh");
     fclose($file);
     echo readfile("tinh.txt");

    $file = fopen("tinh.txt", "a+") or die("Can't open the file");
    fwrite($file, "\n News Website");
    fclose($file);


    $file = fopen("tinh.txt", "a+") or die("Can't open the file");
    while (!feof($file)) {
    echo fgets($file) . "<br>";
    }
    fclose($file);
?>
</body>
</html>