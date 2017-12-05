<?php session_start();?>
<?php include 'header.php';?>
<head>
	<style>
		* {
		    box-sizing: border-box;
		}

		body {
		    margin: 0;
		    font-family: Arial;
		}

		.header {
		    text-align: center;
		    padding: 32px;
		}

		/* Create four equal columns that floats next to each other */
		.column {
		    float: left;
		    width: 25%;
		    padding: 10px;
		}

		.column img {
		    margin-top: 12px;
		}

		/* Clear floats after the columns */
		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}

		/* Responsive layout - makes a two column-layout instead of four columns */
		@media (max-width: 800px) {
		    .column {
		        width: 50%;
		    }
		}

		/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media (max-width: 600px) {
		    .column {
		        width: 100%;
		    }
		}
		img{
			height: 200px;
			width: 350px;
		}
	</style>

</head>
		
	<div class="row">
		<div class="column">
			<div class="floating-box">Plan a Trip:<a href = "https://www.wikihow.com/Plan-a-Trip"><img src="./Wikiplan.png" alt="Floating Box"></a></div>
			<div class="floating-box">Pinterest Destinations:<a href = "https://www.pinterest.com/categories/travel/"><img src="./pinterest.png" alt="Floating Box"></a></div></div>
		<div class="column">
			<div class="floating-box">Budget Travel:<a href = "https://www.budgettravel.com"><img src="./budgetTravel.png" alt="Floating Box"></a></div>
			<div class="floating-box">Best Place to Buy Tickets:<a href = "https://www.kayak.com"><img src="./Kayak.png" alt="Floating Box"></a></div>
		</div>
		</div>
		
		
		


		
	</body>
</html>