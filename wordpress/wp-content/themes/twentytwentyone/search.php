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
	<style>
    #border{
        border-right:1px solid black;
            margin-bottom: 20px;
    margin-top: 20px;
    border-width: 2px;
    margin-top: 35px;
    }
    .tieuDe{
        color: #428bca;
    text-decoration: none;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    font-weight: bold;

    }
    #noiDung{
        text-transform: uppercase;
    font-size: 0.9em;
    color: #7b6d82;

    }
    .bg{
        background: red;
    }
</style>

	
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6"><?php ?><?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
   <div class="container" style="
    border: 1px solid #efecec;
    margin: 10px;">
  <div class="row">
	<div class="col-md-3"><?php echo get_the_post_thumbnail();?></div>
   <div class="col-3 text-center"  id="border"><span style="font-family: 'Prata', serif;font-size: 3.1em;line-height: 1em;"><?php echo get_the_date('d'); // lấy ngày post bài ?></span> <br>Tháng <?php echo get_the_date('m'); // lấy ngày post bài ?></div>
        
   
   <div class="col-6" style="
    max-width: 50%;
"><h4 style="
    margin-top: 35px;"><a class="tieuDe" href=<?php the_permalink(); ?>><?php the_title();?></a></h4>
   
   <p id="noiDung"><?php the_excerpt(); ?><a href=<?php the_permalink(); ?>>[...]</a></p>
</div>
    </div>
  </div>

<?php endwhile;?>
<?php endif; ?></div>
	<div class="col-md-3"></div>
</div>
	</div><!-- .search-result-count -->
	<?php

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
