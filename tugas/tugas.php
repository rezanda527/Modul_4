<html> 
	<head> 
	  <title>login</title> 
		<style type="text/css">
		<!--
		.border2 {
		
		background-image:url('r.jpg');
		background-repeat:no-repeat;
		background-position:center;
		background-size:680px 260px;
		padding: 40px 20px 40px 20px;
		}

		body {
		background-image:url('angry.jpg');
		background-repeat:no-repeat;
		background-position:center;
		padding: 5px 10px 5px 10px;
		}
		--> 
		</style>
	</head>

	<body>
		<?php 
		session_start();
		if (isset($_SESSION['user'])){
			session_destroy();
		}
		?> 
		<form id="loginForm" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<div class="border1">
		<div class="border2">
		<h3 align="center">LOGIN </h3>

		<p><center><strong>Username :</strong><input type="text" name="username" size="30"/>
		</p>
		<p><center><strong>Password :</strong><input type="password" name="password" size="30"/>
		</p>
		<p>
		<input type="submit" value="Login" onclick="login();"/>
		</p>
		<div align = "center">
		<?php 
			$acc_user = 'rezanda';
			$acc_pas = 'ganteng';
			if (isset($_POST['username']) && isset($_POST['password'])) { 
			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			if (($username==$acc_user)&&($password==$acc_pas)){
				$_SESSION['user'] = $username;
				echo ' login berhasil, selamat datang <br/>'.
						'<a href="index.php"><h2>Lanjutkan</a><br/>';
			} else {
				echo ' username atau pasword yang anda masukkan salah<br/>'.
					'<a href="index.php"><h2>Silahkan Mencoba Lagi</a>';
			}
		}
		?>
		</div>
		</div>
		
		</form>
		
		
	</body>
</html>