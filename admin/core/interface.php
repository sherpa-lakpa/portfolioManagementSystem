<?php
/*
This is initializer for controllers and Views
*/
require_once 'includes/_session.php';
$name = basename(basename($_SERVER['PHP_SELF']), ".php");

include "controllers/{$name}Controller.php";
$class = "{$name}Controller";

${$name} = new $class;

$i = 's';
${$name . $i} = ${$name}->index();

${$name}->delete();

${$name}->create();

${$name}->edit();

if($user->isLoggedIn()){
	include "views/{$name}.php";
}
