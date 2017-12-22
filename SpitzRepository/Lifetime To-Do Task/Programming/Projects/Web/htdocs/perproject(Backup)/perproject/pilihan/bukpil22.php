<?php 
include "../other/konek.php";

$sql2="select * from buku order by judul asc";
if(isset($_GET['isset']))
{
	$sql2="select * from buku where id_buku != $data[id_buku]";
}
$query2 = mysqli_query($db_link,$sql2);
$sqlisset="select * from buku where id_buku='$data[id_buku]'";
$query3=mysqli_query($db_link,$sqlisset);
$dataiss=mysqli_fetch_array($query3);
?>
<select name="buku">
	<?php  if(isset($_GET['isset']))
	{
		echo "<option value='$data[id_buku]' checked>$dataiss[judul]</option>";
	}
	
	while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['id_buku'];?>"><?php echo $data2['judul'];?></option>
	<?php }?>
</select>