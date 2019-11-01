<html>
<head>Tic-Tac-Toe</head>
<body>
<br><br>

<form action="form.php" method="post"> <!-- Eingabe Felder -->
	<input type="text" name="lo"/> <input type="text" name="mo"/> <input type="text" name="ro"/><br><!--OBEN-->
	<input type="text" name="lm"/> <input type="text" name="mm"/> <input type="text" name="rm"/><br><!--MITTE-->
	<input type="text" name="lu"/> <input type="text" name="mu"/> <input type="text" name="ru"/><br><br><!--UNTEN-->
	<input type="submit" value="Zug" name="submit"/><!--Zug-->
	<input type="submit" value="Clear Challenge" name="clear"/><!--Clear Session-->
</form>	
<?php #programm
session_start();
$lo = "";$mo = "";$ro = ""; #erstelle variablen um fehler zu vermeiden
$lm = "";$mm = "";$rm = "";
$lu = "";$mu = "";$ru = "";

if(isset($_POST['clear'])){ #destroy session
	session_destroy();
	?><table>
	<tr><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?> |</td></tr>
	<tr><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?> |</td></tr>
	<tr><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?></td><td>| <?php echo "-" ?> |</td></tr>
	</table><?php
}

if(isset($_POST['submit'])){ #starte spiel
$lob = $_POST['lo'];$mob = $_POST['mo'];$rob = $_POST['ro']; #hole input der felder
$lmi = $_POST['lm'];$mmi = $_POST['mm'];$rmi = $_POST['rm'];
$lun = $_POST['lu'];$mun = $_POST['mu'];$run = $_POST['ru'];

if($lob != ""){ #links oben
	$lo = "-";	
	$lo = $lob;
	$_SESSION['lo'] = $lo;
}
if ($lo == ""){ #links oben
	if(!isset($_SESSION['lo'])){
		$lo = "-";
	}else{
		$lo = $_SESSION['lo'];	
	}
}

if ($mob != ""){ #mitte oben
	$mo = "-";	
	$mo = $mob;
	$_SESSION['mo'] = $mo;
}
if ($mo == ""){ #mitte oben
	if(!isset($_SESSION['mo'])){
		$mo = "-";
	}else{
		$mo = $_SESSION['mo'];	
	}
}

if ($rob != ""){ #rechts oben
	$ro = "-";	
	$ro = $rob;
	$_SESSION['ro'] = $ro;
}
if ($ro == ""){ #rechts oben
	if(!isset($_SESSION['ro'])){
		$ro = "-";
	}else{
		$ro = $_SESSION['ro'];	
	}
}

if ($lmi != ""){ #links mitte
	$lm = "-";	
	$lm = $lmi;
	$_SESSION['lm'] = $lm;
}
if ($lm == ""){ #links mitte
	if(!isset($_SESSION['lm'])){
		$lm = "-";
	}else{
		$lm = $_SESSION['lm'];	
	}
}

if ($mmi != ""){ #mitte mitte
	$mm = "-";	
	$mm = $mmi;
	$_SESSION['mm'] = $mm;
}
if ($mm == ""){ #mitte mitte
	if(!isset($_SESSION['mm'])){
		$mm = "-";
	}else{
		$mm = $_SESSION['mm'];	
	}
}

if ($rmi != ""){ #rechts mitte
	$rm = "-";	
	$rm = $rmi;
	$_SESSION['rm'] = $rm;
}
if ($rm == ""){ #rechts mitte
	if(!isset($_SESSION['rm'])){
		$rm = "-";
	}else{
		$rm = $_SESSION['rm'];	
	}
}

if ($lun != ""){ #links unten
	$lu = "-";	
	$lu = $lun;
	$_SESSION['lu'] = $lu;
}
if ($lu == ""){ #links unten
	if(!isset($_SESSION['lu'])){
		$lu = "-";
	}else{
		$lu = $_SESSION['lu'];	
	}
}

if ($mun != ""){ #mitte unten
	$mu = "-";	
	$mu = $mun;
	$_SESSION['mu'] = $mu;
}
if ($mu == ""){ #mitte unten
	if(!isset($_SESSION['mu'])){
		$mu = "-";
	}else{
		$mu = $_SESSION['mu'];	
	}
}

if ($run != ""){ #rechts unten
	$ru = "-";	
	$ru = $run;
	$_SESSION['ru'] = $ru;
}
if ($ru == ""){ #rechts unten
	if(!isset($_SESSION['ru'])){
		$ru = "-";
	}else{
		$ru = $_SESSION['ru'];	
	}
}
?>

<table> <!-- Ausgabe Table -->
<tr><td>| <?php echo $lo ?></td><td>| <?php echo $mo ?></td><td>| <?php echo $ro ?> |</td></tr>
<tr><td>| <?php echo $lm ?></td><td>| <?php echo $mm ?></td><td>| <?php echo $rm ?> |</td></tr>
<tr><td>| <?php echo $lu ?></td><td>| <?php echo $mu ?></td><td>| <?php echo $ru ?> |</td></tr>
</table>

<?php #Gewinnernachichten IF-Abfragen an Table
$nachichtanX = "<br><br>Das Geschäft läuft! Spieler X hat gewonnen!";
$nachichtanO = "<br><br>Das Geschäft läuft! Spieler O hat gewonnen!";

### HORIZONTAL WINNER
if($lo == "x" && $mo == "x" && $ro == "x"){ #oben horizontal x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($lo == "o" && $mo == "o" && $ro == "o"){ #oben horizontal o gewonnen
	echo $nachichtanO;
	session_destroy();
}

if($lm == "x" && $mm == "x" && $rm == "x"){ #mitte horizontal x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($lm == "o" && $mm == "o" && $rm == "o"){ #mitte horizontal o gewonnen
	echo $nachichtanO;
	session_destroy();
}

if($lu == "x" && $mu == "x" && $ru == "x"){ #unten horizontal x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($lu == "o" && $mu == "o" && $ru == "o"){ #unten horizontal o gewonnen
	echo $nachichtanO;
	session_destroy();
}

### DIAGONAL WINNER
if($lo == "x" && $mm == "x" && $ru == "x"){ #diagonal links oben nach rechts unten x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($lo == "o" && $mm == "o" && $ru == "o"){ #diagonal links oben nach rechts unten o gewonnen
	echo $nachichtanO;
	session_destroy();
}

if($ro == "x" && $mm == "x" && $lu == "x"){ #diagonal rechts oben nach links unten x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($ro == "o" && $mm == "o" && $lu == "o"){ #diagonal rechts oben nach links unten o gewonnen
	echo $nachichtanO;
	session_destroy();
}

### VERTIKAL WINNER
if($lo == "x" && $lm == "x" && $lu == "x"){ #vertikal links oben nach links unten x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($lo == "o" && $lm == "o" && $lu == "o"){ #vertikal links oben nach links unten o gewonnen
	echo $nachichtanO;
	session_destroy();
}

if($mo == "x" && $mm == "x" && $mu == "x"){ #vertikal mitte oben nach mitte unten x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($mo == "o" && $mm == "o" && $mu == "o"){ #vertikal mitte oben nach mitte unten o gewonnen
	echo $nachichtanO;
	session_destroy();
}

if($ro == "x" && $rm == "x" && $ru == "x"){ #vertikal rechts oben nach rechts unten x gewonnen
	echo $nachichtanX;
	session_destroy();
}

if($ro == "o" && $rm == "o" && $ru == "o"){ #vertikal rechts oben nach rechts unten o gewonnen
	echo $nachichtanO;
	session_destroy();
}

}?>
</body>
</html>