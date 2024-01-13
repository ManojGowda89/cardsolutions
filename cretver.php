<?php

include_once('connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){
 $uname = $_POST['uname'];
 $userid = $_POST['uid'];
$pass = $_POST['pswd'];
    
   

    if (empty($uname)) {

        header("Location: create_Account.php?error=User Name is required");

        exit();

    }else if(empty($userid)){

        header("Location: create_Account.php?error=userid is required");

        exit();

    }
    else if(empty($pass)){

        header("Location: create_Account.php?error= amount is required");

        exit();

    }
   else{

        $sql = "INSERT INTO `user`(`id`, `name`, `user_name`, `password`) VALUES (NULL,'$uname','$userid','$pass')";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "<script>window.close();</script>";
               

               

            }else{

                header("Location: create_Account.php?error=Incorect User name or password");

                exit();

            }

        }

 }
 else
 {
    header("Location: create_Account.php");

    exit();

    
 }






























?>