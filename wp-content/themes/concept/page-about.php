	<!DOCTYPE HTML>
	<!--
		Concept by gettemplates.co
		Twitter: http://twitter.com/gettemplateco
		URL: http://gettemplates.co
	-->
	<html <?php language_attributes(); ?>>
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

							<h1 class="mb30">About Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-team">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
					<span>Productive Staff</span>
					<h2>Meet Our Staff</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>



			<div class="row">

				<?php


					$args = array( 'post_type' => 'staffs', 'posts_per_page' => 3);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) {?>
								<?php while ( $the_query->have_posts() ) { $the_query->the_post();

					 ?>

				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<?php the_post_thumbnail( array(100, 100) );?>
						<h3><?php the_title(); ?></h3>
						<strong class="role">
							
					<?php $designation = get_post_meta(get_the_id(), 'Designation Link', true);
					       $facebook = get_post_meta(get_the_id(), 'Facebook Link', true);
					       $twitter = get_post_meta(get_the_id(), 'Twitter Link', true);
					       $dribbble = get_post_meta(get_the_id(), 'Dribbble Link', true);
					       $github = get_post_meta(get_the_id(), 'Github Link', true);

					?> 
					<?php echo $designation ?>

						</strong>
						<p><?php the_content();?></p>
						<ul class="fh5co-social-icons">
							<li><a href="<?php echo $facebook ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo $twitter ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo $dribbble ?>"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php echo $github ?>"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			
				 <?php } } ?>
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