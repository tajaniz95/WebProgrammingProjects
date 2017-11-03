<?php

#Q1: Display Text

echo '<p><i>"Good morning, Dave," said Hal.</i></p>';

#Q2: Area of a Circle

$radius = 10;
echo "The area of a circle with the radius being 10 is: " . $radius * $radius * M_PI;

echo "<br />";

#Q3: Temperature Conversion

$celFahr = -575.25;
function convert($degrees){
	$celsius = (5/9)*($degrees - 32.00);
	return $celsius;
}
echo convert($celFahr);

echo "<br />";

#Q4: String Variable

$example =  " PHP is fun ";
echo "String has " . strlen(trim($example)) . " characters";

echo "<br />";

#Q5: String Position Function

$sample = "WDWWLWWWLDDWDLL";
$target = "WWW";
$position = strpos($sample, $target);
echo "Target to be determined is: " . substr($sample, $position + 3, 1);

echo "<br />";

#Q6: Palindrome String

$sample = "Able was I ere I saw Elba";
$reverse = " ";
for($i = strlen($sample); $i >= 0; $i--){
	$reverse = $reverse . substr($sample, $i, 1);
}
echo $reverse;
if(strcasecmp($sample, $reverse) == 0){
	echo "The two strings are equal";
}

echo "<br />";

#Q7: Even or Odd

$num = 7;
if($num % 2 == 0){
	echo "Number is even";
}else{
	echo "Number is odd";
}

echo "<br />";

#Q8: Leap Year

if(date(Z) == 1){
	echo "<b>It is</b>";
}else{
	echo "<b>It isn't</b>";
}

?>