<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="row title">
		<div class="col-md-3 list-a">
			<div class="panel-heading"><h2>Categories</h2></div>
			<div class="crossedbg"></div>
			<div class="panel-body">
				<ul class="list-group">
				<?php
    				$args = array(
						'orderby'    => 'name',
						'order'      => 'ASC',
						'hide_empty' => false
					);
				
					$categories = get_categories($args); // Lấy danh sách các danh mục dựa trên các tham số trong $args
				
					if ($categories) {
						echo '<ul>';
				
						foreach ($categories as $category) {
							echo '<li class="list-p"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						}
				
						echo '</ul>';
					} else {
						echo 'Không có danh mục nào.';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
					
	<div class="entry-content ">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
