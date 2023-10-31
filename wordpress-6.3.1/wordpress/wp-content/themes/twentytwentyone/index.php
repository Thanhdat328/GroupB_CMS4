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

<div class="row">
 <div class="col-md-3 list-top-views">
			<div class="border-row-top-views"> 
				<div class="title-top-views">
					<h2 class="title-top-views-in">
						<a class="inner-title"href=""><?php echo get_option('widget_block')[5]['content']; ?></a>
					</h2>
				</div>
				<div class="title-post-top-views">
					<?php
					$args = array(
						'numberposts' => 8, 
						'post_status' => 'publish', 
						'orderby'     => 'date', 
						'order'       => 'DESC'
					);

					$recent_posts = get_posts($args);
					$count = 1;
					foreach ($recent_posts as $post) {
						setup_postdata($post);
						?>
							<div class="list-top-views ">
								<span class="number-top-views"><?php echo $count; ?></span>
								<h3 class="list-title-top-views"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<?php
							$count++;
            }
						wp_reset_postdata();
						?>
				</div>
			</div>
		</div>
    <div class="col-md-6"></div>
    <div class="col-md-3"></div>
</div>

<?php
get_footer();
?>