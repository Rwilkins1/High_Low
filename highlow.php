<?php

if ($argc == 3) {
	if (is_numeric($argv[1]) && is_numeric($argv[2])) {
		if($argv[1] > $argv[2]) {
			$arg1 = $argv[2];
			$arg2 = $argv[1];
		} else {
			$arg1 = $argv[1];
			$arg2 = $argv[2];
		}
	} else {
		die("Please enter a valid argument\n");
	}
	
} else {
	$arg1 = 1;
	$arg2 = 100;
}

$random = mt_rand ($arg1, $arg2);
$input = 0.5;
$guesses = 0;

echo "I'm thinking of a number between $arg1 and $arg2. What is it?\n";
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