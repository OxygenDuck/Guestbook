<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "guestbook";

$connect = mysqli_connect($servername,$username,$password,$dbName);

//see if connection is succesful or not
if (!$connect) {
  die('error connecting to database');
}

//heroes
$query = "SELECT * FROM data;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$data = array();

while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

//close the connection to the Database
mysqli_close($connect);

//dump all the data !DEBUG!
function myDump($var, $varname = false)
{
	echo "<pre id=\"dump\">";
	if($varname)
	{
		echo "<h2>" . $varname . "</h2>";
	}
	var_dump($var);
	echo "</pre>";
}

//myDump($data, "Data:");
 ?>
