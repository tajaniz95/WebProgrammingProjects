<?php
	#Part4: 10 Best Restaurants according to Trip Advisor.
	$restaurants = array('Chama Gaucha' => 40.50, 'Aviva by Kameel' => 15.00, "Bone's Restaurant" => 65.00, 'Umi Sushi Buckhead' => 40.50,
							'Fandangles' => 30.00, 'Capital Grille' => 60.50, 'Canoe' => 35.50, 'One Flew South' => 21.00, 
							'Fox Bros. BBQ' => 15.00, 'South City Kitchen Midtown' => 29.00
						);
	echo "<table>";
	echo "<th>10 Best Restaurants in Atlanta</th>";
	foreach ($restaurants as $name => $cost) {
		echo "<tr>
			<td>" . $name . " - Average Cost: $" . $cost . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";

	function print_by_price($arr){
		asort($arr);
		table($arr);
	};

	function print_by_name($arr){
		ksort($arr);
		table($arr);
	};

	function table($arr){

		echo "<table>";
		echo "<th>10 Best Restaurants in Atlanta</th>";
		foreach ($arr as $name => $cost) {
			echo "<tr>
				<td>" . $name . " - Average Cost: $" . $cost . "</td>";
			echo "</tr>";
		}
		echo "</table>";

	};

	print_by_price($restaurants);
	echo "<br>";
	print_by_name($restaurants);
?>