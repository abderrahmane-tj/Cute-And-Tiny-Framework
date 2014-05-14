<?php


function ppre(){
	$args = func_get_args();
	foreach($args as $arg){
		echo '<pre>';
		if(gettype($arg) == 'array' || gettype($arg) == 'object'){
			print_r($arg);
		} else {
			echo $arg;
		}
		echo '</pre>'."\n";
	}
}
