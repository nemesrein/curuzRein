<div class="row">
    <div class="col-md-8">
        <div class="projects">
            <h3>Projects</h3>
            <div class="project">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($projects))
                            {
                                foreach ($projects as $key) {
                                    $class = 'text-success';
                                    $icon = 'far fa-check-circle';
                                    if($key['status']=='unfinished')
                                    {
                                        $class = 'text-warning';
                                        $icon = 'fas fa-exclamation-circle';
                                    }
                                    echo "<tr>
                                            <th class='text-info'>".$key['title']."</th>
                                            <th class='".$class."'>".$key['status']." <i class='".$icon."'></i></th>
                                            </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="admin-skills">
            <h3>Skills</h3>
            <div class="skills-progress">
                <?php
                    if(!empty($skills))
                    {
                        foreach ($skills as $key) {
                            echo $key['title'];
                            echo "<div class='progress'>
                            <div class='progress-bar bg-success' style='width:".$key['progress']."%'></div>
                          </div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>