<button style="background-color:red" onclick="window.close()">Close page</button>
<hr>


<center><?php echo "custemer_login_details";?></center>
<hr>

<br>
 <h4>Delete any Custemer Detail by Sno</h4>
            <form action="custemer_login_details.php" method="post">
                <input type="number" name="dell">
                <input type="submit" value="Delete">
               
            </form>
            
        <br><hr>

<?php 
include_once('connection.php');
echo "<h4>custemer_login_detail</h4>";

$sqlll= "SELECT * FROM `user`";
$resulttt = mysqli_query($conn,$sqlll);
while($row = mysqli_fetch_assoc($resulttt)){
echo  "Id : " . $row['id']. "<br>". "  Name : ". $row['name'] ."<br>". "  User_Name : ". $row['user_name'] . "<br>"."  Pass_word : ". $row['password'] ;
echo "<br>";
echo "<hr>";
}


?>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
  $dell = $_POST['dell'];
     $sqldel = "DELETE FROM `user` WHERE `user`.`id` = '$dell';";
     mysqli_query($conn,$sqldel);
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

     