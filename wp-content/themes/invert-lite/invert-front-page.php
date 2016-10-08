<?php get_header(); ?>

<!-- ABOUT ME CONTENT -->
<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<?php include("includes/about-me-box.php"); ?>
<?php } ?>

<!-- RESUME CONTENT -->
<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<div id="resume" class="text-center">
		<!-- EXPERIENCE SECTION -->
		<?php include("includes/experience-box.php"); ?>
		<!-- EDUCATION SECTION -->
		<?php include("includes/diploma-box.php"); ?>
		<!-- CV SECTION -->
		<?php include("includes/cv-box.php"); ?>
	</div>
<?php } ?>

<!-- SKILL CONTENT -->
<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<?php include("includes/skill-box.php"); ?>
<?php } ?>

<!-- PORTFOLIO CONTENT -->
<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<?php include("includes/portfolio-box.php"); ?>
<?php } ?>

<?php get_footer(); ?>