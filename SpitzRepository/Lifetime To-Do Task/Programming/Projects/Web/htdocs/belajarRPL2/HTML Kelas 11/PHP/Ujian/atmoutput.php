<html>
	<body>
		<?php
			$pin=$_REQUEST['pin'];
			$pin2="14045";
			$a=$_REQUEST['lim'];
			if($pin!=$pin2 && $a<3)
				include "site2b.php";
			else
			if($pin==$pin2 && $a<=3)
				include "site2c.php";
			else
				include "site2d.php";
			
			
			
		?>
	</body>
</html>