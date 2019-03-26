<?php
    if(!empty($info))
    { ?>
        <div class="about" id='about'>
        <h4 class="about_title text-center">About Me</h4>
        <div class="container">
        <div class="row about">
            <div class="col-md-4">
                <img data-toggle="tooltip" data-placement="top" title="this picture is temporary" class='profile rounded-circle img-thumbnail mx-auto d-block img-fluid' src="<?php echo site_url("assets/image/temporary.png") ?>" alt="">
                <h4 class='lead text-center'><?php echo $info->f_name." ".$info->l_name ?></h4>
            </div>  
            <div class="col-md-8 about_me bg-light">
                
                <p class='lead bg-light'><?php echo $info->about_me ?></p>
            </div>
        </div>
        </div>
        </div>
<?php  }
?>