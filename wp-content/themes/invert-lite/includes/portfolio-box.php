<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Portfolio</h2>
            <hr>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <?php
                        $terms = get_terms( 'project_category' );
                        foreach ($terms as $term){ ?>
                            <li><a href="#" data-filter=".<?php echo $term->name ?>"><?php echo $term->name ?></a></li>
                        <?php } ?>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">

                <?php

                $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();

                    $project_picture = get_field("project_picture", $post->ID );
                    $project_test = get_the_category( $post->ID );
                    $project_categories = get_the_terms(  $post->ID , 'project_category' );

                    ?>

                    <div class="span6 <?php foreach ($project_categories as $project_category){ echo $project_category->name . " ";	}?>">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="<?php if($project_picture['sizes']['large'] != null) echo $project_picture['sizes']['large'] ?>" title="<?php echo $post->post_content ?>" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4><?php echo $post->post_title ?></h4>
                                        <small>
                                            <?php foreach ($project_categories as $project_category){
                                                echo $project_category->name . " ";
                                            }
                                            ?>
                                        </small>
                                    </div>
                                    <img src="<?php if($project_picture['sizes']['large'] != null) echo $project_picture['sizes']['large'] ?>" class="img-responsive" alt="<?php echo $post->post_title ?>"> </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;	?>

            </div>
        </div>
    </div>
</div>