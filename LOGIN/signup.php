
<?php
 if(isset($_POST['submit'])){
            $uname=$_POST['username'];
            $name=$_POST['name'];
            $pwd=$_POST['password'];
            
         $conn = mysqli_connect("localhost","root","","loginsystem");
    
       if($conn){
        echo "registered successfully!";

}
      else{
      echo "filed to connect";
   }

  $sql="INSERT INTO `user` (`username`,`name`,`password`)VALUES('$uname','$name','$pwd');";

  mysqli_query($conn,$sql);
     
     }

else{
  echo"failed to connect";
}

 ?>
