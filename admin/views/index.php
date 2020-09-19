<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Dashboard</title>
    <?php 
        include 'partials/_head.php';
    ?>
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php include 'partials/_navTop.php'; //Contains sidebar too ?>

        <div id="page-wrapper" style="overflow-x: hidden;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Welcome!! lets edit front page to get you started:</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $messages; ?></div>
                                        <div>Messages</div>
                                    </div>
                                </div>
                            </div>
                            <a href="message.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View all</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $skills; ?></div>
                                        <div>Skills</div>
                                    </div>
                                </div>
                            </div>
                            <a href="skill.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View all</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $educations; ?></div>
                                        <div>Education</div>
                                    </div>
                                </div>
                            </div>
                            <a href="education.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View all</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $works; ?></div>
                                        <div>Works</div>
                                    </div>
                                </div>
                            </div>
                            <a href="work.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View all</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Home Section -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-home fa-fw"></i> Home top line</h3>                               
                                <!-- Trigger the modal with a button -->
                                  <button type="button" class="btn btn-default pull-right" id="eHomeBtn">Edit</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eHomeModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - home line</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                              <div class="form-group">
                                                  <textarea class="form-control" name="home" rows="10"><?php echo $informations->home; ?></textarea>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editHome">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eHomeBtn").click(function(){
                                        $("#eHomeModal").modal();
                                    });
                                });
                                </script>
                                  
                                </div>

                            <div class="panel-body">
                                <p><?php echo $informations->home; ?></p>
                            </div>
                        </div>
                    </div>
                     
                </div>
                
                <!-- About me section -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> About me</h3>                               
                                <!-- Trigger the modal with a button -->
                                  <button type="button" class="btn btn-default pull-right" id="eAboutBtn">Edit</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eAboutModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - About me</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                              <div class="form-group">
                                                  <textarea class="form-control" name="about" rows="10"><?php echo $informations->about; ?></textarea>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editAbout">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eAboutBtn").click(function(){
                                        $("#eAboutModal").modal();
                                    });
                                });
                                </script>
                                  
                                </div>

                            <div class="panel-body">
                                <p><?php echo $informations->about; ?></p>
                            </div>
                        </div>
                    </div>
                     
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i><a href="testimonial.php"> Testimonial</a></h3>
                            </div>
                            <div class="panel-body">
                            <div class="row">
                                <?php
                                foreach($testimonials as $testimonial){
                                    echo '<div class="col-lg-6"><div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="fa fa-comment"></i> '.$testimonial->qouter.' 
                                                <a href="?tdelete='.escape($testimonial->id).'" class="btn btn-default pull-right"><i class="fa fa-trash"></i> Delete</a>
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                        '.$testimonial->quote.'
                                        </div>
                                    </div></div>';
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact and Social section -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Contact</h3>
                                 <!-- Trigger the modal with a button -->
                                  <button type="button" class="btn btn-default pull-right" id="eContactBtn">Edit</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eContactModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content" style="color: black;">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Contact details</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" value="<?php echo $informations->name; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address1">Address1</label>
                                                    <input type="text" name="address1" id="address1" value="<?php echo $informations->address1; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address2">Address2</label>
                                                    <input type="text" name="address2" id="address2" value="<?php echo $informations->address2; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" name="mobile" id="mobile" value="<?php echo $informations->mobile; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email" value="<?php echo $informations->email; ?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="ctoken" value="<?php echo Token::generate(); ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editContact">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eContactBtn").click(function(){
                                        $("#eContactModal").modal();
                                    });
                                });
                                </script>

                            </div>
                            <div class="panel-body">
                                <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <svg class="img-thumbnail img-circle img-responsive" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                    <text transform="matrix(1 0 0 1 168.7834 543.8093)"><tspan x="0" y="0" fill="#FFFF00" font-family="'Verdana-Bold'" font-size="20"></tspan><tspan x="-159.59" y="24" fill="#FFFF00" font-family="'Verdana'" font-size="20"></tspan></text>
                                                    <path fill="#020201" d="M454.426,392.582c-5.439-16.32-15.298-32.782-29.839-42.362c-27.979-18.572-60.578-28.479-92.099-39.085  c-7.604-2.664-15.33-5.568-22.279-9.7c-6.204-3.686-8.533-11.246-9.974-17.886c-0.636-3.512-1.026-7.116-1.228-10.661  c22.857-31.267,38.019-82.295,38.019-124.136c0-65.298-36.896-83.495-82.402-83.495c-45.515,0-82.403,18.17-82.403,83.468  c0,43.338,16.255,96.5,40.489,127.383c-0.221,2.438-0.511,4.876-0.95,7.303c-1.444,6.639-3.77,14.058-9.97,17.743  c-6.957,4.133-14.682,6.756-22.287,9.42c-31.521,10.605-64.119,19.957-92.091,38.529c-14.549,9.58-24.403,27.159-29.838,43.479  c-5.597,16.938-7.886,37.917-7.541,54.917h205.958h205.974C462.313,430.5,460.019,409.521,454.426,392.582z"/>
                                                    </svg>
                                                    <!-- <img src="http://placehold.it/380x500" alt="" class="img-thumbnail img-circle img-responsive" /> -->
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <h4>
                                                        <?php echo $informations->name; ?></h4>
                                                    <small><cite title="San Francisco, USA"><?php echo $informations->address1; ?>
                                                    <?php echo $informations->address2; ?> <i class="glyphicon glyphicon-map-marker">
                                                    </i></cite></small>
                                                    <p>
                                                        <i class="glyphicon glyphicon-envelope"></i> <?php echo $informations->email; ?>
                                                        <br />
                                                        <i class="glyphicon glyphicon-globe"></i> <a href="http://<?php echo $informations->website; ?>"> <?php echo $informations->website; ?></a>
                                                        <br />
                                                        <i class="glyphicon glyphicon-phone"></i> <?php echo $informations->mobile; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-facebook fa-fw"></i> Social Links</h3>
                                
                                 <!-- Trigger the modal with a button -->
                                  <button type="button" class="btn btn-default pull-right" id="eSocialBtn">Edit</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eSocialModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content" style="color: black;">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Social link details</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" name="facebook" id="facebook" value="<?php echo $informations->facebook; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="text" name="twitter" id="twitter" value="<?php echo $informations->twitter; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gplus">Google+</label>
                                                    <input type="text" name="gplus" id="gplus" value="<?php echo $informations->gplus; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="linkedin">LinkedIn</label>
                                                    <input type="text" name="linkedin" id="linkedin" value="<?php echo $informations->linkedin; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="text" name="instagram" id="instagram" value="<?php echo $informations->instagram; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="github">Github</label>
                                                    <input type="text" name="github" id="github" value="<?php echo $informations->github; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="skype">Skype</label>
                                                    <input type="text" name="skype" id="skype" value="<?php echo $informations->skype; ?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="stoken" value="<?php echo Token::generate(); ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editSocial">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eSocialBtn").click(function(){
                                        $("#eSocialModal").modal();
                                    });
                                });
                                </script>


                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="https://<?php echo $informations->facebook; ?>" class="list-group-item">
                                    <span class="badge"><?php echo $informations->facebook; ?></span>
                                        <i class="fa fa-fw fa-facebook"></i> facebook
                                    </a>
                                    <a href="https://<?php echo $informations->twitter; ?>" class="list-group-item">
                                    <span class="badge"><?php echo $informations->twitter; ?></span>
                                        <i class="fa fa-fw fa-twitter"></i> twitter
                                    </a>
                                    <a href="https://<?php echo $informations->gplus; ?>" class="list-group-item">
                                    <span class="badge"><?php echo $informations->gplus; ?></span>
                                        <i class="fa fa-fw fa-google"></i> g+
                                    </a>
                                    <a href="https://<?php echo $informations->linkedin; ?>" class="list-group-item">
                                    <span class="badge"><?php echo $informations->linkedin; ?></span>
                                        <i class="fa fa-fw fa-linkedin"></i> linkedIn
                                    </a>
                                    <a href="https://<?php echo $informations->instagram; ?>" class="list-group-item">
                                    <span class="badge"><?php echo $informations->instagram; ?></span>
                                        <i class="fa fa-fw fa-instagram"></i> instagram
                                    </a>
                                    <a href="https://<?php echo $informations->github; ?>" class="list-group-item">
                                        <span class="badge"><?php echo $informations->github; ?></span>
                                        <i class="fa fa-fw fa-github"></i> github
                                    </a>
                                    <a href="https://<?php echo $informations->skype; ?>" class="list-group-item">
                                        <span class="badge"><?php echo $informations->skype; ?></span>
                                        <i class="fa fa-fw fa-skype"></i> skype
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <?php include 'partials/_javascript.php'; ?>

</body>

</html>
