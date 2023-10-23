<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
		if (is_search()) : ?>
			<?php $post = get_post(get_the_ID());
			$day = date('d', strtotime($post -> post_date));
			$month = date('m', strtotime($post -> post_date));
			$year = date('yyyy', strtotime($post -> post_date));
			$title = $post -> post_title;
			$content = $post -> post_content; ?>
			<div class="list_search_detail">
				<?php echo get_the_post_thumbnail(); ?>
				<div class="middle_search_detail">
					<div class="date"><?php echo $day;?></div>
					<div class="month"><?php echo "Thang" . $month;?></div>
				</div>
				<div class="right_search_detail">
					<div class="title_search_detail"><?php echo $title;?></div>
					<div class="$content_search_detail"><?php echo $content;?></div>
				</div>
			</div><?php
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
