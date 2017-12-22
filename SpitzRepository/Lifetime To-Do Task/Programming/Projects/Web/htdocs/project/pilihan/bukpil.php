<?php 
include "..\konek.php";
$sql2="select * from buku";
$query2 = mysqli_query($db_link,$sql2);
?>
<select name="kategori">
	<?php while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['id_buku'];?>"><?php echo $data2['judul'];?></option>
	<?php }?>
</select>