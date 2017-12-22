<?php 
include "..\konek.php";
$sql2="select * from anggota";
$query2 = mysqli_query($db_link,$sql2);
?>
<select name="anggota">
	<?php while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['id_anggota'];?>"><?php echo $data2['nama'];?></option>
	<?php }?>
</select>