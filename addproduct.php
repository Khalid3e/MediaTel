<?php
//To establish Connection with the database; THESE ARE JUST FOR TESTING! 
// localhost = server address
// root = database username
// Password is empty
// mediatel = name of database
$e_ = mysqli_connect("localhost", "root", "", "mediatel");



//Here we are getting values sent from inputs "client_name", "client_tel" and "client_date" to put them in variables.
$name = $_POST['prod_name'];
$tp = $_POST['prod_type'];
$trait = $_POST['prod_trait'];
$clt = $_POST['prod_client'];
$date = $_POST['prod_date'];

//Here is the request to add info to the database
$sql_req = "INSERT INTO products(name_prod, type_prod, trait_prod, client_prod, date_prod) VALUES ('$name', '$tp', '$trait', '$clt', '$date')";

//Execute
mysqli_query($e_, $sql_req) or die(mysqli_error($e_));

?>