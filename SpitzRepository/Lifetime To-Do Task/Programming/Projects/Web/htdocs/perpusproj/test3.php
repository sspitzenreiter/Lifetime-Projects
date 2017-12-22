<?php
	$host = "localhost";
	$id = "root";
	$pass="";
	$db = "perpustakaan";
	$db_link = mysqli_connect($host,$id,$pass,$db);
	
	$sql = "select * from sub_kategori";
	$query = mysqli_query($db_link,$sql);
	$ro1=mysqli_num_rows($query);
	while($data = mysqli_fetch_array($query))
	{	
		
		echo "$ro1 row $sql sql ";
		$sql2 = "select * from buku where id_sub = '$data[id_sub]'";
		$query2 = mysqli_query($db_link,$sql2);
		$row2 = mysqli_num_rows($query2);
		$a = 0;
		
		echo "$row2 Row $sql2 sql2 <br>";
		while($data2 = mysqli_fetch_array($query2))
		{
			$a=$a+1;
			$sql3 = "update buku set id_buku = concat($data[id_sub],if(length($a)=1,CONCAT('0',$a),$a)) where id_sub = '$data[id_sub]' && id_buku = '$data2[id_buku]'";
			$query3 = mysqli_query($db_link,$sql3);
			echo "$sql3<br>";
		}
	}
	if($query)
	{
		echo "jalan";
	}
	if($query2)
	{
		echo "jalan";
	}
	if($query3)
	{
		echo "jalan";
	}
?>