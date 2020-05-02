<?php
  mysql_connect("localhost","roor","","karthikk") or die("could not open");
  $output='';

  if(isset($_POST['search'])){
    $searchq =$_POST['search'];
   $searchq=preg_replace("#[^0-9a_z]#i","",$searchq);
 $query=mysql_query("SELECT * FROM members WHERE student_name LIKE '%$searchq%' OR class LIKE '%searchq%'") or die("could not);
 $count =mysql_num_rows($query);
 if($count==0){
  $output='no found';
}
 else{
   while($row=mysql_fetch_array($query)){
  $student name=$row['student name'];
  $class=$row['class'];
  $id=$row['ic'];


$output .='<div>'.$s_name.' '.$s_class.'</div>';


}

 ?>

  <html>
  <body>
   <form action="search.php">
   <input type="text" name="s" placeholder="search here">
   <input type="submit" value="search">
   </form>
<?php print("output");?>
  </body>
 </html>