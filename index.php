<?php
include 'lib/includes.php';
/**
TODO: 
	1. Decide on format for script to be parsed
	2. Decide how that script should be represented (JSON object?)
**/

$parser = new \lib\Parser;

// Begin parsing script file. Here goes nothing!

if ($file = fopen('example.txt', 'r')) {
	// While it hasn't reached the end of the file
    while (!feof($file)) {
    	// Increment the line number
    	$parser->line_num++;

    	// Get line ()
        $line = fgets($file);

        // Ignore lines beginning with a hash mark, i.e. a comment
        echo $parser->line_parse($line);

    	// Output the line number, regardless
    	// echo '(line number: ' . $parser->line_num . ')<br>';

    }
    fclose($file);
}

$new = new \lib\Parser;
$new->line_num = 4;

echo $new->line_num;