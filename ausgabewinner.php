<html>
<head><center><div class="überschrift">Tic-Tac-Toe</div></center></br>
<link rel="stylesheet" href="design_eingabe.css" type="text/css">
<?php
#error_reporting(1);
require_once('dbconnection.php');
connect_to_database();
?>
</head>
<div class="oben"></br>
<body>
<?php
if(isset($_POST['zureingabe'])){ #wenn die Spieler zum TicTacToe wollen...
	session_start();
	$_SESSION['bibuba'] = "set";
	header('Location: tictactoe2.php');
	exit;
}

$query = "SELECT * FROM winner ORDER BY id ASC";     //Abfrage aus der Tabelle users
$db_erg = mysqli_query( $conn, $query ); //$con aus der DBConnection

if ( ! $db_erg ){
	die('DB Connection stimmt nicht!');
}
//$i = 0;
?><center><table class="ausgabetable"> <tr class="ausgabetable"><td class="ausgabetable"><?php
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC)){	
	//$i++;
	echo  $zeile['id'] .". ". $zeile['name'] ." gewann mit ". $zeile['teamxodero'] ."</br>";
	//$spaltenhoch = $zeile['id'];
	$spalte_name = $zeile['name'];
	$spalte_teamxodero = $zeile['teamxodero'];
	//variablenfestlegung für überprüfung ob die db leer ist
	
}
echo "</td></tr></table></center></br>";
$spaltentiefq = "SELECT min(id) FROM winner";
$spaltentiefe = mysqli_query( $conn, $spaltentiefq );
while($spaltentiefee = mysqli_fetch_assoc($spaltentiefe))
{
    $spaltentief = implode(" ", $spaltentiefee);
}
$spaltenhochq = "SELECT max(id) FROM winner";
$spaltenhoche = mysqli_query( $conn, $spaltenhochq );
while($spaltenhochee = mysqli_fetch_assoc($spaltenhoche))
{
    $spaltenhoch = implode(" ", $spaltenhochee);
}
//echo "<embed height='0' width='0' name='sound_file' src='Musik/Lissie-Nothing_Else_Matters_Metallica_live_cover1.mp3' loop='true' hidden='true' autostart='true' />";
if(empty($spaltenhoch) && empty($spalte_name) && empty($spalte_teamxodero)){ //abfrage vor allem weil wenn man auf die Seite kommt und in der DB nichts steht soll dort die Meldung erscheinen
	echo "<center>Die Datenbank enthält keine Werte!</center>";
	$_SESSION['löschbuttonaus'] = "aus";
}ELSE{
	if(isset($_POST['löschbutton'])){ //Wenn Daten aus der DB vollständig und löschbutton gedrückt wurde dann....
		$löscheintragung = $_POST['löscheintrag']; 
		if($löscheintragung != ""){
			$löschquery = "DELETE FROM winner WHERE id = $löscheintragung";
			$db_ergl = mysqli_query( $conn, $löschquery );
			if(!$db_ergl){
				echo "<center>Keine Sonderzeichen!</center>"; //ausnahme weil oben schon eine überprüfung der DB connection gewährleistet ist. (sonst wäre dieser fall ein DB connection error)
			}ELSE{
				if($löscheintragung > $spaltenhoch && $spaltenhoch != ""){
					echo "<center>Zahl ist zu groß. Mach sie kleiner!</center>";
				}ELSE{
					if($löscheintragung < $spaltentief && $spaltentief != ""){
						echo "<center>Zahl ist zu klein. Mach sie größer!</center>";
					}ELSE{
						header('Location: ausgabewinner.php');
					}
				}
			}
		}ELSE{	
			echo "<center>Bitte nicht nichts eingeben!</center>";
		}	
	}
}
?>
</div>
<div class="buttons">
</br>
<center><form action="#" method="post"> <!-- Form für Eingabefeld & Button -->
<input type="input" placeholder="Ziffer des Eintrages"  name="löscheintrag"/> 
<input type="submit" value="Löschen" <?php if(isset($_SESSION['löschbuttonaus'])){ ?> disabled <?php } ?> name="löschbutton"/></form></br>
<form action="ausgabewinner.php" method="post"> <!-- Form für Zur Ausgabe -->
<input type="submit" value="Zum TicTacToe" name="zureingabe"/>
</form></center></br></div>
</body>
</html>

