<!DOCTYPE html>
<html>
<head>
	<title>GPA Calculator</title>
	  <link rel="stylesheet" type="text/css" href="GPA.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
 <div class="navigation">
    <ul>
      <li><a href="Home.html">Home</a></li>
      <li><a href="Help.html">Help</a></li>
      <li><a id="logo" href="index.html">GPA</a></li>
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

<form class="form-style-4" action="" method="post">
<label for="field1">
<span>Enter your Academic year</span><input type="text" name="Year" required="true" />
</label>
</br>
</br>

<label for="field3">
<span>Is your college 4 or 5 years or High school?</span>
<select name="options" required="true">
  <option value="none">-----</option>
  <option value="year4">four years</option>
  <option value="year5">five years</option>
  <option value="Highsc">High school</option>
</select>
</label>
</br>
</br>

<label for="field4">
<span>Enter your current GPA</span><input type="text" name="GPA" required="true" />
</label>
</br>

<label for="field5">
<span>What is the GPA you seek for</span><input type="text" name="upgpa" required="true" />
</label>
</br>

<label>
<span>&nbsp;</span><input type="submit" value="Show result" />
<?php
$year = $_POST['Year'];
$college = $_POST['options'];
$GPA = $_POST['GPA'];
$upgpa = $_POST['upgpa'];

if ($college == "-----") {
	# code...
	echo "<h1><center>you should select your college years or high school</center></h1>";
}
?>
</label>
</form>
</body>
</html>