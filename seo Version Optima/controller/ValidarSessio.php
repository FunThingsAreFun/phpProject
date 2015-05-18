<?php
session_start();
if(isset($_COOKIE['user'])){
	if((!isset($_POST['cuser']))&&(isset($_POST['login']))){    
		setcookie("user", $_REQUEST['user'], time());
	}
}
if (isset($_COOKIE['psw'])){
	if((!isset($_POST['cpsw']))&&(isset($_POST['login']))){    
		setcookie("psw", $_REQUEST['psw'], time());
	}
}
if((isset($_POST['psw']))&&($_POST['user'])){
	if(($_POST['psw']==123) && ($_POST['user'] == 'admin')){
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['psw'] = $_POST['psw'];
		if ( isset($_POST['cuser'])) {    
			setcookie("user", $_POST['user'], time()+3600);
		}
		if ( isset($_POST['cpsw'])) {    
			setcookie("psw", $_POST['psw'], time()+3600);
		}
		header('Location: ../view/MenuInicial.php');
	}else {
		header('Location: ../view/Error.php');
	}
} 
?>