<!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p><?php echo $informations->about; ?>
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span><?php echo $informations->name; ?></span><br>
						   <span><?php echo $informations->address1; ?><br>
						         <?php echo $informations->address2; ?>
                     </span><br>
						   <span><?php echo $informations->mobile; ?></span><br>
                     <span><?php echo $informations->email; ?></span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="CURRICULUM-VITAE.pdf" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->