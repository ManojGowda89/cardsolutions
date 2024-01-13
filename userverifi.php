<?php


include_once('connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){



    $uname = $_POST['uname'];

    $pass = $_POST['pswd'];

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {


                header("Location: home.php");

                exit();

            }else{

                header("Location: userlogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: userlogin.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}




























?>