<?php 
session_start();
session_unset($_SESSION['name']);
session_unset($_SESSION['id']);

header('Location: index.php');

?>