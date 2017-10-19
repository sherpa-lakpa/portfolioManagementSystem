<!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm <?php echo $informations->name; ?>.</h1>
            <h3><?php echo $informations->home; ?></h3>
            <hr />
            <ul class="social">
               <li><a href="https://<?php echo $informations->facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://<?php echo $informations->twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://<?php echo $informations->gplus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="https://<?php echo $informations->linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://<?php echo $informations->instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
               <li><a href="https://<?php echo $informations->github; ?>" target="_blank"><i class="fa fa-github"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->