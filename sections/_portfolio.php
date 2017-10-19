<!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>
            
            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
              <?php
              $x = 01;
              foreach($portfolios as $portfolio){
              	echo '<div class="columns portfolio-item">
                      <div class="item-wrap">

                         <a href="#modal-'.$x.'" title="">
                            <img alt="" src="'.$portfolio->image.'">
                            <div class="overlay">
                               <div class="portfolio-item-meta">
              					      <h5>'.$portfolio->name.'</h5>
                                  <p>'.$portfolio->category.'</p>
              					   </div>
                            </div>
                            <div class="link-icon"><i class="icon-plus"></i></div>
                         </a>

                      </div>
              		</div> <!-- item end -->';
              $x = $x +  1;
              }
              ?>
            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->
        <?php
        $y = 1;
        foreach($portfolios as $portfolio){
          echo  '<div id="modal-'.$y.'" class="popup-modal mfp-hide">

    		      <img class="scale-with-grid" src="'.$portfolio->mimage.'" alt="" />

    		      <div class="description-box">
    			      <h4>'.$portfolio->name.'</h4>
    			      <p>'.$portfolio->info.'</p>
                   <span class="categories"><i class="fa fa-tag"></i>'.$portfolio->techno.'</span>
    		      </div>

                <div class="link-box">
                   <a href="http://www.behance.net" target="_blank">Details</a>
    		         <a class="popup-modal-dismiss">Close</a>
                </div>

    	      </div><!-- modal-01 End -->';
        $y = $y + 1;
        }
        ?>
      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->