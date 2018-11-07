<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fjordstudio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="author-intro">
		<h2>
			Author:
		</h2>
		<img src="https://fjordstudio.dk/assets/img/pt/png_portrait.png" alt="Portrait image of Katrine-Marie Burmeister">
		<p>
			<strong>Name: </strong>Katrine-Marie Burmeister
		</p>
		<p>
			<strong>Description: </strong>A renowned cynic. Poet > human. </p>
		<p>
			Somewhat artistic. Somewhat thoughtful. Quite possibly too serious.
		</p>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

