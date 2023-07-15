<?php

?>

<html>
    <body>
        <h3>New user registration</h3>
        <br>
        <form method="post" action="new_user_into_db.php">
            <?php if(isset($_GET['error'])){ ?>
					<p style="color:red;"><?php echo $_GET['error']; ?></p>
			<?php } ?>
            <input type="text" name="nusername" placeholder="Username">
            <br>
            <input type="password" name="password1" placeholder="Password">
            <br>
            <input type="password" name="password2" placeholder="Confirm Password">
            <br>
            <br>
            <button type="submit">Register</button>
        </form>
        <p>---------------------------------</p>
        <form method="post" action="login.php">
            <button type="submit">User login</button>
        </form>
        <form action="new_user.php">
            <button type="submit">Reset</button>
        </form>
    </body>
</html>