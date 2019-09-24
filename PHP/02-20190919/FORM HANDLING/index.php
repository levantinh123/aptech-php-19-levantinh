<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name:  <input type="text" name="lname">
    <br>
    Project:<input type="text" name="project">
    <br>
    <button type="submit">Submit</button>
    </form>
    <?php 
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
         $name = htmlspecialchars($_REQUEST['lname']);
          if(empty($name)){
              echo "NO Name <br>";
          }else{
              echo " Your name is $name <br>";
              
          } 
          
          $project = htmlspecialchars($_REQUEST['project']);
          if(empty($project)){
              echo "no project";
          } else{
              echo " your projcet is $project";
          }
     }
     ?>
</body>
</html>