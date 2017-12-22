<?php $a=$a+1?>
		<form action="atmoutput.php">
			<table>
			<input type="hidden" name="lim" value="<?php echo $a;?>" >
				<tr>
					<td>Anda telah salah memasukkan pin sebanyak : <?php echo $a;?></td>
				<tr>
					<td>Masukan Pin Anda :  </td>
					<td><input type = "text" name="pin" placeholder="Pin"></td>
				</tr>
				<tr>
					<td><input type = "submit" name="sub" value="Cek"></td>
				</tr>
			</table>
		</form>
