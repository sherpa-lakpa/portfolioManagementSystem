<?php
class Session{
	public static function exists($name){
		return (isset($_SESSION[$name])) ? true : false;
	}

	public static function delete($name){
		if (self::exists($name)) {
			unset($_SESSION[$name]);
		}
	}

	public static function get($name){
		return $_SESSION[$name];
	}

	public static function put($name, $value){
		return $_SESSION[$name] = $value;
	}

	public static function flash($name, $string = ''){
		if(self::exists($name)){
			$session = self::get($name);
			self::delete($name);
			return $session;
		}else{
			$message = '<div class="alert alert-success alert-dismissable fade in pull-right">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					    <strong>Success!</strong> '.$string.'
					  </div>';
			self::put($name, $message);
		}
	}
}