<?php

/* Skapar en klass vid namn hash, som använder php:s egna metoder för att hasha och generera salt  */

class Hash{
	public static function make($string, $salt = ''){
		return hash('sha256', $string . $salt);
	}

	public static function salt($length){
		return mcrypt_create_iv($length);
	}

	public static function unique(){
		return self::make(uniqid());
	}
}