<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="wrapper" class="skepage">
	
	<!-- header image section -->
	<!-- <div class="flexslider">
		<div class="post">
			<?php if( get_header_image() ) { ?>
				<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="default-slider-image"  src="<?php header_image(); ?>" />
			<?php } else { ?>
				<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="default-slider-image"  src="<?php echo esc_url(get_template_directory_uri().'/images/invert.jpg'); ?>" />
			<?php } ?>
		</div>
	</div> -->
	<!-- HTML -->
	<section id="slide-1" class="homeSlide">
		<div class="bcg"
			 data-center="background-position: 50% 0px;"
			 data-top-bottom="background-position: 50% -100px;"
			 data-anchor-target="#slide-1"
		>
			<div class="hsContainer">
				<div class="hsContent"
					 data-center="opacity: 1"
					 data-106-top="opacity: 0"
					 data-anchor-target="#slide-1 h2"
				>
					<h2>Portfolio d'Agathe Huvé</h2>
				</div>
			</div>
		</div>
	</section>

	<div id="header" class="skehead-headernav clearfix">
		<div class="glow">
			<div id="skehead">
				<div class="container">
					<div class="row-fluid clearfix">
						<!-- #logo -->
						<div id="logo" class="col-lg-3 col-sm-3 col-xs-12">
							<?php if( get_theme_mod('invert_lite_logo_img', '') != '' ){ ?>
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" ><img class="logo" src="<?php echo esc_url( get_theme_mod('invert_lite_logo_img') ); ?>" alt="<?php bloginfo('name') ?>" /></a>
							<?php } elseif ( display_header_text() ) { ?>
								<!-- #description -->
								<div id="site-title" class="logo_desp">
									<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
									<div id="site-description"><?php bloginfo( 'description' ); ?></div>
								</div>
								<!-- #description -->
							<?php } ?>
						</div>
						<!-- #logo -->

						<!-- navigation-->
						<div class="top-nav-menu col-lg-5 col-md-7 col-sm-8 col-xs-12">
							<nav class="navbar navbar-light bg-faded">
								<ul class="nav navbar-nav">
									<li class="nav-item">
										<a class="nav-link js-scrollTo" href="#competence">Compétences</a>
									</li>
									<li class="nav-item">
										<a class="nav-link js-scrollTo" href="#portfolio">Portfolio</a>
									</li>
									<li class="nav-item">
										<a class="nav-link js-scrollTo" href="#experience">Experiences</a>
									</li>
									<li class="nav-item">
										<a class="nav-link js-scrollTo" href="#education">Diplômes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link js-scrollTo" href="#contact">Contact</a>
									</li>
								</ul>
							</nav>
							<div class="clearfix"></div>
						</div>
						<!-- #navigation -->
					</div>
				</div>
			</div>
			<!-- #skehead -->
		</div>
		<!-- .glow -->
	</div>
	<!-- #header -->


<div id="main" class="clearfix">
