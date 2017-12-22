<html>
	<body>
		<?php
			$id=$_REQUEST['id'];
			$pass=$_REQUEST['pass'];

			$id1="schutz";
			$pass1="mnabil17";
			
			if($id == $id1 && $pass == $pass1)
				echo "<br><br> Anda Berhasil Login";
			else
			if($id == $id1 && $pass != $pass1)
				echo "<br><br> Password Salah";
			else
			if($id != $id1 && $pass == $pass1)
				echo "<br><br> ID Salah";
		?>
	</body>
</html>