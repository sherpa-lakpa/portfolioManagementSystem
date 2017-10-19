
   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">
                     <?php
                     foreach ($testimonials as $key => $testimonial) {
                        echo '<li>
                              <blockquote>
                                 <p>'.$testimonial->quote.'</p>
                                 <cite>'.$testimonial->qouter.'</cite>
                              </blockquote>
                              </li> <!-- slide ends -->';
                     }
                     ?>
                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->