<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<style>
    
</style>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title">
        <?php single_post_title(); ?>
    </h1>
</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}
?>





<!-- <div class="container">
<div class="col-md-8">
    
    <div class="list_news">
        <div class="list_new_view">
            <div class="row">
                <div class="col-md-5">
                    <div class="top_news_block_thumb">
                        <img src="<?php the_post_thumbnail(); ?>">
                    </div>
                </div>
                <div class="col-md-7 top_news_block_desc">
                    <div class="row">
                        <div class="col-md-3 col-xs-3 topnewstime">
                            <span class="topnewsdate"><?php the_date(); ?></span><br>
                            <span class="topnewsmonth"><?php the_date(); ?></span><br>
                        </div>
                        <div class="col-md-9 col-xs-9 shortdesc">
                            <h4>
                                <a
                                    href="http://fit.tdc.edu.vn/tin-tuc/dang-ky-ky-nang-viet-cv-va-ky-nang-tra-loi-phong-van-hieu-qua">
                                    <?php the_title(); ?>
                            </h4>
                            <p><?php the_excerpt(); ?><a
                                    href="http://fit.tdc.edu.vn/tin-tuc/dang-ky-ky-nang-viet-cv-va-ky-nang-tra-loi-phong-van-hieu-qua">[...]</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
             
</div>
</div>

 -->

<?php

get_footer();
?>