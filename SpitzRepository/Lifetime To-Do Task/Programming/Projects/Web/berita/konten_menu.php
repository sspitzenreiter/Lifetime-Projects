<?php
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
	echo "<div id='logged'>";
	echo "Hai, <b>".$_SESSION['nama']."</b>!<br><br>";
	echo "<a class='login-tom' href='logout.php'>Logout</a>";
	echo "</div>";
	echo "<div id='logged-foto'>";
	if($_SESSION['foto']){
		echo "<a href='gambar/".$_SESSION['foto']."'><img src='gambar/".$_SESSION['foto']."'></a>";
	}
	echo "</div>";
}else{
?>
					<div id="login-form">
					<fieldset>
					<legend id="login-judul">Login</legend>
					<form action="login.php" method="POST">
						<span>Username</span><br>
						<input class="login-in" type="text" name="username" placeholder="username"><br>
						<span>Password</span><br>
						<input class="login-in" type="password" name="password" placeholder="password"><br>
						<input class="login-tom" type="submit" value="Login">
					</form>
					</fieldset>
					</div>
<?php
}
?>