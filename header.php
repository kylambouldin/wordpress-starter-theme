<?php
/**
* header.php
*
*/
?>
<!DOCTYPE html>
<html>

<head>
		<!-- meta data -->
		<title><?php echo esc_attr(get_bloginfo('name')); ?></title>
		<!-- favicon -->
		<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'primary-menu' ) ); ?>
			</nav>
		</header>