<?php
$total = $_POST['Highsc'];
if ($Highsc <= 410 || $Highsc > 0){
	# code...
	$grade = $total*4/410;
	echo "<h1>your result is $grade</h1>";
	echo "thanks for using our website";

}

?>