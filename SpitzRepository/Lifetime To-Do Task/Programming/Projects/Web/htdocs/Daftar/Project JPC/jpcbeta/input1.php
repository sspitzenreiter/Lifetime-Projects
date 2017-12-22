<html>
	<head>
		<title></title>
	<head>
	<body>
	<form id="form1" action="input2.php" method="get">
		<table align="center" width="800">
			<tr>
				<td><b>Nama         </b></td><td><b> : </b></td><td><input type="text" name="nama" id="textfield"/></td>
			</tr>
			<tr>
				<td><b>NIS          </b></td><td><b> : </b></td><td><input type="text" name="nis" id="textfield2"/></td>
			</tr>
			<tr>
				<td><b>Tingkat Kelas        </b></td><td><b>  : </b></td><td><?php
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
			<td><b>No. Jurusan</b></td><td><b> : </b></td><td><input type="text" name="no_kls" id="textfield3"/></td>
			</tr>
			<tr>
				<td><b>Tempat Lahir</b></td><td><b> :  </b></td><td><input type="text" name="tmp_lhr" id="textfield4"/></td>
			</tr>
			<tr>
				<td><b>Tanggal Lahir</b></td><td><b> :  </b></td><td><input type="date" name="tgl_lhr" /></td>
			</tr>
			<tr>
				<td><b>Alamat</b></td><td><b> : </b></td><td><input type="text" name="alm" id="textfield7"/></td>
			</tr>
			<tr>
				<td><b>Agama</b></td><td><b> : </b></td><td><input type="radio" name="agm" value="Islam"/>Islam<input type="radio" name="agm" value="Kristen"/>Kristen<input type="radio" name="agm" value="Hindu"/>Hindu<input type="radio" name="agm" value="Buddha"/>Buddha<input type="radio" name="agm" value="Lain-Lain"/>Lain-Lain</td>
			</tr>
			<tr>
				<td><b>No. Telepon</b></td><td><b> : </b></td><td><input type="text" name="no_tlp" id="textfield5"/></td>
			</tr>
			<tr>
				<td><b>Nama Orangtua</b></td><td><b> : </b></td><td><input type="text" name="nma_ort" id="textfield8"/></td>
			</tr>
			<tr>
				<td><b>Jenis Kelamin </b></td><td><b>:  </b></td><td><input type="radio" name="jk" value="L"/>Laki - Laki <input type="radio" name="jk" value="P"/>Perempuan</td>
			</tr>
			<tr>
				<td><b>Golongan Darah </b></td><td><b>:  </b></td><td><input type="radio" name="gd" value="A"/>A <input type="radio" name="gd" value="B"/>B<input type="radio" name="gd" value="O"/>O<input type="radio" name="gd" value="AB"/>AB</td>
			</tr>
			
			<tr>
			<td><input type="submit" name="button" id="button" value="Submit" /> <input type="submit" name="button" id="button" value="Pilih Kelas" formaction="inputk.php" /></td>
			</tr>
		</table>
	</body>
</html>