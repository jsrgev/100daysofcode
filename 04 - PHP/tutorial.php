<?php

echo "PHP Practice";
$f_demonstrative = "This";
$language = "PHP";
$j_name = "Josh";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <style>
	    form {
	    	width: max-content;
	    	display: grid;
	    	grid-template-columns: 1fr 2fr;
	    	gap:  1rem;
	    }
	    form input:last-child {
	    	grid-column: span 2;
	    }
	</style>
  </head>

  <body class="index">

	<p><?php echo $f_demonstrative . " is my first bit of " . $language . " code."; ?></p>
	<form action="tutorial.php" method="get">
		<label>Your state: </label>
		<input type="text" name="state">
		<label>Number 1: </label>
		<input type="number" name="num-1">
		<label>Number 2: </label>
		<input type="number" name="num-2">
		<input type="submit" calue="Submit">
	</form>

	<?php 
		if(isset($_GET) && array_key_exists('state', $_GET)){
			$state = $_GET['state'];
			if(isset($state) && !empty($state)){
				echo 'You live in ' . $state . '<br>';
				echo "$j_name lives in $state<br>";
			}
			if(count($_GET) >= 3){
				$num_1 = $_GET['num-1'];
				$num_2 = $_GET['num-2'];
				echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
				echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
				echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
				echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
				echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
				echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";
			}
		}
	?>

  </body>
  </html>






