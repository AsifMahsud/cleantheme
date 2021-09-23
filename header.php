<!doctype html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php 
	if ( is_front_page() ){ ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/styles/front.css' ?>">
	<?php } ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
