<button style="background-color:red" onclick="window.close()">Close page</button>
<hr>


<center><?php echo "custemer_order_details ";?></center>
<hr>

<br>
 <h4>Delete any Custemer Detail by Sno</h4>
            <form action="custemer_order_details.php" method="post">
                <input type="number" name="dell">
                <input type="submit" value="Delete">
            </form>
           
        <br><hr>


<?php
include_once('connection.php');
echo "<h4>  custemer_order_details</h4>";

$sql= "SELECT * FROM `payorder`";

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result) ){
echo  "id : " . $row['id']. "<br>". "  Name : ". $row['name'] . "<br>"."  userid : ". $row['userid'] .  "<br>"."  Amount : ".$row['amount'] . "<br>"."order Number : ". $row['order']. "<br>". "   Date : ".$row['date']; 
echo "<br>";
echo "<hr>";
}

?>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
  $dell = $_POST['dell'];
     $sqldel = "DELETE FROM `payorder` WHERE `payorder`.`id` = '$dell';";
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
