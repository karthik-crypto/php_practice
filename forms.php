<?php
  if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];

?>
<html>
<head><title><?php echo $name ?></title>
</head>
<body>
<h1>welcome</h1>
WELCOME <?php echo $name; ?><br>
your email is :<?php echo $email; ?>
</body>
<?php
}
?>
</html>