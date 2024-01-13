<?php 

include_once('connection.php');
 $sqll= "SELECT * FROM `admin`";
 $res= mysqli_query($conn,$sqll);
 $admin = mysqli_fetch_assoc($res);
 $user_name =$admin['admin_id'];
 $password =$admin['admin_password'];
?>


<?php


if($_SERVER['REQUEST_METHOD']== 'POST'){
    
        $uname = $_POST['uname'];
    
        $pass = $_POST['pswd'];
    
        if (empty($uname)) {
    
            header("Location: login.php?error=User Name is required");
    
            exit();
    
        }else if(empty($pass)){
    
            header("Location: login.php?error=Password is required");
    
            exit();
    
        }else{
    
            $sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
           
    
            if ($user_name || $password) {
    
               
    
                if ($user_name === $uname && $password === $pass) {
    
                    header("Location: admin.php");
    
                    exit();
    
                }else{
    
                    header("Location: adminlogin.php?error=Incorect User name or password");
    
                    exit();
    
                }
    
            }else{
    
                header("Location: adminlogin.php?error=Incorect User name or password");
    
                exit();
    
            }
    
        }
    
    }else{
    
        header("Location: adminlogin.php");
    
        exit();
    
}




























?>