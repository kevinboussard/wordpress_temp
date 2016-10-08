<!-- ABOUT ME CONTENT -->
<div id="about-me-content" class="skt-section">
    <div class="container">
        <div class="row-fluid">
            <?php

            $args = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'about_me'
                    )
                )
            );
            $postslist = get_posts( $args );

            ?>
            <div class="section-title text-center center">
                <h2><?php echo $postslist[0]->post_title ?></h2>
                <hr>
            </div>
        </div>
        <div class="border-content-box bottom-space">
            <span><?php echo $postslist[0]->post_content ?></span>
        </div>
    </div>
</div>