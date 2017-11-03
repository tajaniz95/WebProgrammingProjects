<?php
	#Part3: Arrays and Functions.
	$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	for($i = 0; $i < count($month, COUNT_RECURSIVE); $i++){
		echo $month[$i] . " ";
	}
	echo "<br>";
	sort($month);
	for ($i=0; $i < count($month, COUNT_RECURSIVE); $i++) { 
		echo $month[$i] . " ";
	}
	echo "<br>";
	$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	foreach ($month as $day) {
		echo $day . " ";
	}
	echo "<br>";
	sort($month);
	foreach ($month as $day) {
		echo $day . " ";
	}
?>