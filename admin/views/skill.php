<!DOCTYPE html>
<html lang="en">

<head>

    <title>Skill</title>
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
                            Skill
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-envelope"></i> Skill
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
                                        <th>Name</th>
                                        <th>Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <?php
                                    foreach ($skills as $key => $skill) {
                                        echo '<tr>';
                                        echo "<td>{$skill->id}</td>";
                                        echo "<td>{$skill->name}</td>";
                                        echo '<td>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '.$skill->percentage.'%">
                                                </div>'.$skill->percentage.'%
                                            </div>
                                            </td>
                                        ';
                                        echo "<td><a href='?delete=".escape($skill->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="eSkillBtn'.$skill->id.'">Edit</button></td>';
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="eSkillModal<?php echo $skill->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Skill</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="#">
                                              <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" value="<?php echo $skill->name ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="percentage">Percentage(%)</label>
                                                    <input type="text" name="percentage" id="percentage" value="<?php echo $skill->percentage ?>">
                                                </div>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo $skill->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editSkill">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#eSkillBtn<?php echo $skill->id ?>").click(function(){
                                        $("#eSkillModal<?php echo $skill->id ?>").modal();
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
                            <h2 style="margin-top: 0px;padding-top: 0px;">Add Skill</h2>
                        </div>
                        <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" placeholder="Name" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="percentage" id="percentage" value="<?php echo escape(Input::get('percentage')); ?>" placeholder="Percentage" class="form-control">
                        </div>
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
