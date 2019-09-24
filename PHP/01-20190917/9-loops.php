<!DOCTYPE html>
<html>
<body>

<h1>Looops</h1>

<?php
//exc1
$i = 1; 

while
 ($i < 6) 
{

  echo $i;
  $i++;
}
//exc2
$i = 1; 

do
 {
    echo $i;
    $i++;
} 
while
 ($i < 6);
 //exc3
 
for
($i = 0; $i < 10; 
$i++
) {
 echo $i;
}
//exc4
$colors = array("red", "green", "blue", "yellow"); 

foreach
 ($colors 
as
 $x) {
  echo $x;
}
?>

</body>
</html>