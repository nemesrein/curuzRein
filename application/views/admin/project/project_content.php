<?php
    if(!empty($projects))
    {
?>
<div class="container">
    <div class="row">
    <?php foreach ($projects as $key) { ?>
        <div class="col-md-4">
            <div class="project-container">
                <div class="img-container">
                <img width='180' height='180' src="<?php echo site_url("/assets/image/".$key['image']."") ?>" alt="" class="img img-rounded img-circle">
                </div>
                <h4 class="title"><?php echo $key['title'] ?></h4>
                <p class="description"><?php echo $key['description'] ?></p>
                <p class="status"><?php echo $key['status'] ?></p>
                <div class="buttons text-center">
                    <button id='<?php echo $key['project_id'] ?>' 
                    class="modify btn btn-info" data-toggle='modal' data-target='#update_project_modal'>Modify
                    </button>
                    <button id='<?php echo $key['project_id'] ?>' class="viewModules btn btn-success">View Modules</button>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div> 
<!-- modal -->
<div id='update_project_modal' class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning ">
                <h4 class="modal-title text-white">
                    Project Form
                </h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <form id='update_project' enctype='multipart/form-data' action="#" method="post" novalidate> 
            <span id='skill-id' class='d-none'></span>           
            <div class="modal-body bg-light">
                <div class="form-group">
                    <input name='id' type="text" class='id' hidden >
                    <label for="title" class='lead'>Title:</label>
                    <input name='title' type="text" class="form-control edit_title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="description" class='lead'>Description:</label>
                    <input name='description' type="text" class="form-control edit_description" required>
                </div>
                <div class="form-group">
                    <label for="progress" class='lead'>Image:</label>
                    <input name='image' type="file" class="edit_progres form-control" id="progress">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class='btn btn-outline-primary'>Submit</button>
                </div>
                </div>
                <div class="modal-footer d-block">
                    <h3 class='text-info text-center' id='response'></h3>
                    <!-- <button type='button' class='btn' data-dismiss='modal'>Close</button> -->
                </div>
                </div>
            </form>
    </div>
</div>
<!-- end of update modal -->
<!-- end of modal -->
<script src="<?php echo site_url("/assets/js/project.js") ?>"></script>
<?php
    }
?>