<?php

/* Förenklar en redirect funktion, och om fallet är 404 så blir användaren redirectad till error filen som ligger i includes/error/404.php   */

class Redirect{
	public static function to($location = null){
		if($location){
			if(is_numeric($location)){
				switch($location){
					case 404;
						header('HTTP/1.0 404 Not Found');
						include 'includes/errors/404.php';
					break;
				}
			}
			header('location: ' . $location);
			exit();
		}
	}
}