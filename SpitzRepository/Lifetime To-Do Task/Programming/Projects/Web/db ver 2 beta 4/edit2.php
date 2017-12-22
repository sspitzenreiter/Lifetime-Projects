<html>
	<head>
	</head>
	<body>
	<?php 
	 $id=$_REQUEST['id']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("daftar",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM jpcbeta WHERE id='".$id."'";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
		<form id="form1" action="edit3.php" method="get"><input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
		<table align="center" width="800">
			<tr>
				<td><b>Tingkat Kelas </b></td><td><b>: </b></td><td><input type="radio" id="tkt" name="kls" value="10"/>X<input type="radio" id="tkt_kls" name="kls" value="11"/>XI<input type="radio" id="tkt_kls" name="kls" value="12"/>XII</td>
			</tr>
			<tr>
			<td><input type="submit" name="button" id="button" value="Submit" /><input type="submit" name="button" id="button" value="Back" formaction="edit.php" /></td>
			</tr>
		</table>
	</form>
	</body>
</html>