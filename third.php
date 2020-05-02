<html>
<table border="1">
<tr>
<th>name</th>
<th>age</th>

</tr>
<?php
$name=array("karthik"=>"20", "harsha"=>"19", "teja"=>"20");
foreach($name as $name=>$name_value){
echo '<tr><td>'.$name.'</td><td>'.$name_value.'</td></tr>';
}
?>
</table>
</html>
