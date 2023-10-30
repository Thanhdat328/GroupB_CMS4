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
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}
?>
<style>
	ul.timeline {
		list-style-type: none;
		position: relative;
	}

	ul.timeline:before {
		content: ' ';
		background: #d4d9df;
		display: inline-block;
		position: absolute;
		left: 29px;
		width: 2px;
		height: 100%;
		z-index: 400;
	}

	ul.timeline>li {
		margin: 20px 0;
		padding-left: 20px;
	}

	ul.timeline>li:before {
		content: ' ';
		background: white;
		display: inline-block;
		position: absolute;
		border-radius: 50%;
		border: 3px solid #22c0e8;
		left: 20px;
		width: 20px;
		height: 20px;
		z-index: 400;
	}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h4>Latest News</h4>
			<ul class="timeline">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<li>
					<a target="_blank" href="https://www.totoprayogo.com/#">
						<?php the_title(); ?>
					</a>
					<a href="#" class="float-right">
						<?php
						$date = date('F d, Y'); // Lấy ngày tháng năm hiện tại
						echo $date; // Hiển thị ngày tháng năm?></a>
					<p>
						<?php
						$excerpt = get_the_excerpt(); // Lấy phần tóm tắt

						$limited_excerpt = wp_trim_words($excerpt, 30, ''); // Giới hạn 20 từ


						echo $limited_excerpt; // Hiển thị phần tóm tắt đã giới hạn?>....
					</p>
				</li>
				<?php endwhile;?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>


<?php

get_footer();
?>