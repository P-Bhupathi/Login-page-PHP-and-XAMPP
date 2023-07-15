<?php 

?>
<html>
	<body>
		<h3>LOGIN</h3>
		<form action="auth.php" method="post">
			<?php if(isset($_GET['error'])){ ?>
					<p style="color:red;"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<?php if(isset($_GET['wrongusrpwd'])){ ?>
					<p style="color:red;"><?php echo $_GET['wrongusrpwd']; ?></p>
			<?php } ?>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit">Login</button>
		</form>
		<br>
		<form action="login.php" method="post">
			<button type="submit">Reset</button>
		</form>
		<form action="new_user.php" method="post">
			<button type="submit">New user</button>
		</form>
		<form action="account_delete.php" method="post">
			<button type="submit">Delete account</button>
		</form>
	</body>
</html>