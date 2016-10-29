<div id="competence" class="skt-section">

	  <div class="container">


	  <div class="section-title text-center center">
		  <h2 id="skill-title">Compétences</h2>
	  </div>

	  	<?php
	 	 $terms = get_terms( 'skill_category' );
	  	foreach ($terms as $term){ ?>

			<div class="mid-box-mid row-fluid">

				<div class="mid-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3><?php echo $term->name ?></h3>
				</div>

				<div class="mid-box col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<?php

				$args = array( 'post_type' => 'competence', 'posts_per_page' => 25 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

					$skill_color = get_field("skill_color", $post->ID );
					$skill_knowledge_percentage = get_field("knowledge_percentage", $post->ID );
					$skill_picture = get_field("skill_picture", $post->ID );
					$skill_test = get_field("skill_picture", $post->ID );

					$skill_category = get_the_terms(  $post->ID , 'skill_category' );

					if($term->name == $skill_category[0]->name){
					?>


					<div class="mid-box col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<div class="skt-iconbox iconbox-top">
							<div class="iconbox-content">
								<section class="skill-container">
									<figure class="chart" data-percent="<?php echo $skill_knowledge_percentage ?>">
										<?php if($skill_picture['sizes']['thumbnail'] != null) { ?> 
											<img class="skill" src= "<?php echo $skill_picture['sizes']['thumbnail'];?>" width="70px" height="70px">
											<figcaption></figcaption> 
										<?php }else{ ?>
											<figcaption><p><?php echo $post->post_title ?></p></figcaption>
										<?php } ?>
										<svg width="117" height="117">
											<circle style="stroke: <?php echo $skill_color ?>" class="outer" cx="131.5" cy="58.5" r="56" transform="rotate(-90, 95, 95)"/>
										</svg>
										<div class="skillPercentage<?php if($skill_knowledge_percentage == 100) { ?> skillPercentageMax<?php } ?>" style="background-color: <?php echo $skill_color ?>"><span><?php echo $skill_knowledge_percentage ?> %</span></div>
									</figure>
								</section>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

				<?php } endwhile;  ?>

				</div>

				<div class="clear"></div>
			</div>

	  	<?php } ?>

	  </div>
</div>
