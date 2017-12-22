<?php 
include "../other/konek.php";
$sql2="select * from anggota order by nama asc";

if(isset($_GET['isset']))
{
$sql2="SELECT * FROM anggota WHERE id_anggota != '$data[id_anggota]'";	
}
$query2 = mysqli_query($db_link,$sql2);
?>
<select name="id_anggota">
	<?php 
		if(isset($_GET['isset']))
		{
		echo "<option value='$data[id_anggota]'>$nama</option>";
		}
		while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['id_anggota'];?>"><?php echo $data2['nama'];?></option>
	<?php }?>
</select>