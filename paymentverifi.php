<?php

include_once('connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){
 $uname = $_POST['uname'];
 $userid = $_POST['uid'];
 $amount = $_POST['apaid'];
 $order= $_POST['order'];
 $date= $_POST['date'];
    
   

    if (empty($uname)) {

        header("Location: payment.php?error=User Name is required");

        exit();

    }else if(empty($userid)){

        header("Location: payment.php?error=userid is required");

        exit();

    }
    else if(empty($amount)){

        header("Location: payment.php?error= amount is required");

        exit();

    }
    else if(empty($order)){

        header("Location: payment.php?error=order id is required");

        exit();

    }
    else if(empty($date)){

        header("Location: payment.php?error=date is required");

        exit();
    }else{

        $sql = "INSERT INTO `payorder` (`id`, `name`, `userid`, `amount`, `order`, `date`) VALUES (Null, '$uname', '$userid', '$amount', '$order', '$date');";

        $result = mysqli_query($conn, $sql);

        if ($result) {

               header("Location: paymentsucess.php");
        

               exit();

            }else{

                header("Location: payment.php?error=Incorect User name or password");

                exit();

            }

        }

 }
 else
 {
    header("Location: index.php");

    exit();

    
 }






























?>