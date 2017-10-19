<!DOCTYPE html>
<html lang="en">

<head>

    <title>Education</title>
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
                            Education
                        </h1>                             
                        <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-default pull-right" id="addBtn">Add</button>

                          <!-- Modal -->
                          <div class="modal fade" id="addModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title" style="text-align: center;">Add - education</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <label for="school">School</label>
                                            <input type="text" name="school" id="school" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="degree">Degree</label>
                                            <input type="text" name="degree" id="degree" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="text" name="date" id="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="info">Info</label>
                                            <textarea name="info" id="info" class="form-control" rows="5"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" class="btn btn-default" value="Add" name="addEducation">
                                  </form>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        <script>
                        $(document).ready(function(){
                            $("#addBtn").click(function(){
                                $("#addModal").modal();
                            });
                        });
                        </script>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Education
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
            <!-- Body Begins -->

            <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>School</th>
                                        <th>Degree</th>
                                        <th>Date</th>
                                        <th>Info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <?php
                                    foreach ($educations as $key => $education) {
                                        echo '<tr>';
                                        echo "<td>{$education->id}</td>";
                                        echo "<td>{$education->school}</td>";
                                        echo "<td>{$education->degree}</td>";
                                        echo "<td>{$education->date}</td>";
                                        echo "<td>{$education->info}</td>";
                                        echo "<td><a href='?delete=".escape($education->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="eEducationBtn'.$education->id.'">Edit</button></td>';
                                        
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eEducationModal<?php echo $education->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Education</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="#">
                                            <div class="form-group">
                                                <label for="school">School</label>
                                                <input type="text" name="school" id="school" class="form-control" value="<?php echo $education->school; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="degree">Degree</label>
                                                <input type="text" name="degree" id="degree" class="form-control" value="<?php echo $education->degree; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="text" name="date" id="date" class="form-control" value="<?php echo $education->date; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="info">Info</label>
                                                <textarea name="info" id="info" class="form-control" rows="5"><?php echo $education->info; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo $education->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editEducation">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eEducationBtn<?php echo $education->id ?>").click(function(){
                                        $("#eEducationModal<?php echo $education->id ?>").modal();
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
