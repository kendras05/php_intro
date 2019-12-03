<?php

function count_letter($input) {
	return strlen($input);
}




echo "Please type a word: ";
$input = rtrim(fgets(STDIN)); 
$userword = $input;
$lettercount = count_letter($input);


//echo $userword;
//echo $lettercount;

echo "Your word is {$userword} and the length of the letters are {$lettercount};"

// echo "{$message}\n";

?>

