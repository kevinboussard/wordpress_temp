<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a>. <span>All Rights Reserved</span>
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		More Photographer Portfolio WordPress Themes at <a rel="nofollow" href="http://www.templatemonster.com/category/photographer-portfolio-wordpress-themes/" target="_blank">TemplateMonster.com</a>
	<?php } ?>
</div>