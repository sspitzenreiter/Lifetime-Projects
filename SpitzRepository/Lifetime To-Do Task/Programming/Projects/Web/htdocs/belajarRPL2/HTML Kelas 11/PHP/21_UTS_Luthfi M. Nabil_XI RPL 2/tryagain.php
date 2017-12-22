<html>
	<body>
		<center><?php $c=$c+1;?>
			<form action="ps3.php"><input type="hidden" name="lim" value="<?php echo $c;?>">
				<table border="1" cellpadding="8">
					<tr>
						<td colspan="5"><center>Login</center></td>
					</tr>
					<tr>
						<?php include "menu.php";?>
					</tr>
					<tr>
						<td colspan="5"><p>ID atau Password Salah</p><?php include "s3.php" ?></td>
					</tr>
					<tr>
						<td colspan="5"><?php include "footer.php";?></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
						