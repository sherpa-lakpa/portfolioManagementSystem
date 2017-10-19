<?php 
// error_reporting(0);
require_once 'admin/classes/DB.php';
require_once 'admin/classes/Config.php';
require_once 'admin/classes/Modal.php';
require_once 'admin/core/config.php';

/*
Creates array for Home
*/
require_once 'admin/classes/Home.php';
$home = new Home;
// Use this array for various home sections
$informations = $home->index()->data();


/*
Creates array for Education
*/
require_once 'admin/classes/Education.php';
$education = new Education;
$education->index();
$educations = $education->data();

/*
Creates array for Skills
*/
require_once 'admin/classes/Skill.php';
$skill = new Skill;
$skill->index();
$skills = $skill->data();

/*
Creates array for Work
*/
require_once 'admin/classes/Work.php';
$work = new Work;
$work->index();
$works = $work->data();

/*
Creates array for Work
*/
require_once 'admin/classes/Portfolio.php';
$portfolio = new Portfolio;
$portfolio->index();
$portfolios = $portfolio->data();


/*
Creates array for Testimonial
*/
require_once 'admin/classes/Testimonial.php';
$testimonial = new Testimonial;
$testimonial->index();
$testimonials = $testimonial->data();

