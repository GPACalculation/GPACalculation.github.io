<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="GPA.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<title>GPA Calculator</title>
</head>

<body>
 <div class="navigation">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="Help.html">Help</a></li>
      <li><a id="logo">GPA</a></li>
      <li><a href="Contact.html">Contact-us</a></li>
    </ul>
  </div>
   </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
<?php
if (isset($_POST['submit'])) {
	# code...

$year = $_POST['Year'];
$college = $_POST['options'];
$GPA = $_POST['GPA'];
$upgpa = $_POST['upgpa'];
if ($year == "none1" ) {
	echo "<h1><left>Please Select your academic year</left></h1>";

}
if ($college == "none") {
	# code...
	echo "<h2><left>you should select your college years or high school</left></h2>";
}
if ($GPA <= 0 || $GPA > 4) {
	# code...
	echo "<h1>Please Enter a valid GPA </h1>";

}
if ($upgpa <= 0 || $upgpa > 4) {
	# code...
	echo "<h1>Please Enter a valid GPA</h1>";
}

if($year != "none1" && $college != "none" && $GPA >= 0 && $GPA < 4 && $upgpa >= 0 && $upgpa < 4 ){

	if($college == "year4" && $year != "fifth"){
			echo "<h1>Your results are</h1></br>";

		if ($year == "first") {
			$y = 1;
			$z = 3;
			# code...
		}
		else if ($year == "second") {
			$y =2;
			$z = 2;
			# code...
		}
		else if ($year == "third") {
			
			$y = 3;# code...
			$z = 1;
		}
		else if ($year == "forth") {
			# code...
			$z = 0;
			$y = 4;
		}
		$Actual = $y-1;
		$Actual2 = $z+1;
		$remain = 4-$y;

		if ($remain == 0) {
			# code...
			$remain = 1;
		}
		$year4 = $GPA*$Actual/4+$Actual2;	
		$yeargrad = $GPA*$Actual/4;
		$yearfinal = ($upgpa - $yeargrad)*4/$remain;


		echo "<h3>Maximum GPA which you can score is $year4</h3>";
		echo "<h3>Minimum GPA which you can score is $yeargrad</h3>";
		echo "<h3> Next years' GPA is $yearfinal /year</h3>";
			echo "<h2><center>Thanks for using our website</center></h2>";


	}
	if($college == "year5"){
			echo "<h1>Your results are</h1></br>";

		if ($year == "first") {
			$y = 1;
			$z = 3.2;
			# code...
		}
		else if ($year == "second") {
			$y =2;
			$z = 2.4;
			# code...
		}
		else if ($year == "third") {
			
			$y = 3;# code...
			$z = 1.6;
		}
		else if ($year == "forth") {
			# code...
			$z = 0.8;
			$y = 4;
		}
			else if ($year == "fifth") {
			# code...
			$y = 5;
			$z = 0;
		}
		$Actual = $y-1;
		$Actual2 = $z+0.8;

		$remain = 5-$Actual;
		if ($remain == 0) {
			# code...
			$remain = 1;
		}
		$year4 = $GPA*$Actual/5+$Actual2;	
		$yeargrad = $GPA*$Actual/5;
		$yearfinal = ($upgpa - $yeargrad)*5/$remain;


		echo "<h3>Maximum GPA which you can score is $year4</h3>";
		echo "<h3>Minimum GPA which you can score is $yeargrad</h3>";
		echo "<h3> Next years' GPA is $yearfinal /year</h3>";
	echo "<h2><center>Thanks for using our website</center></h2>";

	}
}


}
if (isset($_POST['submit2'])) {
	# code...
if ($_POST['Highsc'] <= 410 && $_POST['Highsc'] > 0){
	# code...
	$grade = $_POST['Highsc']*4/410;
	echo "<h1>your result is $grade</h1>";
	echo "Thanks for using our website";

}
else{
	echo("<strong>Error</strong>");
	echo "<h1>Please Enter your actual high school grade from range 1 to 409.5 ";
}
}
?>
</body>
</html>
