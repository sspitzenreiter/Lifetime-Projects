<?php 
include "../other/konek.php";
$sql2="select * from jurusan";
$query2 = mysqli_query($db_link,$sql2);
?>
<select name="kelas">
	<option value="X">X</option>
	<option value="XI">XI</option>
	<option value="XII">XII</option>
</select>
<select name="jurusan">
	<?php 
	
	while($data2=mysqli_fetch_array($query2))
	{
		?><option value="<?php echo $data2['nama_jurusan'];?>"><?php echo $data2['nama_jurusan'];?></option>
	<?php }?>
</select>
<select name="rombel">
	<?php for ($g = 1; $g <= 6; $g++)
	{?>
		<option value="<?php echo $g;?>"><?php echo $g;?></option>
	<?php } ?></select>
	
	