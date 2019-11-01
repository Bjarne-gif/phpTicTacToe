<?php
function connect_to_database(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tictactoe_db";
	global $conn;
	$conn = new mysqli($servername, $username, $password, $dbname);

##if ($conn -> error){ #NACH JEDER DB VERBINDUNG MUSS DIES STEHEN!!!
#	echo "DB-Verbindung fehlgeschlagen: " . mysqli_connect_error();
#}else{
#	echo "DB-Verbindung O.K.";
#}
}
?>