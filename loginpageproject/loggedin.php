<?php 
    session_start();
    if( isset($_SESSION['username']) && isset($_SESSION['id']) ){ ?>
       <html>
        <body>
            <h4><?php echo "Hello, $_SESSION[username]<br>";
                      echo "Your id: $_SESSION[id]<br>";
                ?>
            </h4>
            <a href="logout.php">Logout</a>
        </body>
       </html>
       
    <?php } 
?>