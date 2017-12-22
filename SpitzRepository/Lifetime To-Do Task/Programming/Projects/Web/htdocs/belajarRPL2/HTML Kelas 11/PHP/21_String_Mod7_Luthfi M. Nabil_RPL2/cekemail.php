<html>
	<head>
		<title>Contoh Pemeriksaan Alamat E-mail</title>
	</head>
	<body>
		<form>
			Email Anda : <input type="text" name="email">
			<br>
			<br>
			<input type="submit" value="Cek">
		</form>
		
	<?php
	$email = $_GET['email'];
	if(isset($email))
		if(empty($email))
		print("Harap mengisikan e-mail <br>\n");
		else
		{
		if(ereg("^.+@.+\\..+$",$email))
			print("Alamat e-mail $email valid<br>\n");
		else
			print("Alamat e-mail $email tidak valid <br>\n");
		}
		?>
	</body>
</html>

