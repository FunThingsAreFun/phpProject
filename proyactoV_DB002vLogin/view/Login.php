<html>
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
	<title>LOGIN</title>
</head>
<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<body>
	<?php
	session_start();
	if((isset($_SESSION['psw']))&&($_SESSION['user'])){	
		header('Location: MenuInicial.php');
	}?>
	<div id='login'>
		<form name="form" method="post" action="../controller/controller_login.php"/>
		Usuari
		<?php
		if (isset($_COOKIE['user'])) {
			?>
			<input type="text" name="user" value="<?php echo $_COOKIE['user']; ?>"/>
			<?php
		} else {
			?>
			<input type="text" name="user">
			<?php
		}
		?>
		<br>
		Password
		<?php
		if (isset($_COOKIE['psw'])) {
			?>
			<input type="password" name="psw" value="<?php echo $_COOKIE['psw']; ?>">
			<?php
		} else {
			?>
			<input type="password" name="psw">
			<?php
		}
		?>						
		
		
		<br>
		<input type="checkbox" name="cuser" <?php if (isset($_COOKIE['user'])){ echo("checked"); } ?>/>
		Guardar Usuari
		<br>
		<input type="checkbox" name="cpsw" <?php if (isset($_COOKIE['psw'])){ echo("checked"); }?>/>
		Guardar Contrassenya

		<div class="g-recaptcha" data-sitekey="6LcpigMTAAAAAO4cpc5EchkCizT_Pf0N5uxAJcj3"></div>
		<br>
		<input type="submit" name="login" value="Inici Sessio"/>
	</form>

</div>
</body>
</html>