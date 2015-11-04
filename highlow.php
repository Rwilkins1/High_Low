<?php

if ($argc == 3) {
	if (is_numeric($argv[1]) && is_numeric($argv[2])) {
		if($argv[1] > $argv[2]) {
			$min = $argv[2];
			$max = $argv[1];
		} else {
			$min = $argv[1];
			$max = $argv[2];
		}
	} else {
		die("Please enter a valid argument\n");
	}
	
} else {
	$min = 1;
	$max = 100;
}

$random = mt_rand ($min, $max);
$input = 0.5;
$guesses = 0;

echo "I'm thinking of a number between $min and $max. What is it?\n";
while ($input != $random && $input != "exit") {

	fwrite(STDOUT, "Take a Guess: ");
	$input = trim(fgets(STDIN));

	if ($input == "exit") {
		$guesses++;
		echo "You're a quitter!\n";
		echo "Number of guesses it took you to give up: {$guesses}\n";
	} else if ($input == 0) {
		echo "That is not a valid guess\n";
	} else if ($input < $random) {
		echo "HIGHER\n";
	} else if ($input > $random) {
		echo "LOWER\n";
	} else if ($input == $random) {
		$guesses++;
		echo "GOOD GUESS!!!!!\n";
		echo "Number of Guesses: {$guesses}\n";
	}
	$guesses++;
}


?>