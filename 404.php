<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fjordstudio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="site-content">
				<div class="site-main content-area">
					<h1 class="page-title"><?php esc_html_e( 'Error 404 - Page not found.', 'fjordstudio' ); ?></h1>
					<p><?php esc_html_e( 'Try another link from the menu.', 'fjordstudio' ); ?></p>
				</div>

				<?php get_sidebar(); ?>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
