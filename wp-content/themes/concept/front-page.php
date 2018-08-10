	<?php get_header(); ?>

		<div id="fh5co-project">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
						<span><?php echo get_theme_mod('pre_title');?></span>
						<h2><?php echo get_theme_mod('rp_title'); ?></h2>
						<p><?php echo get_theme_mod('rp_des');?></p>
					</div>
				</div>

				<div class="row">
					<?php
					$args = array( 'post_type' => 'recent_products', 'posts_per_page' => 3 );
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) {?>
								<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
					<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
						<a href="<?php  the_permalink(); ?>">
												<?php 
												//the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
			                                        the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)?>
					
							<div class="fh5co-copy">
								<h3><?php the_title(); ?></h3>
								<p><?php //the_content(); 
								echo wp_trim_words(get_the_content(), 10); ?></p>
							</div>
						</a>
					</div>
								
								<?php wp_reset_postdata(); } }?>
								

				</div>
			</div>
			
		</div>



		<div id="fh5co-services" class="fh5co-bg-section border-bottom">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
						<div class="fh5co-heading">
							<span><?php echo get_theme_mod('wd_pre_title');?></span>
							<h2><?php echo get_theme_mod('wd_title');?></h2>
							<p><?php echo get_theme_mod('wd_des'); ?></p>
						</div>
					</div>

				</div>


				<div class="row">

					<?php


					$args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) {?>
								<?php while ( $the_query->have_posts() ) { $the_query->the_post();

					 ?>


					<div class="col-md-4 col-sm-6 ">
						<div class="feature-center animate-box" data-animate-effect="fadeInUp">
							<span class="icon">
								<!--Extracting the icon from the custom field -->
								<?php $icon = get_post_meta(get_the_id(), 'icon', true); ?>
								<i class="icon-<?php echo $icon; ?>"></i>
							</span>
							<h3><?php the_title(); ?></h3>
							<p><?php //the_content(); 
								echo wp_trim_words(get_the_content(), 4); ?></p>
							<p><a href="<?php  the_permalink(); ?>"><?php echo get_theme_mod('wd_excerpt');?></a></p>
						</div>
					</div>
						<?php wp_reset_postdata(); } }?>


					
									</div>
								</div>
							</div>
					

		<div id="fh5co-testimonial" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box row-pb-md">
					<div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
						<span>
							<?php echo get_theme_mod('hc_pre_title');?></span>
						<h2><?php echo get_theme_mod('hc_title'); ?></h2>
						<p><?php echo get_theme_mod('hc_des');?>.</p>
					</div>
				</div>
				<div class="row">

					<?php
						$i = 1;
					$args = array( 'post_type' => 'happyclients', 'posts_per_page' => 4);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) {?>
								<?php while ( $the_query->have_posts() ) { $the_query->the_post();

					 ?>
		<?php
								if(sqrt($i) == 1 || sqrt($i) == 2 ){
									$class = "testimonial";
								}
								else{
									$class = "testimonial fh5co-selected";
								}
								
			 ?>
					<div class="col-md-6 animate-box">
						<div class="<?php echo $class; ?>">

							<blockquote>
								<p><?php the_content(); ?></p>
								<?php $name = get_post_meta(get_the_id(), 'name', true); ?>
								<p class="author"> <?php the_post_thumbnail( array(60, 60) );?>  <cite>&mdash; <?php the_title(); ?></cite></p>
							</blockquote>
						</div>

				</div>
					<?php $i++; } } ?>
						<!-- <div class="testimonial fh5co-selected">
							<blockquote>
								<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"><img src="<?php //echo esc_url( get_stylesheet_directory_uri() ) ;?>/images/person2.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
							</blockquote>
						</div>
											</div> -->

<!-- 					<div class="col-md-6 animate-box">
	<div class="testimonial fh5co-selected">
		<blockquote>
			<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
			<p class="author"><img src="<?php //echo esc_url( get_stylesheet_directory_uri() ) ;?>/images/person3.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
		</blockquote>
	</div>

	<div class="testimonial">
		<blockquote>
			<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
			<p class="author"><img src="<?php// echo esc_url( get_stylesheet_directory_uri() ) ;?>/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Mike Adam</cite></p>
		</blockquote>
	</div>

</div>
 -->
					

			</div>
		</div>
	</div>


		<div id="fh5co-counter">
			<div class="container">

				<div class="row animate-box" data-animate-effect="fadeInUp">
					<div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
						<span><?php echo get_theme_mod('ff_pre_title');?></span>
						<h2><?php echo get_theme_mod('ff_title');?></h2>
						<p><?php echo get_theme_mod('ff_des');?></p>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-download"></i>
							</span>
							<span class="counter"><span class="js-counter" data-from="0" data-to="<?php echo get_theme_mod('ff_download_number'); ?>" data-speed="1500" data-refresh-interval="50">1</span>M+</span>
							<span class="counter-label"><?php echo get_theme_mod('ff_download'); ?></span>

						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
								<span class="icon">
									<i class="ti-face-smile"></i>
								</span>
								<span class="counter"><span class="js-counter" data-from="0" data-to="<?php echo get_theme_mod('ff_happyclient_number'); ?>" data-speed="1500" data-refresh-interval="50">1</span>+</span>
								<span class="counter-label"><?php echo get_theme_mod('ff_happyclient'); ?></span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="feature-center">
								<span class="icon">
									<i class="ti-briefcase"></i>
								</span>
								<span class="counter"><span class=" js-counter" data-from="0" data-to="<?php echo get_theme_mod('ff_project_number'); ?>" data-speed="1500" data-refresh-interval="50">1</span>+</span>
								<span class="counter-label"><?php echo get_theme_mod('ff_projects'); ?></span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="feature-center">
								<span class="icon">
									<i class="ti-time"></i>
								</span>
								<span class="counter"><span class="js-counter" data-from="0" data-to="<?php echo get_theme_mod('ff_hourspent_number'); ?>" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
								<span class="counter-label"><?php echo get_theme_mod('ff_hourspent'); ?></span>

							</div>
						</div>
							
					</div>
				</div>
		</div>

		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
					<div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
						<span><?php echo get_theme_mod('blog_pre_title'); ?></span>
						<h2><?php echo get_theme_mod('blog_title'); ?></h2>
						<p><?php echo get_theme_mod('blog_des'); ?></p>
					</div>
				</div>
				<div class="row" >
					<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => 3);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) {?>
								<?php while ( $the_query->have_posts() ) { $the_query->the_post();

					?>
						
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
						<div class="fh5co-post">
							<span class="fh5co-date"><?php echo get_the_date(); ?></span>
							<h3><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_content(); ?>
							<p class="author"><?php the_post_thumbnail( array(50, 50) ); ?> <cite> <?php the_author(); ?></cite></p>
					
					
						</div>

					</div>

					
					<!--
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
						<div class="fh5co-post">
							<span class="fh5co-date">Sep. 23rd</span>
							<h3><a href="#">Web Design for the Future</a></h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							<p class="author"><img src="<?php //echo esc_url( get_stylesheet_directory_uri() ) ;?>/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
						<div class="fh5co-post">
							<span class="fh5co-date">Sep. 24th</span>
							<h3><a href="#">Web Design for the Future</a></h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							<p class="author"><img src="<?php //echo esc_url( get_stylesheet_directory_uri() ) ;?>/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
						</div>
					</div>
				</div>
			</div>-->
			<?php } } ?>
		</div>
	</div>
</div>


		<div id="fh5co-started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span><?php echo get_theme_mod('call_on_pretitle');?></span>
						<h2><?php echo get_theme_mod('call_on_title'); ?></h2>
						<p><?php echo get_theme_mod('call_on_des'); ?></p>
						<p><button type="submit" class="btn btn-primary"><?php echo get_theme_mod('call_on_link_text'); ?></button></p>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>