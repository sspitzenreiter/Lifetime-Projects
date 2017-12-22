
 <html>
	<head>
		<title></title>
	<head>
	<body>
	<form id="form1" action="input1.php" method="get">
		<table align="center" width="800">
			<tr>
				<td><?php $query="INSERT INTO jpc ( jns_kel) values('".$sname."')";?></td>
			</tr>
			<tr>
			<td><input type="submit" name="button" id="button" value="Submit" method="get"/></td>
			</tr>
		</table>
	</form>
	</body>
</html>