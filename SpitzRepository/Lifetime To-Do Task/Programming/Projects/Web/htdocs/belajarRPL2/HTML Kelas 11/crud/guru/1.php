<html>
	<body>
		<table>
			<tr>
				<td>Username</td>
				<td>Password</td>
			</tr>
			<?php 
			   $username="root";
			   $password="";
			   $db="task_new";
			   $host="localhost";
			   $db_link=mysqli_connect($host,$username,$password,$db);
			   
			   $query="select * from account";
			   $query_exec=mysqli_query($db_link,$query);
			   while($data=mysqli_fetch_array($query_exec))
			   {
				   echo "<tr>
							<td>$data[user]</td>
							<td>$data[password]</td>
							</tr>";
			   }
			   
			   ?>
				
		</table>
	</body>
</html>