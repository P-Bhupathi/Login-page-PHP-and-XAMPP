<?php

    session_start();
?>
<html>
    <body>
        <h4>
            <?php
                echo "User account '$_SESSION[deluser]' deleted successfully...";
                session_unset();
                session_destroy(); 
            ?>
        </h4>
        <a href="login.php"><button>Login page</button></a>
        <br>
        <br>
        <a href="new_user.php"><button>Register</button></a>
    </body>
</html>