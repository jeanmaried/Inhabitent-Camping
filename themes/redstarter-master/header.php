<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script type="text/javascript" src="http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/js/search.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<?php $img = get_field("banner_image");?>

			<?php if ($img && true != is_post_type_archive()) : ?>
				<?php $url = "http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-tent-white.svg";
				$site_nav_id = "site-navigation";
				$site_header = "site-header2"; ?>
			<?php else :?>
				<?php $url = "http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-tent.svg";
				$site_nav_id = "site-navigation2";
				$site_header = "site-header"; ?>
			<?php endif; ?>

	<?php echo '<header id="masthead" class="'.$site_header.' flex align-items-center justify-around flex-wrap" role="banner">'; ?>

		<?php echo '<a href="http://localhost:8888/project-wordpress/"><img src="'.$url.'"></a>'; ?>
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<?php echo '<nav id="'.$site_nav_id.'" class="main-navigation flex justify-end align-items-around flex-wrap" role="navigation">';?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				</nav><!-- #site-navigation -->

			<div id="search">
				<?php get_search_form();?>
			</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
