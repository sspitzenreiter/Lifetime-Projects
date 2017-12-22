<html>
	<body>
		<form method="POST" action="hitungjual.php"
		<center>
			<table border="0" width=400>
				<tr bgcolor=#FF0000>
					<td colspan="3" align="center">
						<b><font color=white>PENJUALAN BARANG</font></b>
					</td>
				</tr>
				<tr align=center bgcolor=#888888>
					<td><b>Nama Barang</b></td>
					<td><b>Harga Satuan</b></td>
					<td><b>Qty</b></td>
				</tr>
				<tr>
					<td>Buku Tulis</td>
					<td align=right>Rp. 4000</td>
					<td align=center><input type=hidden name="nama[]" value="Buku Tulis"><input type=hidden name="harga[]" value="4000"><input type=text name="qty[]" size=5 maxlength=4></td>
				</tr>
				<tr>
					<td>Buku Gambar</td>
					<td align=right>Rp. 5000</td>
					<td align=center>
						<input type=hidden name="nama[]" value="Buku Gambar">
						<input type=hidden name="harga[]" value="5000">
						<input type=text name="qty[]" size=5 maxlength=4>
					</td>
				</tr>
				<tr>
					<td>Mouse</td>
					<td align=right>Rp. 20.000</td>
					<td align=center>
						<input type=hidden name="nama[]" value="Mouse">
						<input type=hidden name="harga[]" value="20000">
						<input type=text name="qty[]" size=5 maxlength=4>
					</td>
				</tr>
				<tr>
					<td>Disket</td>
					<td align=right>Rp. 2.500</td>
					<td align=center>
						<input type=hidden name="nama[]" value="Disket">
						<input type=hidden name="harga[]" value="2500">
						<input type=text name="qty[]" size=5 maxlength=4>
					</td>
				</tr>
				<tr>
					<td>Flashdisk</td>
					<td align=right>Rp. 243.000</td>
					<td align=center>
						<input type=hidden name="nama[]" value="Flashdisk">
						<input type=hidden name="harga[]" value="243000">
						<input type=text name="qty[]" size=5 maxlength=4>
					</td>
				</tr>
				<tr>
					<td colspan=3 bgcolor=#888888>
						<center><input type=submit value="Hitung" name="submit">
					</td>
				</tr>
			</table>
			</center>
		</form>
	</body>
</html>
				