<?php
/**
 * Template Name: Home Slideshow Template
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>

    <ul class="cb-slideshow">
        <li><span>Image 01</span><div></div></li>
        <li><span>Image 02</span><div></div></li>
        <li><span>Image 03</span><div></div></li>
        <li><span>Image 04</span><div></div></li>
        <li><span>Image 05</span><div></div></li>
        <li><span>Image 06</span><div></div></li>
    </ul>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

	<?php endwhile; // end of the loop. ?>
	<?php wp_footer(); ?>
</body>
</html>
