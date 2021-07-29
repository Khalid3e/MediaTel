<?php
//To establish Connection with the database; THESE ARE JUST FOR TESTING! 
// localhost = server address
// root = database username
// Password is empty
// mediatel = name of database
$e_ = mysqli_connect("localhost", "root", "", "mediatel");


//Here is the request to select clients from the database
$sql_req="select * from products";

//Execute
$query = mysqli_query($e_, $sql_req);


echo '<div class="info" style="width: 100%; margin: 3px; padding: 3px;">';
echo '<table width="100%" class="tb">';
echo '<thead>';

echo '<tr>';
echo '<td>Nom de client :</td>';
echo '<td>Nom de produit :</td>';
echo '<td>Type de produit :</td>';
echo '</tr>';
echo '</thead>';

echo '<tbody>';

$i = 1;

while($row = mysqli_fetch_assoc($query))
{
    echo '<tr id="l'. $i .'">';

    $client = $row['client_prod'];
    echo "<td>".$client."</td>";
    $name = $row['name_prod'];
    echo "<td>".$name."</td>";
    $type = $row['type_prod'];
    echo "<td>".$type."</td>";
    echo '</tr>';
    echo '<tr>';
    $trait = $row['trait_prod'];
    echo '<td colspan="3"><p id="d'. $i .'">'.$trait."</p></td>";
    echo '</tr>';
    $i = $i + 1;
}
echo '</tbody>';

echo '</table>';
echo "</div>";
echo "<script>console.log('Hello 1');</script>";

/*
echo '<div class="info">';
echo '<p>Nom de produit :</p>';
while($row = mysqli_fetch_assoc($query))
{
    
}
echo "</div>";


echo '<div class="info">';
echo '<p>Type de produit :</p>';
while($row = mysqli_fetch_assoc($query))
{
   
}
echo "</div>";*/

?>