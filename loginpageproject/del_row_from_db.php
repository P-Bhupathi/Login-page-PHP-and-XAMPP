<?php
   session_start();
   include "db_connect.php";
    if( isset($_POST['username']) && isset($_POST['password'])){
        $_SESSION['deluser']=$_POST['username'];
        $_SESSION['delpass']=$_POST['password'];
        if($_SESSION['deluser'] == "" && $_SESSION['delpass']==""){
            header('Location:account_delete.php?error=Enter username and password!');
            exit();
        }
        elseif($_SESSION['deluser'] == "" && $_SESSION['delpass']!=""){
            header('Location:account_delete.php?error=Enter username!');
            exit();
        }
        elseif($_SESSION['deluser'] != "" && $_SESSION['delpass']==""){
            header('Location:account_delete.php?error=Enter password!');
            exit();
        }
        else{
            //echo "Valid input<br>";
            $sql_query = "select * from users where username='$_SESSION[deluser]' AND password='$_SESSION[delpass]';";
            $result = mysqli_query($db_connect,$sql_query) ;
            if(mysqli_num_rows($result) === 1){
                $sql_query = "delete from users where username='$_SESSION[deluser]' AND password='$_SESSION[delpass]';";
                mysqli_query($db_connect,$sql_query) ;
                header('Location:deleted_success.php');
                exit();
            }
            else{
                header('Location:account_delete.php?error=Wrong username or password!');
                exit();
            }

        }
    }
    else{
        header('Location:account_delete.php?error=Enter username and password!');
        exit();
    }
?>   