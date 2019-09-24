  <h1> Trang dang nhap</h1>

     <?php 
       $User =$_GET['name'];
       $Pass =$_GET['password'];
       echo $User."va".$Pass;
       if($User == "Nam" && $Pass == 123)
       {
           echo "Dang nhap thanh cong";
       } else 
       {
           echo "Moi dang nhap lai";
       }
        else{
            header('Location: '.$newURL);
        }
      ?>
 