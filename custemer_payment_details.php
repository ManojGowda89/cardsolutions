<button style="background-color:red" onclick="window.close()">Close page</button>
<hr>


<center><?php echo "custemer_payment_details ";?></center>
<hr>

<br>
 <h4>Delete any Custemer Detail by Sno</h4>
            <form action="custemer_payment_details.php" method="post">
                <input type="number" name="dell">
                <input type="submit" value="Delete">
            </form>
           
        <br><hr>


<?php
include_once('connection.php');
echo "<h4>custemer_payment_details </h4>";

$sql= "SELECT * FROM `accounts`";

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result) ){
echo  "id : " . $row['id']. "<br>". "  Name : ". $row['name'] . "<br>"."  userid : ". $row['userid'] .  "<br>"."  Bank name : ".$row['bankname'] . "<br>"."UPI ID : ". $row['upiid']. "<br>". "   Amount : ".$row['cupiid']; 
echo "<br>";
echo "<hr>";
}

?>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
  $dell = $_POST['dell'];
     $sqldel = "DELETE FROM `accounts` WHERE `accounts`.`id` = '$dell';";
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
     
     </script>";
}
?>
