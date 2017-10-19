<?php
	namespace lib\controllers;

	class Parser {
		var $line_num = 0;

		public function line_parse($line) {
			if ($line[0] == '#')
				return;

			return $line . '<br>';

      //   	$word_array = preg_split('/ /', $line);
	    	// foreach ($word_array as $word) {
	    	// 	return $word . '<br>';
	    	// }
		}


	}