<!DOCTYPE html>
<html lang="en">

<head>

    <title>Portfoilio</title>
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
                            Portfolio
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
                                  <h4 class="modal-title" style="text-align: center;">Add - Portfoilio</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" name="category" id="category" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="techno">Techno</label>
                                        <input type="text" name="techno" id="techno" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="info">Info</label>
                                        <textarea name="info" id="info" class="form-control" rows="5"></textarea>
                                    </div>
                                    

                                    <style type="text/css">
                                        .image-preview-input {
                                            position: relative;
                                            overflow: hidden;
                                            margin: 0px;    
                                            color: #333;
                                            background-color: #fff;
                                            border-color: #ccc;    
                                        }
                                        .image-preview-input input[type=file] {
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            margin: 0;
                                            padding: 0;
                                            font-size: 20px;
                                            cursor: pointer;
                                            opacity: 0;
                                            filter: alpha(opacity=0);
                                        }
                                        .image-preview-input-title {
                                            margin-left:2px;
}
                                    </style>
                                    <script type="text/javascript">
                                        $(document).on('click', '#close-preview', function(){ 
                                            $('.image-preview').popover('hide');
                                            // Hover befor close the preview
                                            $('.image-preview').hover(
                                                function () {
                                                   $('.image-preview').popover('show');
                                                }, 
                                                 function () {
                                                   $('.image-preview').popover('hide');
                                                }
                                            );    
                                        });

                                        $(function() {
                                            // Create the close button
                                            var closebtn = $('<button/>', {
                                                type:"button",
                                                text: 'x',
                                                id: 'close-preview',
                                                style: 'font-size: initial;',
                                            });
                                            closebtn.attr("class","close pull-right");
                                            // Set the popover default content
                                            $('.image-preview').popover({
                                                trigger:'manual',
                                                html:true,
                                                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                                                content: "There's no image",
                                                placement:'bottom'
                                            });
                                            // Clear event
                                            $('.image-preview-clear').click(function(){
                                                $('.image-preview').attr("data-content","").popover('hide');
                                                $('.image-preview-filename').val("");
                                                $('.image-preview-clear').hide();
                                                $('.image-preview-input input:file').val("");
                                                $(".image-preview-input-title").text("Browse"); 
                                            }); 
                                            // Create the preview image
                                            $(".image-preview-input input:file").change(function (){     
                                                var img = $('<img/>', {
                                                    id: 'dynamic',
                                                    width:250,
                                                    height:200
                                                });      
                                                var file = this.files[0];
                                                var reader = new FileReader();
                                                // Set preview image into the popover data-content
                                                reader.onload = function (e) {
                                                    $(".image-preview-input-title").text("Change");
                                                    $(".image-preview-clear").show();
                                                    $(".image-preview-filename").val(file.name);            
                                                    img.attr('src', e.target.result);
                                                    $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                                                }        
                                                reader.readAsDataURL(file);
                                            });  
                                        });
                                    </script> 
                                    <!-- image-preview-filename input [CUT FROM HERE]-->
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Upload Image</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div><!-- /input-group image-preview [TO HERE]--> 


                                </div>
                                <div class="modal-footer">
                                  <input type="submit" class="btn btn-default" value="Add" name="addPortfolio">
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
                                <i class="fa fa-edit"></i> Portfolio
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
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Techos</th>
                                        <th>Info</th>
                                        <th>Image</th>
                                        <th>Modal-image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <style type="text/css">
                                    .pimg{
                                        height: 100px;
                                        width: 100px;
                                    }
                                    .mimg{
                                        height: 100px;
                                        width: 150px;
                                    }
                                </style>
                                <?php
                                    foreach ($portfolios as $key => $portfolio) {
                                        echo '<tr>';
                                        echo "<td>{$portfolio->id}</td>";
                                        echo "<td>{$portfolio->name}</td>";
                                        echo "<td>{$portfolio->category}</td>";
                                        echo "<td>{$portfolio->techno}</td>";
                                        echo "<td>{$portfolio->info}</td>";
                                        echo "<td><a href='../{$portfolio->image}'><img class='img-thumbnail pimg' src='../{$portfolio->image}'></a></td>";
                                        echo "<td><a href='../{$portfolio->image}'><img class='img-thumbnail mimg' src='../{$portfolio->mimage}'></a></td>";
                                        echo "<td><a href='?delete=".escape($portfolio->id)."' class='btn btn-default'>Delete</a>";
                                        echo '<button type="button" class="btn btn-default" id="ePortfolioBtn'.$portfolio->id.'">Edit</button></td>';
                                        
                                ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="ePortfolioModal<?php echo $portfolio->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="text-align: center;">Edit - Portfolio</h4>
                                          <!-- <div class="well">
                                              <small>*Note - Use <span> </small>
                                          </div> -->
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="#">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $portfolio->name ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" name="category" id="category" class="form-control" value="<?php echo $portfolio->category ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="techno">Techno</label>
                                                <input type="text" name="techno" id="techno" class="form-control" value="<?php echo $portfolio->techno ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="info">Info</label>
                                                <textarea name="info" id="info" class="form-control" rows="5"><?php echo $portfolio->info ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload Image here</label>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image" class="form-control" value="<?php echo $portfolio->image ?>" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <input type="hidden" name="id" value="<?php echo $portfolio->id ?>">
                                          <input type="submit" class="btn btn-default" value="Edit" name="editPortfolio">
                                          </form>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <script>
                                $(document).ready(function(){
                                    $("#ePortfolioBtn<?php echo $portfolio->id ?>").click(function(){
                                        $("#ePortfolioModal<?php echo $portfolio->id ?>").modal();
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
