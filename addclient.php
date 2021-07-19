<?php
//To establish Connection with the database; THESE ARE JUST FOR TESTING! 
// localhost = server address
// root = database username
// Password is empty
// mediatel = name of database
$e_ = mysqli_connect("localhost", "root", "", "mediatel");



//Here we are getting values sent from inputs "client_name", "client_tel" and "client_date" to put them in variables.
$name = $_POST['client_name'];
$tel = $_POST['client_tel'];
$date = $_POST['client_date'];

//Here is the request to add info to the database
$sql_req = "INSERT INTO clients(name_client, tel_client, date_client) VALUES ('$name', '$tel', '$date')";

//Execute
mysqli_query($e_, $sql_req) or die(mysqli_error($e_));

?>