<?php
    session_start();
    include "db_connect.php";
   
    if( (isset($_POST['nusername']) && isset($_POST['password1']) && isset($_POST['password2'])) && ($_POST['password1']==$_POST['password2']) 
        &&  $_POST['nusername']!='' && $_POST['password1']!='')
    {
        $_SESSION['nuser']=$_POST['nusername'];
        $_SESSION['pass1']=$_POST['password1'];
        $_SESSION['pass2']=$_POST['password2'];
        try{
                $query = "select id from users where username='$_SESSION[nuser]';";
                $result = mysqli_query($db_connect,$query);
                if( mysqli_num_rows($result) == 1){
                    Header("Location:new_user.php?error=User already exists!");
                    exit;
                }
                $query = "insert into users values('','$_SESSION[nuser]','$_SESSION[pass1]');";
                $result = mysqli_query($db_connect,$query);

                $query2 = "select id from users where username='$_SESSION[nuser]';";
                $result2 = mysqli_query($db_connect,$query2);
                $row = mysqli_fetch_assoc($result2);
                $_SESSION['id']=$row['id'];
                Header("Location:registered_success.php?id=$_SESSION[id]");
                exit();
                //echo "Registered successfully...";
        }
        catch(Exception $e){
                Header("Location:new_user.php?error=User already existed!");
                exit;
        }
    }
    elseif($_POST['nusername']!='' && ($_POST['password1']!=$_POST['password2'])){
        Header("Location:new_user.php?error=Retype password!");
        exit;
    }
    elseif($_POST['nusername']==''){
        Header("Location:new_user.php?error=Enter username!");
        exit;
    }
    elseif($_POST['nusername']!='' && ($_POST['password1']==''&&$_POST['password2']=='')){
        Header("Location:new_user.php?error=Enter password!");
        exit;
    }
?>