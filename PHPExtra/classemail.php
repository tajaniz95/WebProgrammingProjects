<?php
	$email = "lhenry@gsu.edu.com";
	$target = substr($email, 0, strpos($email, "@"));
	echo $target;
?>