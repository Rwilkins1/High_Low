<?php
$random = mt_rand (1, 100);
$input = 1;
$guesses = 0;
while ($input != $random && $input != "exit" && $input != 0) {
	fwrite(STDOUT, "Take a Guess: ");
	$input = trim(fgets(STDIN));
	if ($input == "exit" || $input == 0) {
		echo "You're a quitter\n";
	} else if ($input < $random) {
		fwrite(STDOUT, "HIGHER\n");
		$guesses++;
	} else if ($input > $random) {
		fwrite(STDOUT, "LOWER\n");
		$guesses++;
	} 
}

if ($input == $random) {
	echo "GOOD GUESS!!!!!\n";
	echo "Number of Guesses: {$guesses}\n";
}


?>