<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/main.css' ?>">

<?php wp_head(); ?>

<body id="body">
	<?php
		include('src/components/navbar.php'); 
		include('slide.php');
	?>
<main>
	
	