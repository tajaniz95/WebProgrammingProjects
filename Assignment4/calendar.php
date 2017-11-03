<?php
	date_default_timezone_set('America/New_York');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"calendar.css\">";
	echo "<body>";
		echo "<h1> Current Date and Time is: " .  date("l F j, Y, g:i a") . "</h1>";
		echo "<form action=\"" . $_SERVER['PHP_SELF']."\" method=\"post\" name=\"calendar_generator\">";
		echo "<p><h2>How many hours do you want to see? " . "<input name=\"hours\" type=\"number\" min=\"1\" max=\"24\" value=1>" . "</h2></p>";
		echo "<p><h2><input type=\"submit\" name=\"submit\" value=\"Submit\"></p></h2>";
	echo "</form>";
		if(isset($_POST['submit'])) {
			$hours_to_show = $_POST['hours'];
			$time = date("h:00 A");
			$names = array('Zaheer', 'Asif', 'Illiyan');

			echo "<table id=\"event_table\">";
			for ($i=0; $i <= $hours_to_show; $i++) { 
				if ($i % 2 == 0) {
					echo "<tr class=\"even_row container\">";
				}
				else{
					echo "<tr class=\"odd_row container\">";
				}
				echo "<th class=\"table_header\">" . get_time($i) . "</th>";
				foreach ($names as $name) {
				 	echo "<td class=\"hr_td\">" . $name . "</td>";
				}
				echo "</tr>"; 
			}
			echo "</table>";
		 }
	echo "</body>";
?>

<?php
	function get_time($increment){
		$local_time = new DateTime($time);
		$local_time->modify('+' . $increment . ' hour');
		return $local_time->format("h:00 a");
	}
?>