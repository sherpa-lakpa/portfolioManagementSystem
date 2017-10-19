<?php

include 'includes/_session.php';
include 'controllers/homeController.php';

$home = new homeController;
$informations = $home->index();

$messages = $home->msgCount();

$skills = $home->skillCount();

$educations = $home->eduCount();

$works = $home->workCount();

$testimonials = $home->testimonials();

$home->tdelete();

//Edit Home line
$home->editHomeLine();

//Edit About
$home->editAbout();

//Edit Contact
$home->editContact();

//Edit Social
$home->editSocial();

if($user->isLoggedIn()){
	include 'views/index.php';
}
// if($user->hasPermission('admin')){
// 	echo 'you are administrator';
// }
