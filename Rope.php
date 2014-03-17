<?php

/**
 *	@resume		Rope is a php class with basic function for date/url/string format we can use every time.
**/

class Rope {
	
	public static function current_url() {
			$url	=	'http://'.preg_replace('/\?.{1,}/', '', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			if ($url[ strlen($url)-1 ] != '/')		$url 	.=	'/';
			
			return $url;
	}
	
}