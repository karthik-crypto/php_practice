<html>
  <head>
   <title>
     fetch</title>
  </head>
   
  <body>


  <?php
   
   $conn=mysqli_connect("localhost","root","","karthikk");
   

    $sql="SELECT * FROM `fees`";
     $result= mysqli_query($conn,$sql);
  
  ?>
    <table border="1">
   <tr>
    <td>id</td>
    <td>student_name</td>
    <td>class</td>
    <td>fees</td>
    <td>fees_status</td>
    <td>edit</td>
</tr>
    
   <?php
   while($row=mysqli_fetch_assoc($result)){
     
     echo "<tr>";
      echo"<td>".$row['id']."</td>";
     echo "<td>".$row['student_name']."</td>";
      echo "<td>".$row['class']."</td>";
      echo "<td>".$row['fees']."</td>";
     echo "<td>".$row['fees_status']."</td>";
     echo "<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
    
    echo "</tr>";

  }

  ?>
 
 </table>
 
</body>

 </html>