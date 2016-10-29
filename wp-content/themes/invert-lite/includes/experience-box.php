<div id="experience">
    <div class="container">
        <div class="row">
            <div class="section-title center">
                <h2>Experience</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <?php
                    $index = 0;
                    $args = array( 'post_type' => 'experience', 'posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();

                        $company_name = get_field("company_name", $post->ID );
                        $company_logo = get_field("company_logo", $post->ID );
                        $job_title = get_field("job_title", $post->ID );
                        $task_description = get_field("task_description", $post->ID );
                        $start_date = get_field("start_date", $post->ID );
                        $end_date = get_field("end_date", $post->ID );

                        $class_name = ($index % 2 == 0) ? "" : " class=\"timeline-inverted\"";
                        ?>

                        <li <?php echo $class_name ?>>
                            <div class="timeline-image">
                                <h4><?php echo $start_date ?><br>
                                    - <br>
                                    <?php echo $end_date ?> </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="row">
                                    <?php if($class_name == ""){ ?>
                                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-11">
                                            <div class="timeline-content">
                                                <div class="timeline-heading">
                                                    <h3><?php echo $company_name ?></h3>
                                                    <h4 class="subheading"><?php echo $job_title ?></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p><?php echo $task_description ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-2 col-md-offset-2 col-md-3 col-sm-offset-2 col-sm-4 col-xs-12">
                                            <div class="timeline-company-logo">
                                                <img src="<?php echo $company_logo ?>" width="100px" height="100px">
                                            </div>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                            <div class="timeline-company-logo">
                                                <img src="<?php echo $company_logo ?>" width="100px" height="100px">
                                            </div>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-4 col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 col-xs-11">
                                            <div class="timeline-content">
                                                <div class="timeline-heading">
                                                    <h3><?php echo $company_name ?></h3>
                                                    <h4 class="subheading"><?php echo $job_title ?></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p><?php echo $task_description ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>

                        <?php $index++; endwhile;	?>
                </ul>
            </div>
        </div>
    </div>
</div>