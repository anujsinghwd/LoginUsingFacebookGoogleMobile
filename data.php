<?php require_once 'connect.php'; ?>
<?php 
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['name'] = $_POST['name'];
$id = $_POST['id'];
$name = $_POST['name'];
$sql = "INSERT INTO users(user_id,name) VALUES ('$id','$name') ";
mysqli_query($db,$sql);


 ?>