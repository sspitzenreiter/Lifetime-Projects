<?php

	$awal = $_POST['awal'];
	$akhir = $_POST['akhir'];
	
	if (isset($_POST['premium'])) 
	{
	$premium = $_POST['premium'];
	}
	if (isset($_POST['pertamax'])) 
	{
	$pertamax = $_POST['pertamax'];
	}
	if (isset($_POST['solar'])) 
	{
	$pertamax = $_POST['solar'];
	}
		
		
		
		
		?>
		<html>
			<head>
				<title>Hasil Perhitungan</title>
			</head>
				<body>
				<table>
				<tr>
				<td>LITER</td>
				<?php
						if (isset($_POST['premium'])) 
						{
							echo "<td>Premium</td>";
						}
						if (isset($_POST['pertamax'])) 
						{
							echo "<td>Pertamax</td>";
						}
						if (isset($_POST['solar'])) 
						{
							echo "<td>Solar</td>";
						}
					?>
				</tr>
				
						<?php
								for($i=$awal;$i<=$akhir;$i++)
								{
									$pre = $i * 7300;
									$per = $i * 9300;
									$sol = $i * 6900;
					
					
				echo "
							<tr>
									<td>$i</td>";
									if (isset($_POST['premium'])) 
									{
									echo "<td>$pre</td>";
									}
									
									if (isset($_POST['pertamax'])) 
									{
									echo "<td>$per</td>";
									}
								
									if (isset($_POST['solar'])) 
									{
									echo "<td>$sol</td>";
									}
									echo "</tr>";
								}
							?>
				</table>
				</body>
				</html>