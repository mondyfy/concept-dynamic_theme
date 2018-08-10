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
		<title><?php echo wp_title('', true, 'right'); ?> | <?php echo get_bloginfo()  ?> </title>
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
		<body <?php body_class(); ?>>
			
		<div class="fh5co-loader"></div>
		
		<div id="page">
		<nav class="fh5co-nav" role="navigation">
			




			<div class="container">
				<div class="row">
					<div class="col-xs-2 text-left">
						<div id="fh5co-logo"><a href="<?php get_permalink(); ?>"><?php echo get_theme_mod('header_text1'); ?><span>.</span></a></div>
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

								
								<h1 class="mb30"><?php echo get_theme_mod('banner_title'); ?></h1>
								<p>
									<a href="<?php echo get_theme_mod('banner_call_on_site_link'); ?>" target="_blank" class="btn btn-primary"><?php echo get_theme_mod('banner_call_on_site'); ?></a>  <em class="or">or</em> 
									<a href="<?php echo get_theme_mod('banner_call_on_video_link'); ?>" class="link-watch popup-vimeo"><?php echo get_theme_mod('banner_call_on_video'); ?></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>