<!DOCTYPE html>
<html lang="en">

<head>

    <title>Work</title>
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
                            Work
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
                                  <h4 class="modal-title" style="text-align: center;">Add - Work</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" name="company" id="company" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="post">Post</label>
                                            <input type="text" name="post" id="post" class="form-control">
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
                                  <input type="submit" class="btn btn-default" value="Add" name="addWork">
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
                                <i class="fa fa-edit"></i> Work
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
                                        <th>Company</th>
                                        <th>Post</th>
                                        <th>Date</th>
                                        <th>Info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <?php
                                    foreach ($works as $key => $work) {
                                        echo '<tr>';
                                        echo "<td>{$work->id}</td>";
                                        echo "<td>{$work->company}</td>";
                                        echo "<td>{$work->post}</td>";
                                        echo "<td>{$work->date}</td>";
                                        echo "<td>{$work->info}</td>";
                                        echo "<td><a href='?delete=".escape($work->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="eWorkBtn'.$work->id.'">Edit</button></td>';
                                        
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eWorkModal<?php echo $work->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Work</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="#">
                                            <div class="form-group">
                                                <label for="company">Company</label>
                                                <input type="text" name="company" id="company" class="form-control" value="<?php echo $work->company; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="post">Post</label>
                                                <input type="post" name="post" id="post" class="form-control" value="<?php echo $work->post; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="text" name="date" id="date" class="form-control" value="<?php echo $work->date; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="info">Info</label>
                                                <textarea name="info" id="info" class="form-control" rows="5"><?php echo $work->info; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo $work->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editWork">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eWorkBtn<?php echo $work->id ?>").click(function(){
                                        $("#eWorkModal<?php echo $work->id ?>").modal();
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
