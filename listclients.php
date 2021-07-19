<?php
//To establish Connection with the database; THESE ARE JUST FOR TESTING! 
// localhost = server address
// root = database username
// Password is empty
// mediatel = name of database
$e_ = mysqli_connect("localhost", "root", "", "mediatel");


//Here is the request to select clients from the database
$sql_req="select * from clients";

//Execute
$query = mysqli_query($e_, $sql_req);


while($row = mysqli_fetch_assoc($query))
{
    $clt = $row['name_client'];
 echo "<option value=".$clt.">".$clt."</option>";
}
?>