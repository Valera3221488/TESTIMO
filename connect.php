<?php
$hostname = "localhost";
$username = "root";
$password = "vaker4ik17";  
$dbName = "test";
/*CONNECTION*/

$connection = mysqli_connect($hostname, $username, $password,$dbName) or die ("Не могу создать соединение");

mysqli_select_db($connection, $dbName);
$query="SELECT offers.name,requests.count,requests.price
FROM requests,offers
GROUP BY requests.price ASC ";

$result = mysqli_query($connection,$query) or die(mysql_error());

while($row=mysqli_fetch_row($result)){
    var_dump($row);
    echo "<hr/>";
}




?>