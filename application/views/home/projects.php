<section class="container-fluid">
    <h3 class='text-center lead'>My Projects</h3>
    <div class="container">
    <div class="row text-center">
    <?php
        if(!empty($projects))
        {
            foreach ($projects as $key) 
            {
                echo "<div class='col-md-4 projects'>
                        <div class='card text-center'>
                        <img class='card-img-top' src='".site_url("assets/image/".$key['image']."")."'>
                        <div class='card-body bg-light'>
                            <h4 class='card-title'>".$key['title']."</h4>
                            <p class='card-text'>".$key['description']."</p>
                        </div></div></div>
                    ";    
            }
        }
        else
        {
            echo "<div class='col-md-3'></div><div class='col-md-6 card text-center'>
                    <div class='card-header'>NO Project Yet</div>
                    <div class='card-body'><img class='img-responsive thumbnail' src='".site_url("assets/image/temporary.jpg")."'></div>
                    <div class='card-footer'></div>
                </div><div class='col-md-3'>";
        }
    ?>
    </div>
    </div>
    <hr>
</section>