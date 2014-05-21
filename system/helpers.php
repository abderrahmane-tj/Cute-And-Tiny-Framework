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
function url_to($part){
  return BASE_URL.$part;
}

function redirect($part){
	header('Location:'.url_to($part));
	exit;
}
function slugify($text){
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
  // trim
  $text = trim($text, '-');
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  // lowercase
  $text = strtolower($text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);
  if (empty($text)){
    return 'n-a';
  }
  return $text;
}
// replace line breaks with paragprahes :
// I was walking\n and then I fell
// <p>I was walking</p><p>and then I fell</p>
function nl2p($string){
  $string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);
  return '<p>'.preg_replace("/([\n]{1,})/i", "</p>\n<p>", trim($string)).'</p>';
}