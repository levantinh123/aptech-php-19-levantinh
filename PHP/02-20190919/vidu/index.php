<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
     $products = [
       'iphone 11'=> [
        'price' => 1099,
        'made' => [
            'in' => 'china',
            'by' => 'USA'
        ]
        ],
       'NOTE 9'=> [
        'price' => 1099,
        'made' => [
            'in' => 'Krean',
            'by' => 'Japan'
        ]
        ],
       'mua tai' => 'namcoi.com'
        ];
   $sanpham=array_keys($products);
  ?>
</head>
<body>

  
  <table >
  <tr>
    <th>products</th>
    <th>Price</th> 
    <th>Made in</th>
    <th>Made by</th>
  </tr>
   <?php 
   $tong = 0 ;
   for($i = 0 ;$i < count($products)-1;$i++) {
       $tong = $tong + $products[$sanpham[$i]]['price'];
     ?>  
   <tr>
   <td> <?php echo $sanpham[$i]; ?> </td>
   <td> <?php echo $products [$sanpham[$i]]['price'] ; ?> </td>
   <td> <?php echo $products[$sanpham[$i]]['made']['in'] ; ?></td>
   <td> <?php echo $products[$sanpham[$i]]['made']['by']; ?> </td>
  </tr>
  <?php  } ?>
 </table>
    
</body>
</html>