<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="top_header" id="top_header">
		<div class="wrapper">

			<div class="header_wrapper">
				<div class="header_third search_section menu_button">
					<div class="menu_icon" data-menu="top_navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
					<div class="search_box">
						<?php echo get_search_form(); ?>
					</div>
				</div>

				<div class="header_third logo_section">
					<a href="<?php echo home_url(); ?>" class="logo_link" target=_blank>
						<img src="<?php echo ale_get_option('sitelogo'); ?>" alt="">
					</a>
				</div>

				<div class="header_third social_section">
					<?php if(ale_get_option('vi')) { ?>
						<a href="<?php echo ale_get_option('vi'); ?>" target=_blank>
							<i class="fa fa-vimeo-square" aria-hidden="true"></i>
						</a>
					<?php	} ?>

					<?php if(ale_get_option('insta')) { ?>
						<a href="<?php echo ale_get_option('insta');?>" target=_blank>
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					<?php	} ?>


					<?php if(ale_get_option('twi')) { ?>
						<a href="<?php echo ale_get_option('twi');?>" target=_blank>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
						</a>
					<?php	} ?>

					<?php if(ale_get_option('fb')) { ?>
						<a href="<?php echo ale_get_option('fb');?>" target=_blank>
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</a>
					<?php	} ?>
				</div>
			</div>
		</div>

		<nav class="top_navigation" id="top_navigation">
			<div class="wrapper h-100">
				<div class="top_navigation_flex">
					<?php
					if ( has_nav_menu( 'header_menu' ) ) {
						wp_nav_menu(array(
							'theme_location'=> 'header_menu',
							'menu'			=> 'Header Menu',
							'menu_class'	=> 'ale_headermenu cf',
							'walker'		=> new Aletheme_Nav_Walker(),
							'container'		=> '',
						));
					}
					?>
					<div class="donate_button">
						<a href="<?php echo ale_get_option('donate_link'); ?>"><?php _e('Donate', 'iglesia') ?></a>
					</div>
				</div>
			</div>
		</nav>
	</header>