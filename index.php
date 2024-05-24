<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MovieTrack</title>
    <!-- <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
<div class="container">
    <div class="text-center">
    <h1 class="page-header mt-5">MovieTrack</h1>
    <p class="">An XML based movie CRUD database<br><b>Ivan Gonzales • BSIT 3DG2</b><br></p>
    <a class="" href="https://github.com/ItsIvanG/wst_final/"><i class="bi bi-github"></i> GitHub Repo</a>
    </div>
   
    <div class="row">
        <div class="col-md-8 offset-md-2">
           
            <div class="position-relative">
            <a href="#addnew" class="btn btn-primary" data-bs-toggle="modal"><span class="bi bi-plus-circle-fill"></span> New</a>
                <div class="btn-group position-absolute end-0" role="group" aria-label="Basic example"> 
                    <a id="gridViewButton" class="btn btn-secondary active"><i class="bi bi-grid-fill"></i> Grid</a>
                    <a id="tableViewButton" class="btn btn-secondary"><i class="bi bi-table"></i> Table</a>
                </div>
            </div>
           
           
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                        <div class="alert alert-info text-center mt-3">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped mt-3 d-none" id="tableViewContainer">
                <thead>
                    <th>Poster</th>
                    <th>Title</th>
                    <th>Release Date</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('files/movies.xml');
                    
                    foreach($file->movie as $row){
                        ?>
                        <tr>
                            <td><img src="<?php echo $row->poster; ?>" width="100px"/></td>
                            <td class=""><?php echo $row->title; ?></td>
                            <td class=""><?php echo $row->year; ?></td>
                            <td class=""><?php echo $row->genre; ?></td>
                            <td><?php echo $row->rating; ?></td>
                            <td>
                                <a href="#edit_<?php echo $row->id; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></span> Edit</a>
                                <a href="#delete_<?php echo $row->id; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div id="gridViewContainer" class="row mt-3">
    <?php
    foreach($file->movie as $row){
        ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="<?php echo $row->poster; ?>" class="card-img-top" alt="Poster">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->title; ?></h5>
                    <p class="card-text"><?php echo $row->year; ?></p>
                    <p class="card-text"><?php echo $row->genre; ?></p>
                    <p class="card-text"><?php echo $row->rating; ?></p>
                    <!-- Add edit and delete buttons if needed -->
                    <a href="#edit_<?php echo $row->id; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="#delete_<?php echo $row->id; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Delete</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
    </div>
</div>
<?php include('add_modal.php'); ?>

</body>

<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd', // Specify the format of the selected date
            autoclose: true // Close the date picker when a date is selected
            // You can add more options as needed
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#gridViewButton').click(function(){
            $('#tableViewContainer').addClass('d-none');
            $('#gridViewContainer').removeClass('d-none');
            $('#gridViewButton').addClass('active');
            $('#tableViewButton').removeClass('active');
        });
        $('#tableViewButton').click(function(){
            $('#tableViewContainer').removeClass('d-none');
            $('#gridViewContainer').addClass('d-none');
            $('#gridViewButton').removeClass('active');
            $('#tableViewButton').addClass('active');
        });
        
    });
</script>

</html>

