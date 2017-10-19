

   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">
                     Get in touch using this form or feel free to email me at sherpalakpa18@gmail.com . If you are inquiring about working with me on a project, please try to provide a few details about your project if at all possible (e.g. requirements, budget, timeline, etc.).

                     I try to respond to all emails and calls as promptly as possible, but during busy times it may take up to a week for me to respond. If you don’t receive a response to an email within a week, please send another message as my spam blocking software may have grabbed your email.

                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">
               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
               <fieldset>

                  <div>
                     <label for="contactName">Name <span class="required">*</span></label>
                     <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
                     <label for="contactEmail">Email <span class="required">*</span></label>
                     <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
                     <label for="contactSubject">Subject</label>
                     <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

               </fieldset>
               </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
                  <p class="address">
                     <span><?php echo $informations->name; ?></span><br>
                     <span><?php echo $informations->address1; ?><br>
                           <?php echo $informations->address2; ?>
                     </span><br>
                     <span><?php echo $informations->mobile; ?></span><br>
                     <span><?php echo $informations->email; ?></span>
                  </p>

				   </div>

               <div class="widget widget_tweets">

             <!--      <h4 class="widget-title">Latest Tweets</h4>
             
             <ul id="twitter">
                <li>
                   <span>
                   This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                   Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                   <a href="#">http://t.co/CGIrdxIlI3</a>
                   </span>
                   <b><a href="#">2 Days Ago</a></b>
                </li>
                <li>
                   <span>
                   Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                   eaque ipsa quae ab illo inventore veritatis et quasi
                   <a href="#">http://t.co/CGIrdxIlI3</a>
                   </span>
                   <b><a href="#">3 Days Ago</a></b>
                </li>
             </ul> -->

		         </div>

            </aside>

      </div>

   </section> <!-- Contact Section End