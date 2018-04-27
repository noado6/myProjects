<?php
if(isset($_POST['calucate'])){
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$height = (pow($height,2));
	$bmi = $weight/$height."<br>";
	echo "Your BMI is ".$bmi;
	if($bmi < 18.5 && $bmi > 25){
		echo "Your weight is proper.";
		
	}
	else if($bmi > 25){
		echo "You're overweight.";
	}
	else{
		echo "You are underweight.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>BMI Calculator</title>
</head>

<body>
<h1>BMI Calculator</h1>
<form action='' method='post'>
<label for='we'>Weight: (In kg)</label>
<input type='text' name='weight' id='we' placeholder='Weight'>
<label for='he'>Height: (In sm)</label>
<input type='text' name='height' id='he' placeholder='Height'>
<input type='submit' name='calucate' value='Calucate'>
</form>
</body>
</html>