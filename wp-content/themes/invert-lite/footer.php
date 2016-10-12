<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 */
?>
</div>
<!-- #main -->
	<!-- CONTACT BOX -->
	<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
		<?php include("includes/contact-box.php"); ?>
	<?php } ?>

	<!-- #footer -->
	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="second_wrapper">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
					<div class="clear"></div>
				</div>
				<!-- second_wrapper -->
			</div>
		</div>
		<div class="third_wrapper">
			<div class="row-fluid">
				<div class="social">
					<ul>
						<li><a href="http://fr.viadeo.com/fr/profile/agathe.huvé"><i class="fa fa-viadeo"></i></a></li>
						<li><a href="https://fr.linkedin.com/in/agathe-huvé-19875b107"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!-- third_wrapper -->
		</div>
	<!-- #footer -->

</div>
<!-- #wrapper -->

<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>
</body>
</html>