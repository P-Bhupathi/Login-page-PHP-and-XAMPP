<?php
   session_start();
   include "db_connect.php";
    if( isset($_POST['username']) && isset($_POST['password'])){
        //echo stripslashes("Who\'s Peter Griffin?");
        
        //$str = "This is some <b>bold</b> text.";
        //echo htmlspecialchars($str);

        //trim($str) => removes spaces front and back of the string
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = strtr($data,[' '=>'']);
            return $data;
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        if($username == "" && $password==""){
            header('Location:login.php?error=Enter username and password!');
            exit();
        }
        elseif($username == "" && $password!=""){
            header('Location:login.php?error=Enter username!');
            exit();
        }
        elseif($username != "" && $password==""){
            header('Location:login.php?error=Enter password!');
            exit();
        }
        else{
            //echo "Valid input<br>";
            $sql_query = "select * from users where username='$username' AND password='$password';";
            $result = mysqli_query($db_connect,$sql_query) ;
            if(mysqli_num_rows($result) === 1){
                echo "Hello $username<br>";
                //echo gettype($result); => object datatype
                $row = mysqli_fetch_assoc($result);
                if($row['username']==$username && $row['password']==$password){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    header('Location:loggedin.php');
                    exit();
                }
                else{
                    header('Location:login.php?wrongusrpwd=Wrong username or password!');
                    exit();
                }

            }
            else{
                header('Location:login.php?wrongusrpwd=Wrong username or password!');
                exit();
            }
        }
    }
    else{
        header('Location:login.php');
        exit; // or exit()
    }
?>