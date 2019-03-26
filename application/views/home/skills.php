<section class=" container-fluid skills" id='skills'>
    <header class="title">
        <h3 class='text-center skill-title'>SKILLS</h3>
    </header>
    <div class='container'>
    <div class="row text-center bg-mys">
        <?php
    foreach ($skills as $key) {
        echo '<div class="col-md-3 skill-progress"><div class="circlechart" data-percentage="'.$key['progress'].'"
         data-toggle="tooltip" data-placement="top" title="'.$key['description'].'">'.$key['title'].'</div></div>';
    }
        ?>
    </div>
</div>
</section>

<script>
    $('.circlechart').circlechart(); // Initialization
</script>