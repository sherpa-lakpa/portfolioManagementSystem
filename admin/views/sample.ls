<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{Sample}}</title>
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
                            {{Sample}}
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-envelope"></i> {{Sample}}
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
                                        <!--Columns-->
                                        <th>Name</th>
                                        <!--EndColumns-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <?php
                                    foreach (${{samples}} as $key => ${{sample}}) {
                                        echo '<tr>';
                                        echo "<td>{${{sample}}->id}</td>";
                                        /*Rows*/
                                        echo "<td>{${{sample}}->name}</td>";
                                        /*EndRows*/
                                        echo "<td><a href='?delete=".escape(${{sample}}->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="e{{Sample}}Btn'.${{sample}}->id.'">Edit</button></td>';
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="e{{Sample}}Modal<?php echo ${{sample}}->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - {{Sample}}</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                            <!--Edit-->
                                              <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" value="<?php echo ${{sample}}->name ?>">
                                                </div>
                                              </div>
                                            <!--EndEdit-->
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo ${{sample}}->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="edit{{Sample}}">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#e{{Sample}}Btn<?php echo ${{sample}}->id ?>").click(function(){
                                        $("#e{{Sample}}Modal<?php echo ${{sample}}->id ?>").modal();
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
                            <h2 style="margin-top: 0px;padding-top: 0px;">Add {{Sample}}</h2>
                        </div>
                        <form action="" method="POST">
                        <!--Add-->
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="<?php echo escape(Input::get("name")); ?>" placeholder="Name" autocomplete="off" class="form-control">
                        </div>
                        <!--EndAdd-->
                        <div class="form-group">
                            <input type="submit" value="Add" name="add" class="btn btn-default" style="margin-bottom: 10px;padding-right: 30px;padding-left: 30px;">
                        </div>
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
