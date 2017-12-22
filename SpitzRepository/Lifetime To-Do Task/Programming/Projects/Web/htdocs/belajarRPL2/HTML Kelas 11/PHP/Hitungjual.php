<html>
	<body>
		<table border="0" align=center>
			<tr bgcolor=#FF0000>
				<td colspan="5" align="center">
					<b><font color=white>PENJUALAN BARANG</font></b>
				</td>
			</tr>
			<tr align=center bgcolor=#888888>
				<td><b>Nomor</b></td>
				<td><b>Nama Barang</b></td>
				<td><b>Harga</b></td>
				<td><b>Quantity</b></td>
				<td><b>Sub Total</b></td>
			</tr>
			<?php
				$no=0;
				$total=0;
				$totqty=0;
				for($i=0;$i<count($_POST["nama"]);$i++)
				{
				$qty=$_POST["qty"][$i];
				$nama=$_POST["nama"][$i];
				$harga=$_POST["harga"][$i];
				if($qty!=0)
				{
					$no++;
					$subtotal=$qty*$harga;
					echo "<tr>
							<td>$no</td>
							<td>$nama</td>
							<td align=right>Rp. ".number_format($harga,0)."</td>
							<td align=center>".number_format($qty,0)."</td>
							<td align=right>Rp. ".number_format($subtotal,0) ."</td>
							</tr>";
					$totqty=$totqty+$qty;
					$total=$total+$subtotal;
				}
			}
		?>
		<tr bgcolor=silver align=right>
			<td colspan=3><b>Total</b></td>
			<td align=center><b>
				<?php echo number_format($totqty,0);?></b></td>
			<td><b>Rp. <?php echo number_format($total,0); ?></b></td>
		</tr>
	</table>
</body>
</html>
				