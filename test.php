<?php
	function return_hello(){
		$text = 'Hello World';
		$text = apply_filters('output_hello', $text);
		return $text;
	}

	function new_return_hello($text){
		$text = 'WOW';
		return $text;
	}

	add_filter('output_hello', 'new_return_hello');

?>