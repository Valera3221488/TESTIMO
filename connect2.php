<?php
$hostname = "localhost";
$username = "root";
$password = "vaker4ik17";  
$dbName = "test";
/*CONNECTION*/

$connection2 = mysqli_connect($hostname, $username, $password,$dbName) or die ("Не могу создать соединение");

mysqli_select_db($connection2, $dbName);
$query2="SELECT requests.offer_id,requests.price,requests.count,requests.id,offers.name,operators.fio FROM requests JOIN offers ON requests.offer_id= offers.id JOIN operators ON requests.operator_id = operators.id WHERE requests.count>2 AND operators.id IN ( 10,12)";

$result2 = mysqli_query($connection2,$query2) or die(mysql_error());

while($row2=mysqli_fetch_row($result2)){
    var_dump($row2);
    echo "<hr/>";
}


?>