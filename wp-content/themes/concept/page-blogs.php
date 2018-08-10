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


							<h1 class="mb30">Our Blog</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
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
					$args = array( 'post_type' => 'post', 'posts_per_page' => 6);
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
							<p class="author"><img src="<?php //bloginfo('stylesheet_directory');?>/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
						<div class="fh5co-post">
							<span class="fh5co-date">Sep. 24th</span>
							<h3><a href="#">Web Design for the Future</a></h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							<p class="author"><img src="<?php //bloginfo('stylesheet_directory');?>/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
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