<?php
  session_start();
?>
<html>
    <body>

        <h4>
            <?php 
                echo "Hello $_SESSION[nuser], you are successfully registered :-)<br>";
                echo "Your id is: $_SESSION[id]<br>";
                session_unset();
                session_destroy();
            ?>
        </h4>
        <br>
        <form method="post" action="login.php">
            <button type="submit">Login</button>
        </form>
    </body>
</html>