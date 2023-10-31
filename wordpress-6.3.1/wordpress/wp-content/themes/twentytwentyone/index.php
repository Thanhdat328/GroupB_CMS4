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
    #border {
        border-right: 1px solid black;
        margin-bottom: 20px;
        margin-top: 20px;
        border-width: 2px;
        margin-top: 35px;
    }

 

    #noiDung {
        text-transform: uppercase;
        font-size: 0.9em;
        color: #7b6d82;

    }

   
    .vien {
        border: solid 1px #dee2e6;
        margin-bottom: 20px;
    }

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
    <div class="col-md-6">
    <?php 
$post_date = $post->post_date;              
$post_date_day = date('d',strtotime($post_date));               
$post_date_month = date('m',strtotime($post_date));             
?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="container vien">
    <div class="row">
        <div class="col-3 text-center" id="border"><span
                style="font-family: 'Prata', serif;font-size: 3.1em;line-height: 1em;">
                <?php echo get_the_date('d'); // lấy ngày post bài ?>
            </span> <br>Tháng
            <?php echo get_the_date('m'); // lấy tháng post bài ?>
        </div>

        <div class="col-9" style="max-width: 50%;">
            <h4 style="margin-top: 35px;"><a class="tieuDe" href=<?php the_permalink(); ?>>
                    <?php the_title();?>
                </a></h4>

            <p id="noiDung">
            <?php
$excerpt = get_the_excerpt(); // Lấy phần tóm tắt

$limited_excerpt = wp_trim_words($excerpt, 30, ''); // Giới hạn 20 từ

$lowercase_excerpt = strtolower($limited_excerpt); // Chuyển thành chữ thường

echo $lowercase_excerpt; // Hiển thị phần tóm tắt đã giới hạn và chữ thường
?><a href=<?php the_permalink(); ?>>[...]</a>
            </p>
        </div>
    </div>

</div>
<?php endwhile;?>
<?php endif; ?>


    </div>
    <div class="col-md-3"></div>
</div>

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
get_footer();
?>