					<!DOCTYPE HTML>
					<!--
						Concept by gettemplates.co
						Twitter: http://twitter.com/gettemplateco
						URL: http://gettemplates.co
					-->
					<html <?php language_attributes(); ?> >
						<head>
						<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<title><?php echo wp_title('', true, 'right'); ?> | <?php echo get_bloginfo()  ?></title>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
						<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
						<meta name="author" content="gettemplates.co" />

					  	<!-- Facebook and Twitter integration -->
						<meta property="og:title" content=""/>
						<meta property="og:image" content=""/>
						<meta property="og:url" content=""/>
						<meta property="og:site_name" content=""/>
						<meta property="og:description" content=""/>
						<meta name="twitter:title" content="" />
						<meta name="twitter:image" content="" />
						<meta name="twitter:url" content="" />
						<meta name="twitter:card" content="" />

						<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
						
					<!-- Animate.css 
						<link rel="stylesheet" href="css/animate.css">-->
						<!-- Icomoon Icon Fonts
						<link rel="stylesheet" href="css/icomoon.css">-->
						<!-- Bootstrap  --
						<link rel="stylesheet" href="css/bootstrap.css">-->

						<!-- Magnific Popup 
						<link rel="stylesheet" href=" css/magnific-popup.css"> -->
					
						<!-- Modernizr JS 
						<script src="</js/modernizr-2.6.2.min.js"></script>-->
						<!-- FOR IE9 below -->	<!--[if lt IE 9]>
						<script src="js/respond.min.js"></script>
						<![endif]-->

						<?php wp_head(); ?>

						</head>
						<body>
							
						<div class="fh5co-loader"></div>
						
						<div id="page">
						<nav class="fh5co-nav" role="navigation">
							




							<div class="container">
								<div class="row">
									<div class="col-xs-2 text-left">
										<div id="fh5co-logo"><a href="<?php echo get_site_url(); ?>"><?php echo get_theme_mod('header_text1'); ?><span>.</span></a></div>
									</div>
									<div class="col-xs-10 text-right menu-1">
									<?php wp_nav_menu( array( 
										'theme_location' => 'header-menu',
										'container'  => '',
										//'menu_class'  => 'dropdown',
										'walker'     => new concept()
															) ); ?>
									</div>
									
								</div>
								
							</div>
						</nav>

						<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
							<div class="overlay"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-7 text-left">
										<div class="display-t">
											<div class="display-tc animate-box" data-animate-effect="fadeInUp">

											<h1 class="mb30">Our Creative Products</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>

					

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
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 2;
								$args = array('post_type'=>'recent_products','posts_per_page' => 3,'paged' => $paged);
								$the_query = new WP_Query($args);
								if ( $the_query->have_posts() ):
								    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>    
								  
									<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
										<a href="<?php  the_permalink(); ?>">
																<?php 
																//the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
							                                        the_post_thumbnail( array(500,250
							                                        ) );     ?> <?php //endif; 
							                                           // Medium resolution (300 x 300 max height 300px)?>
									
											<div class="fh5co-copy">
												<h3><?php the_title(); ?></h3>
												<p><?php //the_content(); 
												echo wp_trim_words(get_the_content(), 10); ?></p>
											</div>
										</a>
									</div>
										

										<?php endwhile; ?>
								<div class="col-md-12 text-center">
									<nav aria-label="Page navigation">
									 <!--  <ul class="pagination"> -->
									  	<?php pagination_bar( $the_query );
											
									  	 ?>
									    <!--<li>
									      <a href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li class="active"><a href="#">1</a></li>
									    <li><a href="#">2</a></li>
									    <li><a href="#">3</a></li>
									    <li><a href="#">4</a></li>
									    <li><a href="#">5</a></li>
									    <li>
									      <a href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									      </a>
									    </li> -->

									  <!-- </ul> -->

									</nav>

									<?php wp_reset_postdata();
									 endif; ?>
                                       
								</div>

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