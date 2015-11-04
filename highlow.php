<?php
$random = mt_rand (1, 100);
$input = 0.5;
$guesses = 0;


while ($input != $random && $input != "exit") {

	fwrite(STDOUT, "Take a Guess: ");
	$input = trim(fgets(STDIN));

	if ($input == "exit") {
		echo "You're a quitter!\n";
	} else if ($input == 0) {
		echo "That is not a valid guess\n";
		$guesses++;
	} else if ($input < $random) {
		echo "HIGHER\n";
		$guesses++;
	} else if ($input > $random) {
		echo "LOWER\n";
		$guesses++;
	} 
}

if ($input == $random) {
	echo "GOOD GUESS!!!!!\n";
	echo "Number of Guesses: {$guesses}\n";
}


?>