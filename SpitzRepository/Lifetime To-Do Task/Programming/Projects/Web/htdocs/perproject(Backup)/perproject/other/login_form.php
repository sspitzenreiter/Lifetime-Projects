<form action="other/login_proc.php" method="get">
	<table align="center">
		<tr>
			<td>ID</td><td> : </td><td><input type="text" name="account"></td>
		</tr>
		<tr>
			<td>Password</td><td> : </td><td><input type="password" name="pass"></td>
		</tr><input type="hidden" name="conf" value='<?php echo "$d";?>'>
		<tr>
			<td colspan="3"><input type="submit" name="login" value="Login"></td>
	</table>
</form>
	