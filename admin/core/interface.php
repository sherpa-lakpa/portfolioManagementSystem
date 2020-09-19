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

if($name != 'message'){
	include "controllers/messageController.php";
	$message = new messageController;
	$message_list = $message->index();
}else{
	$message_list = $messages;
}

if($user->isLoggedIn()){
	include "views/{$name}.php";
}
