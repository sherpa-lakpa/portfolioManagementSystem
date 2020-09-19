<!DOCTYPE html>
<html lang="en">

<head>

    <title>Testimonial</title>
    <?php 
        include 'partials/_head.php';
    ?>

</head>

<body>

    <div id="wrapper">

        <?php include 'partials/_navTop.php'; //Contains sidebar too ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Testimonial
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Testimonial
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
            <!-- Body Begins -->

            <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Qouter</th>
                                        <th>Quote</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <?php
                                    foreach ($testimonials as $key => $testimonial) {
                                        echo '<tr>';
                                        echo "<td>{$testimonial->id}</td>";
                                        echo "<td>{$testimonial->qouter}</td>";
                                        echo "<td>{$testimonial->quote}</td>";
                                        echo "<td><a href='?delete=".escape($testimonial->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="eTestimonialBtn'.$testimonial->id.'">Edit</button></td>';
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eTestimonialModal<?php echo $testimonial->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Testimonial</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <label for="qouter">Qouter</label>
                                                    <input type="text" name="qouter" id="qouter" value="<?php echo $testimonial->qouter ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="quote">Quote</label>
                                                    <textarea name="quote" id="quote" rows="5" class="form-control"><?php echo $testimonial->quote ?></textarea>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo $testimonial->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editTestimonial">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eTestimonialBtn<?php echo $testimonial->id ?>").click(function(){
                                        $("#eTestimonialModal<?php echo $testimonial->id ?>").modal();
                                    });
                                });
                                </script>
                                <?php
                                    echo '</tr>';
                                    }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="page-header" style="margin-top: 0px;padding-top: 0px;">
                            <h2 style="margin-top: 0px;padding-top: 0px;">Add Testimonial</h2>
                        </div>
                        <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="qouter" id="qouter" value="<?php echo escape(Input::get('qouter')); ?>" placeholder="Name" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" value="<?php echo escape(Input::get('quote')); ?>" placeholder="Quote" name="quote"></textarea>
                            
                        </div>
                            <input type="submit" value="Add" name="add" class="btn btn-default">
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            <!-- end body -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'partials/_javascript.php'; ?>

</body>

</html>
