<html>
	<head>
		<title></title>
	<head>
	<body>
	<?php 
	 $id=$_REQUEST['id']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("daftar",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM jpcbeta WHERE id='".$id."'";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
	<form id="form1" action="edit4.php" method="get">
	<input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
		<table align="center" width="800">
			<tr>
				<td><b>Nama          </b></td><td><b>: </b></td><td><input type="text" name="nama" id="textfield" value="<?php echo $result[1] ?>"/></td>
			</tr>
			<tr>
				<td><b>NIS          </b></td><td><b> : </b></td><td><input type="text" name="nis" id="textfield2" value="<?php echo $result[2] ?>"/></td>
			</tr>
			<tr>
				<td><b>Tingkat Kelas          </b></td><td><b> : </b></td><td><?php
					$s=$_REQUEST['kls'];
					
					switch ($s) {
					case 10:
					echo "<input type=\"radio\" name=\"tkt_kls\" value=\"X\" checked>X"; 
					break;
					case 11:
					echo "<input type=\"radio\" name=\"tkt_kls\" value=\"XI\" checked>XI";
					break;
					case 12:
					echo "<input type=\"radio\" name=\"tkt_kls\" value=\"XII\" checked>XII";
					break;
					default:
					echo $s;
					}
				?></td>
			</tr>
			<tr>
				<td><b>Jurusan</b></td><td><b>:</b></td>
				<td>
				<?php
					$s=$_REQUEST['kls'];
					
					switch ($s) {
					case 10:
					echo "<input type=\"radio\" name=\"jrs\" value=\"TKI\">TKI<input type=\"radio\" name=\"jrs\" value=\"AK\"/>AK<input type=\"radio\" name=\"jrs\" value=\"AP\"/>AP<input type=\"radio\" value=\"PM\" name=\"jrs\"/>PM"; 
					break;
					case 11:
					echo "<input type=\"radio\" value=\"RPL\" name=\"jrs\"/>RPL<input type=\"radio\" value=\"MM\" name=\"jrs\"/>MM<input type=\"radio\" value=\"TKJ\" name=\"jrs\"/>TKJ<input type=\"radio\" value=\"AK\" name=\"jrs\"/>AK<input type=\"radio\" value=\"AP\" name=\"jrs\"/>AP<input type=\"radio\" value=\"PM\" name=\"jrs\"/>PM";
					break;
					case 12:
					echo "<input type=\"radio\" value=\"RPL\" name=\"jrs\"/>RPL<input type=\"radio\" value=\"MM\" name=\"jrs\"/>MM<input type=\"radio\" value=\"TKJ\" name=\"jrs\"/>TKJ<input type=\"radio\"value=\"AK\" name=\"jrs\"/>AK<input type=\"radio\" value=\"AP\" name=\"jrs\"/>AP<input type=\"radio\" value=\"PM\" name=\"jrs\"/>PM";
					break;
					default:
					echo $s;
					}
				?>
				</td>
				<td>
			</tr>
			<tr>
			<td><b>No. Jurusan</b></td><td><b> : </b></td><td><input type="text" name="no_kls" id="textfield3" value="<?php echo $result[5] ?>"/></td>
			</tr>
			<tr>
				<td><b>Tempat Lahir </b></td><td><b>:  </b></td><td><input type="text" name="tmp_lhr" id="textfield4" value="<?php echo $result[6] ?>"/></td>
			</tr>
			<tr>
				<td><b>Tanggal Lahir</b></td><td><b> :  </b></td><td><input type="date" name="tgl_lhr" value="<?php echo $result[7] ?>"/></td>
			</tr>
			<tr>
				<td><b>Alamat</b></td><td><b> : </b></td><td><input type="text" name="alm" id="textfield7" value="<?php echo $result[8] ?>"/></td>
			</tr>
			<tr>
				<td><b>Agama </b></td><td><b>: </b></td><td><?php
					$s=$result[9];
					
					$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
					mysql_select_db("daftar",$link) or die ("Cannot select the database!");
					$query="SELECT * FROM jpcbeta WHERE gd='".$s."'";
					
					switch ($s) {
					case "Islam":
					echo "<input type=\"radio\" name=\"agm\" value=\"Islam\" checked/>Islam<input type=\"radio\" name=\"agm\" value=\"Kristen\"/>Kristen<input type=\"radio\" name=\"agm\" value=\"Hindu\"/>Hindu<input type=\"radio\" name=\"agm\" value=\"Buddha\"/>Buddha<input type=\"radio\" name=\"agm\" value=\"Lain-Lain\"/>Lain-Lain"; 
					break;
					case "Kristen": 
					echo "<input type=\"radio\" name=\"agm\" value=\"Islam\"/>Islam<input type=\"radio\" name=\"agm\" value=\"Kristen\"checked/>Kristen<input type=\"radio\" name=\"agm\" value=\"Hindu\"/>Hindu<input type=\"radio\" name=\"agm\" value=\"Buddha\"/>Buddha<input type=\"radio\" name=\"agm\" value=\"Lain-Lain\"/>Lain-Lain";
					break;
					case "Hindu": 
					echo "<input type=\"radio\" name=\"agm\" value=\"Islam\"/>Islam<input type=\"radio\" name=\"agm\" value=\"Kristen\"/>Kristen<input type=\"radio\" name=\"agm\" value=\"Hindu\"checked/>Hindu<input type=\"radio\" name=\"agm\" value=\"Buddha\"/>Buddha<input type=\"radio\" name=\"agm\" value=\"Lain-Lain\"/>Lain-Lain";
					break;
					case "Buddha": 
					echo "<input type=\"radio\" name=\"agm\" value=\"Islam\"/>Islam<input type=\"radio\" name=\"agm\" value=\"Kristen\"/>Kristen<input type=\"radio\" name=\"agm\" value=\"Hindu\"/>Hindu<input type=\"radio\" name=\"agm\" value=\"Buddha\"checked/>Buddha<input type=\"radio\" name=\"agm\" value=\"Lain-Lain\"/>Lain-Lain";
					break;
					case "Lain-Lain":
					echo "<input type=\"radio\" name=\"agm\" value=\"Islam\"/>Islam<input type=\"radio\" name=\"agm\" value=\"Kristen\"/>Kristen<input type=\"radio\" name=\"agm\" value=\"Hindu\"/>Hindu<input type=\"radio\" name=\"agm\" value=\"Buddha\"/>Buddha<input type=\"radio\" name=\"agm\" value=\"Lain-Lain\"checked/>Lain-Lain";
					break;
					default:
					echo $s;
					}
				?></td>
			</tr>
			<tr>
				<td><b>No. Telepon</b></td><td><b> : </b></td><td><input type="text" name="no_tlp" id="textfield5" value="<?php echo $result[10] ?>"/></td>
			</tr>
			<tr>
				<td><b>Nama Orangtua </b></td><td><b>: </b></td><td><input type="text" name="nma_ort" id="textfield8" value="<?php echo $result[11] ?>"/></td>
			</tr>
			<tr>
				<td><b>Jenis Kelamin </b></td><td><b>:  </b></td><td><?php
					$s=$result[12];
					
					$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
					mysql_select_db("daftar",$link) or die ("Cannot select the database!");
					$query="SELECT * FROM jpcbeta WHERE jk='".$s."'";
					
					switch ($s) {
					case "P":
					echo "<input type=\"radio\" name=\"jk\" value=\"L\"/>Laki - Laki <input type=\"radio\" name=\"jk\" value=\"P\" checked/>Perempuan"; 
					break;
					case "L": 
					echo "<input type=\"radio\" name=\"jk\" value=\"L\" checked/>Laki - Laki <input type=\"radio\" name=\"jk\" value=\"P\" />Perempuan";
					break;
					default:
					echo $s;
					}
				?></td>
			</tr>
			<tr>
				<td><b>Golongan Darah </b></td><td><b>:  </b></td><td><?php
					$s=$result[13];
					
					$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
					mysql_select_db("daftar",$link) or die ("Cannot select the database!");
					$query="SELECT * FROM jpcbeta WHERE gd='".$s."'";
					
					switch ($s) {
					case "A":
					echo "<input type=\"radio\" name=\"gd\" value=\"A\" checked/>A <input type=\"radio\" name=\"gd\" value=\"B\"/>B <input type=\"radio\" name=\"gd\" value=\"O\"/>O <input type=\"radio\" name=\"gd\" value=\"AB\"/>AB"; 
					break;
					case "B": 
					echo "<input type=\"radio\" name=\"gd\" value=\"A\" />A <input type=\"radio\" name=\"gd\" value=\"B\" checked/>B <input type=\"radio\" name=\"gd\" value=\"O\"/>O <input type=\"radio\" name=\"gd\" value=\"AB\"/>AB";
					break;
					case "O": 
					echo "<input type=\"radio\" name=\"gd\" value=\"A\"/>A <input type=\"radio\" name=\"gd\" value=\"B\" />B <input type=\"radio\" name=\"gd\" value=\"O\" checked/>O <input type=\"radio\" name=\"gd\" value=\"AB\"/>AB";
					break;
					case "AB": 
					echo "<input type=\"radio\" name=\"gd\" value=\"A\" />A <input type=\"radio\" name=\"gd\" value=\"B\"/>B <input type=\"radio\" name=\"gd\" value=\"O\"/>O <input type=\"radio\" name=\"gd\" value=\"AB\" checked/>AB";
					break;
					default:
					echo $s;
					}
				?></td>
			</tr>
			<tr>
			<td><input type="submit" name="button" id="button" value="Submit" /><input type="submit" name="button" id="button" value="Pilih Kelas" formaction="edit2.php" /></td>
			</tr>
		</table>
	</body>
</html>