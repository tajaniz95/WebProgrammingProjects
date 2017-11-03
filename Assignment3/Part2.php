<!DOCTYPE html>
<!-- Checkerboard PHP/HTML with CSS. --> 
<html>
<head>
	<title>Checkerboard</title>
	<link href="Part2CheckerboardCSS.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table>
		<tbody>
			<?php
				$rows = 8; 
				$columns = 8; 
		
				for($tr = 1; $tr <= $rows; $tr++) {
					echo "<tr>";
						for($td = 1; $td <= $columns; $td++){
					
							$tb = $tr + $td;
					
							if($tb % 2 == 0) {
								echo '<td class = "black"></td>';
							}else {
								echo '<td class = "red"></td>';
						
							}
						
						}
				}


			?>
		</tbody>
	</table>

</body>
</html>