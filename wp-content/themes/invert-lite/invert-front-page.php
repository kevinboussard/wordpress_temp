<?php get_header(); ?>

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

<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<!-- Featured box -->
	<?php include("includes/front-mid-box.php"); ?>
<?php } ?>

<!-- Portfolio Section -->
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

	<!-- Resume Section -->
	<div id="resume" class="text-center">

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
								<div class="timeline-heading">
									<h4><?php echo $company_name ?></h4>
									<h4 class="subheading"><?php echo $job_title ?></h4>
								</div>
								<div class="timeline-body">
									<p><?php echo $task_description ?></p>
								</div>
							</div>
						</li>

					<?php $index++; endwhile;	?>
					</ul>
				</div>
			</div>
		</div>
	</div>

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
										<h4><?php echo $school_name ?></h4>
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
</div>

<?php get_footer(); ?>