<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'susty' ); ?></a>

	<header id="masthead">
		<?php
		if ( is_front_page() && is_home() && ! get_query_var( 'menu' ) ) :
			?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		?>
		<a href="<?php echo esc_url( ( get_option( 'permalink_structure' ) ? home_url( '/' ) : home_url( '/' ) ) ); ?>"><?php esc_html_e( 'Home', 'susty' ); ?></a>&nbsp;|&nbsp;
		<a href="<?php echo esc_url( ( get_option( 'permalink_structure' ) ? home_url( '/about/' ) : home_url( '/?about' ) ) ); ?>"><?php esc_html_e( 'About', 'susty' ); ?></a>&nbsp;|&nbsp;
		<a href="<?php echo esc_url( ( get_option( 'permalink_structure' ) ? home_url( '/archive/' ) : home_url( '/?archive' ) ) ); ?>"><?php esc_html_e( 'Archive', 'susty' ); ?></a>
	</header>

	<div id="content">
