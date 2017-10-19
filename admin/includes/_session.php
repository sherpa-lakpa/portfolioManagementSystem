<?php
require_once 'core/init.php';

if (Session::exists(basename($_SERVER["REQUEST_URI"], ".php"))) {
	echo Session::flash(basename($_SERVER["REQUEST_URI"], ".php"));
}

$user = new User;

if(!$user->isLoggedIn()){
	Redirect::to('login.php');
}
