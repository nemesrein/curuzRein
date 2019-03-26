<div class="skills-admin container">
        <div class="text-center row">
            <hr>
                <?php
            foreach ($skills as $key) {
                echo '<div style="margin-top:1.4em" class="col-md-3 col-sm-6 skill-progress"><div class="circlechart" data-percentage="'.$key['progress'].'"
                data-toggle="tooltip" data-placement="top" title="'.$key['description'].'">'.$key['title'].'</div></div>';
            }
                ?>
        </div>
        <div class="row">
            <div class="skill-table col-md-12">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Progress</th>
                            <th>Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($skills as $key) {
                        echo "<tr'>
                                <th id='title'>".$key['title']."</th>
                                <th id='description'>".$key['description']."</th>
                                <th id='progress'>".$key['progress']."</th>
                                <th id='".$key['skill_id']."'><button class='btn btn-outline-info skill_update' data-toggle='modal' data-target='#update_skill_modal'>Update</button></th>
                                <th id='".$key['skill_id']."'><button class='btn btn-outline-danger skill-delete'>Delete</button></th>
                            </tr>";
                    }
                    ?>
                    </tbody>
                    <br>
                </table>
            </div>
        </div>
        <center>
        <button class='btn btn-center btn-lg btn-outline-success text-center' data-toggle='modal' data-target='#add_skill_modal'>
            Add Skill
        </button>
        <center>
    </div>
    <!-- for updateing modal -->
<div id='update_skill_modal' class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning ">
                <h4 class="modal-title text-white">
                    Skill Form
                </h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <form id='update_skill_modal' action="#" method="post"> 
            <span id='skill-id' class='d-none'></span>           
            <div class="modal-body bg-light">
                <div class="form-group">
                    <label for="title" class='lead'>Title:</label>
                    <input name='title' type="text" class="form-control edit_title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="description" class='lead'>Description:</label>
                    <input name='description' type="text" class="form-control edit_description" required>
                </div>
                <div class="form-group">
                    <label for="progress" class='lead'>Progress:</label>
                    <input name='progress' type="text" class="edit_progres form-control" id="progress" required>
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
<!-- add modal -->
<div id='add_skill_modal' class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning ">
                <h4 class="modal-title text-white">
                    Add Skill
                </h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <form id='add_skill_modal' action="#" method="post">            
            <div class="modal-body bg-light">
                <div class="form-group">
                    <label for="title" class='lead'>Title:</label>
                    <input name='title' type="text" class="form-control title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="description" class='lead'>Description:</label>
                    <input name='description' type="text" class="form-control description" required>
                </div>
                <div class="form-group">
                    <label for="progress" class='lead'>Progress:</label>
                    <input name='progress' type="text" class="progresd form-control" id="progress" required>
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
<!-- end -->
<script src="<?php echo site_url("/assets/js/mystyle.js") ?>"></script>
<script>$('.circlechart').circlechart(); </script>