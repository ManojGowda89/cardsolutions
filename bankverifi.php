<?php

include_once('connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){
 $uname = $_POST['uname'];
 $userid = $_POST['uid'];
 $bname = $_POST['bname'];
 $bupi= $_POST['bupi'];
 $bcupi= $_POST['bcupi'];
    
   

    if (empty($uname)) {

        header("Location: home.php?error=User Name is required");

        exit();

    }else if(empty($userid)){

        header("Location: home.php?error=userid is required");

        exit();

    }
    else if(empty($bname)){

        header("Location: home.php?error=bank name is required");

        exit();

    }
    else if(empty($bupi)){

        header("Location: home.php?error=bank upiid is required");

        exit();

    }
    else if(empty($bcupi)){

        header("Location: home.php?error=bankupiid is required");

        exit();
    }else{

        $sql = "INSERT INTO `accounts` (`id`, `name`, `userid`, `bankname`, `upiid`, `cupiid`) VALUES (NULL,'$uname', '$userid', '$bname', '$bupi', '$bcupi');";

        $result = mysqli_query($conn, $sql);

        if ($result) {

               header("Location: payment.php");

               exit();

            }else{

                header("Location: account.php?error=Incorect User name or password");

                exit();

            }

        }

 }
 else
 {
    header("Location: account.php");

    exit();

    
 }






























?>