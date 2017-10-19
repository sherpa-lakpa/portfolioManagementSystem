<!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">
            <?php foreach ($educations as $key => $education) {
               echo '<div class="row item">

                  <div class="twelve columns">

                     <h3>'.$education->school.'</h3>
                     <p class="info">'.$education->degree.'<span>&bull;</span> <em class="date">'.$education->date.'</em></p>

                     <p>'.$education->info.'</p>

                  </div>

               </div> <!-- item end -->';
            } ?>

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <?php
            foreach ($works as $key => $work) {
               
               echo  '<div class="row item">

                     <div class="twelve columns">

                        <h3>'.$work->company.'</h3>
                        <p class="info">'.$work->post.'<span>&bull;</span> <em class="date">'.$work->date.'</em></p>

                        <p>'.$work->info.'</p>

                     </div>

                  </div> <!-- item end -->';
            }
            ?>

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>Here are my some fields of Expertise which I use to develop new websites/applications, customer relationship management (CRM) applications and develop fantastic content management systems (CMS). Most websites I build can be created with WordPress content management system.
            </p>

				<div class="bars">

				   <ul class="skills">
               <?php 
                  foreach ($skills as $key => $skill) {
					       echo '<li><span class="bar-expand '.$skill->name.'"></span><em>'.$skill->name.'</em></li>';
                      echo '<style type="text/css">
                              .'.$skill->name.' {
                                 width: '.$skill->percentage.'%;
                                 -moz-animation: '.$skill->name.' 2s ease;
                                 -webkit-animation: '.$skill->name.' 2s ease;
                              }
                              @-moz-keyframes illustrator {
                                0%   { width: 0px;  }
                                100% { width: '.$skill->percentage.'%;  }
                              }
                              @-webkit-keyframes '.$skill->name.' {
                                0%   { width: 0px;  }
                                100% { width: '.$skill->percentage.'%;  }
                              }
                           </style>';
                  }
               ?>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->