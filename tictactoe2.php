<html>
<head><center><div class="überschrift">Tic-Tac-Toe</div></center>
<link rel="stylesheet" href="design_eingabe.css" type="text/css">
</head>
<body><br>
<div class="oben"></br></br>
<?php 
error_reporting(0);
session_start();

if(!isset($_SESSION['int_count'])) {
	$_SESSION['int_count'] = 0;
}
if(isset($_SESSION['bibuba'])){
	?>
	<center><table><tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	<tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	<tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	</table></center>
	<?php }
unset($_SESSION['bibuba']);
if(isset($_POST['clear'])){ #destroy session
	session_unset();
?>
	<center><table><tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	<tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	<tr><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td><td><center><?php echo "-" ?></center></td></tr>
	</table></center>
<?php	}
#X ist ungerade O ist gerade
#OBEN LINKS 
if(isset($_POST['olinks'])) { #Wenn Button olinks gedrückt wurde
	$_SESSION['olinksSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['olinksSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountlinksoben']= "X";
		#echo $_SESSION['intcountlinksoben'];
	?><center><table>
	<tr><td><center><?php echo $_SESSION['intcountlinksoben']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountlinksoben']= "O";
		#echo $_SESSION['intcountlinksoben'];
	?><center><table>
	<tr><td><center><?php echo $_SESSION['intcountlinksoben']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#OBEN MITTE
if(isset($_POST['omitte'])) { #Wenn Button omitte gedrückt wurde
	$_SESSION['omitteSession'] = "1"; 
	$_SESSION['int_count']++;
	#echo $_SESSION['omitteSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountmitteoben']= "X";
		#echo $_SESSION['intcountmitteoben'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php echo $_SESSION['intcountmitteoben']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountmitteoben']= "O";
		#echo $_SESSION['intcountmitteoben'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php echo $_SESSION['intcountmitteoben']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#OBEN RECHTS
if(isset($_POST['orechts'])) { #Wenn Button orechts gedrückt wurde
	$_SESSION['orechtsSession'] = "1"; 
	$_SESSION['int_count']++;
	#echo $_SESSION['orechtsSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountrechtsoben']= "X";
		#echo $_SESSION['intcountrechtsoben'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsoben']; ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountrechtsoben']= "O";
		#echo $_SESSION['intcountrechtsoben'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsoben']; ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#MITTE LINKS
if(isset($_POST['mlinks'])) { #Wenn Button mlinks gedrückt wurde
	$_SESSION['mlinksSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['mlinksSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountlinksmitte']= "X";
		#echo $_SESSION['intcountlinksmitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php echo $_SESSION['intcountlinksmitte']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountlinksmitte']= "O";
		#echo $_SESSION['intcountlinksmitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php echo $_SESSION['intcountlinksmitte']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#MITTE MITTE
if(isset($_POST['mmitte'])) { #Wenn Button mmitte gedrückt wurde
	$_SESSION['mmitteSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['mmitteSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountmittemitte']= "X";
		#echo $_SESSION['intcountmittemitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php echo $_SESSION['intcountmittemitte']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountmittemitte']= "O";
		#echo $_SESSION['intcountmittemitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php echo $_SESSION['intcountmittemitte']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#MITTE RECHTS
if(isset($_POST['mrechts'])) { #Wenn Button mrechts gedrückt wurde
	$_SESSION['mrechtsSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['mrechtsSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountrechtsmitte']= "X";
		#echo $_SESSION['intcountrechtsmitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsmitte']; ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountrechtsmitte']= "O";
		#echo $_SESSION['intcountrechtsmitte'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsmitte']; ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#UNTEN LINKS
if(isset($_POST['ulinks'])) { #Wenn Button ulinks gedrückt wurde
	$_SESSION['ulinksSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['ulinksSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountlinksunten']= "X";
		#echo $_SESSION['intcountlinksunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php echo $_SESSION['intcountlinksunten']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountlinksunten']= "O";
		#echo $_SESSION['intcountlinksunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php echo $_SESSION['intcountlinksunten']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#UNTEN MITTE
if(isset($_POST['umitte'])) { #Wenn Button olinks gedrückt wurde
	$_SESSION['umitteSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['umitteSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountmitteunten']= "X";
		#echo $_SESSION['intcountmitteunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php echo $_SESSION['intcountmitteunten']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountmitteunten']= "O";
		#echo $_SESSION['intcountmitteunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php echo $_SESSION['intcountmitteunten']; ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php	
	}
}
#UNTEN RECHTS
if(isset($_POST['urechts'])) { #Wenn Button olinks gedrückt wurde
	$_SESSION['urechtsSession'] = "1";
	$_SESSION['int_count']++;
	#echo $_SESSION['urechtsSession'];
	#echo $_SESSION['int_count'];
	if($_SESSION['int_count'] % 2 != 0){
		$_SESSION['intcountrechtsunten']= "X";
		#echo $_SESSION['intcountrechtsunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsunten']; ?></center></td></tr>
	</table></center><?php	
		
	}ELSE{
		$_SESSION['intcountrechtsunten']= "O";
		#echo $_SESSION['intcountrechtsunten'];
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php echo $_SESSION['intcountrechtsunten']; ?></center></td></tr>
	</table></center><?php	
	}
}

$arr = array();#$arr = array("","","","","","","","","");#array zum vergleichen
if(isset($_SESSION['olinksSession'])){#wenn Session gesetzt speicher den Count (X oder O) in Array Feld 0
	$arr[0] = $_SESSION['intcountlinksoben'];
}
if(isset($_SESSION['omitteSession'])){#Speichern in Feld 1
	$arr[1] = $_SESSION['intcountmitteoben'];
}
if(isset($_SESSION['orechtsSession'])){#Speichern in Feld 2
	$arr[2] = $_SESSION['intcountrechtsoben'];
}
if(isset($_SESSION['mlinksSession'])){#Speichern in Feld 3
	$arr[3] = $_SESSION['intcountlinksmitte'];
}
if(isset($_SESSION['mmitteSession'])){#Speichern in Feld 4
	$arr[4] = $_SESSION['intcountmittemitte'];
}
if(isset($_SESSION['mrechtsSession'])){#Speichern in Feld 5
	$arr[5] = $_SESSION['intcountrechtsmitte'];
}
if(isset($_SESSION['ulinksSession'])){#Speichern in Feld 6
	$arr[6] = $_SESSION['intcountlinksunten'];
}
if(isset($_SESSION['umitteSession'])){#Speichern in Feld 7
	$arr[7] = $_SESSION['intcountmitteunten'];
}
if(isset($_SESSION['urechtsSession'])){#Speichern in Feld 8
	$arr[8] = $_SESSION['intcountrechtsunten'];
}

if(isset($_POST['Winner'])){#ausgabe des ergebnisses nachdem der button absenden für db eintrag gedrückt wurde... geht nicht anders.
	?><center><table>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksoben'])){echo "-";}ELSE{echo $_SESSION['intcountlinksoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteoben'])){echo "-";}ELSE{echo $_SESSION['intcountmitteoben'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsoben'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsoben'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksmitte'])){echo "-";}ELSE{echo $_SESSION['intcountlinksmitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmittemitte'])){echo "-";}ELSE{echo $_SESSION['intcountmittemitte'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsmitte'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsmitte'];} ?></center></td></tr>
	<tr><td><center><?php if(!isset($_SESSION['intcountlinksunten'])){echo "-";}ELSE{echo $_SESSION['intcountlinksunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountmitteunten'])){echo "-";}ELSE{echo $_SESSION['intcountmitteunten'];} ?></center></td><td><center><?php if(!isset($_SESSION['intcountrechtsunten'])){echo "-";}ELSE{echo $_SESSION['intcountrechtsunten'];} ?></center></td></tr>
	</table></center><?php
}
$unentschiedenmassage = "Unentschieden";
$winnermassageX = "Gewinner ist der Spieler X.";
#Abfragen für Winner X!
#Horizontal
if($arr[0] == "X" && $arr[1] == "X" && $arr[2] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[3] == "X" && $arr[4] == "X" && $arr[5] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[6] == "X" && $arr[7] == "X" && $arr[8] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";	
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Vertikal
if($arr[0] == "X" && $arr[3] == "X" && $arr[6] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[1] == "X" && $arr[4] == "X" && $arr[7] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[2] == "X" && $arr[5] == "X" && $arr[8] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Diagonal
if($arr[0] == "X" && $arr[4] == "X" && $arr[8] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[2] == "X" && $arr[4] == "X" && $arr[6] == "X"){
	echo "</br><center>".$winnermassageX."</center>";
	$_SESSION['winnerdbeintrag'] = "X";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername X" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Abfragen für Winner O!
#Horizontal
$winnermassageO = "Gewinner ist der Spieler O.";
if($arr[0] == "O" && $arr[1] == "O" && $arr[2] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[3] == "O" && $arr[4] == "O" && $arr[5] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[6] == "O" && $arr[7] == "O" && $arr[8] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Vertikal
if($arr[0] == "O" && $arr[3] == "O" && $arr[6] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[1] == "O" && $arr[4] == "O" && $arr[7] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[2] == "O" && $arr[5] == "O" && $arr[8] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Diagonal
if($arr[0] == "O" && $arr[4] == "O" && $arr[8] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
if($arr[2] == "O" && $arr[4] == "O" && $arr[6] == "O"){
	echo "</br><center>".$winnermassageO."</center>";
	$_SESSION['winnerdbeintrag'] = "O";
	$_SESSION['olinksSession'] = "1";$_SESSION['omitteSession'] = "1";$_SESSION['orechtsSession'] = "1";$_SESSION['mlinksSession'] = "1";$_SESSION['mmitteSession'] = "1";$_SESSION['mrechtsSession'] = "1";$_SESSION['ulinksSession'] = "1";$_SESSION['umitteSession'] = "1";$_SESSION['urechtsSession'] = "1";
	?> <center><form action="#" method="post"></br><input type="input" placeholder="Spielername O" name="Winner"/><input type="submit" name="Eintrag"/></form></center> <?php
	goto KeinUnentschieden;
}
#Keiner Gewonnen? Spiel Unentschieden!!!
if(isset($_SESSION['olinksSession']) && isset($_SESSION['omitteSession']) && isset($_SESSION['orechtsSession']) && isset($_SESSION['mlinksSession']) && isset($_SESSION['mmitteSession']) && isset($_SESSION['mrechtsSession']) && isset($_SESSION['ulinksSession']) && isset($_SESSION['umitteSession']) && isset($_SESSION['urechtsSession'])){
	echo "<br><center>"."Das Spiel ist unentschieden!"."</center>";
}

KeinUnentschieden: #jump point

if(isset($_POST['Winner'])){ #Wenn Button gedrückt Winner schreiben in Datenbank
	##<------ DISABLE BUTTON HIER REIN am 30.04.2017 herausgefunden!!!! Button noch bearbeiten in jeder abfrage oben damit nicht nochmal senden gedrückt wird ----->##
	require_once('dbconnection.php');
	connect_to_database();
if ($conn -> error){ #Wenn keine DB Verbindung da ist dann...
	echo "<center>DB-Verbindung fehlgeschlagen: " . mysqli_connect_error() . "</center>";
}else{
	echo "<center>DB-Verbindung O.K.</center>";
}
	$insert = 'INSERT INTO winner (name,teamxodero) VALUES ("'.$_POST['Winner'].'","'.$_SESSION['winnerdbeintrag'].'");'; #insert befehl für database
if ($conn->query($insert) === TRUE) { #wenn kein Eintrag erstellt werden konnte dann...
    echo "<center>Neuer Eintrag wurde erstellt. Sieh nach!</center>";
} else {
    echo "<center>Eintrag konnte nicht erstellt werden: " . $insert . "</br>" . $conn->error . "</center>";
}
}

if(isset($_POST['zurausgabe'])){ #wenn die Spieler die ausgabe der Gewinner sehen wollen dann...
	session_destroy();
	header('Location: ausgabewinner.php');
	exit;
}
?>
</br></div>
<div class="buttons"><br><center>
<form action="tictactoe2.php" method="post"> <!-- Buttons -->
<input class="fufu" type="submit" value="Zug oben links" <?php if(isset($_SESSION['olinksSession'])){ ?> disabled <?php } ?> name="olinks"/><!--oben links-->
<input type="submit" value="Zug oben mitte" <?php if(isset($_SESSION['omitteSession'])){ ?> disabled <?php } ?> name="omitte"/><!--oben mitte-->
<input type="submit" value="Zug oben rechts" <?php if(isset($_SESSION['orechtsSession'])){ ?> disabled <?php } ?> name="orechts"/><br><!--oben rechts....-->
<input type="submit" value="Zug mitte links" <?php if(isset($_SESSION['mlinksSession'])){ ?> disabled <?php } ?>name="mlinks"/>
<input type="submit" value="Zug mitte mitte" <?php if(isset($_SESSION['mmitteSession'])){ ?> disabled <?php } ?>name="mmitte"/>
<input type="submit" value="Zug mitte rechts" <?php if(isset($_SESSION['mrechtsSession'])){ ?> disabled <?php } ?>name="mrechts"/><br>
<input type="submit" value="Zug unten links" <?php if(isset($_SESSION['ulinksSession'])){ ?> disabled <?php } ?>name="ulinks"/>
<input type="submit" value="Zug unten mitte" <?php if(isset($_SESSION['umitteSession'])){ ?> disabled <?php } ?>name="umitte"/>
<input type="submit" value="Zug unten rechts" <?php if(isset($_SESSION['urechtsSession'])){ ?> disabled <?php } ?>name="urechts"/><br><br>
<input type="submit" value="Clear Challenge" name="clear"/><!-- Clear Sessions -->
<input type="submit" value="Zur Ausgabe" name="zurausgabe"/>
</form></center></br></div>
<div class="werdran">
<h3><center>Wer ist dran?</center></h3></br>
<center>
<?php 
#Alternativ Var für While$maxzuege = 9;
$z = 0;
#Alternativ Punkt in While schleife $z < $maxzuege &&
$var_werdran = "X";
while( $z < count($arr)){
	$z++;
	if($z % 2 != 0){
		$var_werdran = "O";
	}ELSE{
		$var_werdran = "X";
	}
}
if(isset($_SESSION['winnerdbeintrag'])){
	echo "Niemand... Das spiel ist vorbei!";
}ELSE{
	echo $var_werdran;
}
?>
</center>
</div>
</body>
</html>