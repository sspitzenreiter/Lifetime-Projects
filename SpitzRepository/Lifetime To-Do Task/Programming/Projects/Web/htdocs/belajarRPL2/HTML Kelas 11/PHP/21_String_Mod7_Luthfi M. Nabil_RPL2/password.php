<html>
	<head>
		<title>Contoh crypt untuk Menangani Password</title>
	</head>
	<body>
		Password yang betul adalah : abc123x
		<form method="post">
		Nama : <input type="text" name="password">
		<br><br>
		Password : <input type="password" name="password">
		<br><br>
		<input type="submit" value="Login">
		</form>
		<?php
			if(isset($password))
				{
				$garam = "12";
				$passw_valid = crypt("abc123x",$garam);
				$enkripsi = crypt($password, $garam);
				if($passw_valid == $enkripsi)
					print("Password valid");
				else
					print("Password salah");
				}
		?>
	</body>
</html>	