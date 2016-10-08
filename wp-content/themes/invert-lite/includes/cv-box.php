<?php

    $args = array( 'post_type' => 'curriculum_vitae', 'posts_per_page' => 1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();

        $cv_file = get_field("cv_file", $post->ID );

        if($cv_file != null){

?>
    <div id="cv-content">
        <a href="<?php echo $cv_file ?>" class="btn-primary" style="display: block; width: 100%" download="curriculumVitae">Télécharger mon CV</a>
    </div>

<?php } endwhile ?>
