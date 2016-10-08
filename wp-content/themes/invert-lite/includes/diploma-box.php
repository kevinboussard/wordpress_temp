<div id="education">
    <div class="container">
        <div class="section-title center">
            <h2>Diplômes</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <!-- Education Section-->
                    <?php
                    $index = 0;
                    $args = array( 'post_type' => 'diplome', 'posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();

                        $school_name = get_field("school_name", $post->ID );
                        $diploma_name = get_field("diploma_name", $post->ID );
                        $diploma_description = get_field("diploma_description", $post->ID );
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
                                <div class="timeline-heading">
                                    <h3><?php echo $school_name ?></h3>
                                    <h4 class="subheading"><?php echo $diploma_name ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $diploma_description ?></p>
                                </div>
                            </div>
                        </li>

                        <?php $index++; endwhile;	?>
                </ul>
            </div>
        </div>
    </div>
</div>