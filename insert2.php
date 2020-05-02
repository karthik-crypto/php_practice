<?php
 if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $class=$_POST['class'];
            $fees=$_POST['fees'];
            
         $conn = mysqli_connect("localhost","root","","karthikk");
    
       if($conn){
        echo "registered successfully!";

}
      else{
      echo "filed to connect";
   }

  $sql="INSERT INTO `fees`(`student_name`,`class`,`fees`)VALUES('$name','$class','$fees');";

  mysqli_query($conn,$sql);
     
     }
 ?>