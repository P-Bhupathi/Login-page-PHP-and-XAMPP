<?php 

?>
<html>
	<body>
		<h3>DELETE ACCOUNT</h3>
		<form action="del_row_from_db.php" method="post">
			<?php if(isset($_GET['error'])){ ?>
					<p style="color:red;"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<input type="text" name="username" placeholder="Username">
            <br>
            <br>
			<input type="password" name="password" placeholder="Password">
            <br>
            <br>
			<button type="submit">Delete</button>
		</form>
        <p>----------------------</p>
        <a href="login.php"><button>Login</button></a>
        <a href="new_user.php"><button>Register</button></a>
    </body>
</html>