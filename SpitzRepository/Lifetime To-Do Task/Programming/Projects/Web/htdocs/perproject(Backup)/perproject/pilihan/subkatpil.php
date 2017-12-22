<?php 
include "../other/konek.php";
$sql2="select * from kategori order by nama_kategori asc";
$query2 = mysqli_query($db_link,$sql2);
?>
<select name="subkategori">
	<?php while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['id_kategori'];?>"><?php echo $data2['nama_kategori'];?></option>
	<?php }?>
</select>