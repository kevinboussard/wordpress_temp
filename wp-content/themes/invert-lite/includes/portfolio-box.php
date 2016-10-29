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

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 portfolio-item <?php foreach ($project_categories as $project_category){ echo $project_category->name . " ";	}?>">
                        <div class="card">
                            <div class="card-image">
                                <a class="portfolio-item-link" href="<?php if($project_picture['sizes']['large'] != null) echo $project_picture['sizes']['large'] ?>"><img class="img-responsive" src="<?php if($project_picture['sizes']['large'] != null) echo $project_picture['sizes']['large'] ?>"></a>

                            </div><!-- card image -->

                            <div class="card-content">
                                <span class="card-title"><?php echo $post->post_title ?></span>
                                <button type="button" class="btn btn-custom pull-right show-btn" data-rel="<?php echo $post->ID ?>" aria-label="Left Align">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                            </div><!-- card content -->
                            <div class="card-reveal"  data-rel="<?php echo $post->ID ?>">
                                <span class="card-title"><?php echo $post->post_title ?></span> <button type="button" class="close" data-rel="<?php echo $post->ID ?>" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">fermer</span></button>
                                <p><?php echo $post->post_content ?></p>
                            </div><!-- card reveal -->
                        </div>
                    </div>

                <?php endwhile;	?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>