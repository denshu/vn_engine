<?php
include 'lib/includes.php';
/**
TODO (GAME):
	1. Create means of displaying title page


TODO (SCRIPT): 
	1. Decide on format for script to be parsed
	2. Decide how that script should be represented (JSON object in tandem with Game class instance)
	3.

TODO (JSON OBJECT):
	1. Decide on structure

Loading Scenes:
	- function getScene() -> The JS sends an AJAX call to the backend containing the chapter/scene/page data.
	- This will come from the title screen, loading data, or natural progression in the game.
	- The backend will create the view for the requested scene
	- If the 

Loading Branches:
	- function getBranch() -> same as getScene() but only retrieving a particular set of text.
	- 

JS:
	- use global variables to keep track of:
		- chapter number
		- scene number
		- page number
		- current background
		- current number of sprites
		- current sprites
		
**/

$parser = new \lib\controllers\Parser;

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