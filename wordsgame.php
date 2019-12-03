<?php

function count_letter($input) {
	return strlen($input);
}

function letter_game($input) {
	if ($lettercount > 5){
		return strrev(substr($input, 0, 4));
} else {
		return $input;
}
}


echo "Please type a word: ";
$input = rtrim(fgets(STDIN)); 
$userword = $input;
$lettercount = count_letter($input);
$lettergame = letter_game($input);

//echo $userword;
//echo $lettercount;

echo "Your word is {$userword} and the length of the letters are {$lettercount}\n";

echo $lettergame; 

