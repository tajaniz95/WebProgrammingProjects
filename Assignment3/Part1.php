<?php
	#Part1: Charlie ate my lunch.
	function isBitten(){
		$random = rand(1, 100);
		if($random <= 50){
			echo "Charlie ate my lunch!";
		}
		else{
			echo "Charlie did not eat my lunch!";
		}
	}
	echo isBitten();
?>