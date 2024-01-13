<button style="background-color:red" onclick="window.close()">Close page</button>
<hr>


<center><?php echo "Update_Admin_id_And_Password";?></center>
<hr>
  <form action="update_admin_login.php" method="post"><br>
                <input type="text" name="id" placeholder="Admin_id"> <br><br>
                <input type="text" name="pass" placeholder="Admin_password"><br><br>
                <input type="submit" value="update">
                
            </form>
            
        <br><hr>

<?php 
include_once('connection.php');
  echo "Present Admin id And Password";

  $present = "SELECT * FROM `admin`";
  $presentid = mysqli_query($conn,$present);
  $ids = mysqli_fetch_assoc($presentid);
echo "<br>";
  echo $ids['admin_id'];
  echo "<br>";
  echo $ids['admin_password'];


?>

<hr>    




<?php


if($_SERVER['REQUEST_METHOD']== 'POST'){
  $id = $_POST['id'];
  $pass = $_POST['pass'];
     $sql = "UPDATE `admin` SET `id`='1',`admin_id`='$id',`admin_password`='$pass' WHERE 1";
     mysqli_query($conn,$sql);
     echo"<script type='text/javascript'>

     (function()
     {
       if( window.localStorage )
       {
         if( !localStorage.getItem('firstLoad') )
         {
           localStorage['firstLoad'] = true;
           window.location.reload();
         }  
         else
           localStorage.removeItem('firstLoad');
       }
     })();
     
     </script></script>";
}
?>

     