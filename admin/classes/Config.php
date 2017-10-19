<?php 
class Config{
	public static function get($path = null){
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/', $path);	// print_r($path);

			foreach ($path as $key => $bit) {
				// This simply checks array key and goes dipper of value.
				if(isset($config[$bit])){
					$config = $config[$bit];
				}
			}
			return $config;
		}
		return false;
	}
}