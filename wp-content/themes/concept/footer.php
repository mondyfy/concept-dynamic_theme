<?php ?>
<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3><?php echo get_theme_mod('footer_title'); ?></h3>
					<p> <?php echo get_theme_mod('footer_des'); ?></p>
					<p><a href="<?php echo get_theme_mod('footer_excerpt'); ?>"><?php echo get_theme_mod('footer_excerpt_title'); ?></a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					
					<ul class="fh5co-footer-links">
						<?php wp_nav_menu( array( 
						'theme_location' => 'footer_menu_1',
						'container'  => '',
						//'menu_class'  => 'dropdown',
					
											) ); ?>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<?php wp_nav_menu( array( 
						'theme_location' => 'footer_menu_2',
						'container'  => '',
						//'menu_class'  => 'dropdown',
					
											) ); ?>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<?php wp_nav_menu( array( 
						'theme_location' => 'footer_menu_3',
						'container'  => '',
						//'menu_class'  => 'dropdown',
					
											) ); ?>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; <?php echo date("Y"); ?> <?php  echo get_theme_mod('site_name'); ?>. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="<?php  echo get_theme_mod('designer_link'); ?>"><?php  echo get_theme_mod('designer_name'); ?></a> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
								<?php 
								//Displaying the social icons
								 my_social_icons_output(); ?>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script>

	</script>

	</body>
	<?php wp_footer(); ?>
</html>

