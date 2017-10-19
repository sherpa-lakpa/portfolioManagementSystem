<?php
/*
This icludes provides all neccessary class and gives arrays
*/
include 'inc/init.php';

echo '<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> 
<!--<![endif]-->';

include 'partials/_head.php';

echo '<body>'; 
	
include 'sections/_header.php';
include 'sections/_about.php';
include 'sections/_resume.php';
include 'sections/_portfolio.php';
include 'sections/_callToAction.php';
include 'sections/_testimonial.php';
include 'sections/_contact.php';

include 'partials/_footer.php';
include 'partials/_javascript.php';
?>
</body>

</html>