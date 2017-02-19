<?php
/**
 * The template for displaying the header
 *
 * @package Blaze
 * @since Blaze 1.0
 */

 ?>
<?php $themefolder=get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="<?php echo $themefolder;?>/style.css">
		
		<script type="text/javascript" src="<?php echo $themefolder;?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $themefolder;?>/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row top-message">
					<div class="col-sm-9 message">
						<?php bloginfo('description');?>
					</div>
					<div class="col-sm-3">
						<span class="social-icons">
							<a href="<?php echo get_theme_mod("social_fb");?>" class="fa fa-facebook"></a>
							<a href="<?php echo get_theme_mod("social_tw");?>" class="fa fa-twitter"></a>
							<a href="<?php echo get_theme_mod("social_gp");?>" class="fa fa-google-plus"></a>
							<a href="<?php echo get_theme_mod("social_rss");?>" class="fa fa-rss"></a>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<a href="<?php bloginfo('url');?>" class="brand-logo">
							<img src="<?php get_logo(); ?>" alt="Blaze Logo"/>
						</a>
					</div>
					<!--<div class="col-md-5">
						<div class="input-group has-green" style="margin-bottom:10px">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-green" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
					</div> /input-group -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-green">
						<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php
									
									
									if ( !has_nav_menu('header-menu')) {
										wp_nav_menu(array('container' => '','menu_class' => 'nav navbar-nav'));
									}
									else{
										$theme_location = 'header-menu';
										$theme_locations = get_nav_menu_locations();
										$menu_count = get_term($theme_locations[$theme_location],'nav_menu');
										$count = $menu_count->count;
										($count!=0) ? $class_post = 12/$count : $class_post = 1;
									
										wp_nav_menu(array('theme_location' => 'header-menu','container' => '','menu_class' => 'nav navbar-nav'));
									}
								?>
								
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
				
			</header>