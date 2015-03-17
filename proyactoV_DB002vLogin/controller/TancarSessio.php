<?php
session_start();
if((isset($_SESSION['psw']))&&($_SESSION['user'])){
	session_unset();
	header("Location: ../view/Login.php");
}else{
	header("Location: ../view/Login.php");
}
?>