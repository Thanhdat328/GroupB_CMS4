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

	<div class="entry-content">
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
	<style>

    .headlinestitle a {
        text-decoration: none;
        margin-top: 20px;
        color: black;
    }

    ul {
        padding-left: 0px;
        margin-bottom: 0px;
    }

    li {
        list-style: none;
        display: flex;
    }

    .headlinesday {
        border-bottom: black solid 1px;

    }

    .headlinesdate {
        display: flex;
        font-family: 'Times New Roman', Times, serif;
        color: black;
        padding-left: 5px;
    }

    .headlinesyear {
        padding-top: 8px;
        padding-right: 25px;
    }

    .headlinestitle {
        display: inline;
        margin-top: 7px;
    }

    .headlinesdm {
        padding-right: 5px;
    }
	</style>
	<div class="container " style = "text-align: center; padding-left: 280px;">
            <div class="headlines">

                <ul style="margin-bottom: 0px;">
                    <?php
                    $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => -1, 
                    );

                    $posts = get_posts($args);

                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                    <li>
                        <div class="headlinesdate">
                            <div class="headlinesdm">
                                <div class="headlinesday">
                                    <?php
                                    $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
                                    $post_date = get_the_date('d', $post_id); // Lấy ngày đăng bài viết và định dạng ngày tháng (VD: 28/10/2023)
    
                                    echo $post_date;
                                    ?>
                                </div>
                                <div class="headlinesmonth">
                                    <?php
                                    $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
                                    $post_date = get_the_date('m', $post_id); // Lấy ngày đăng bài viết và định dạng ngày tháng (VD: 28/10/2023)
                                    echo $post_date;
                                    ?>
                                </div>
                            </div>
                            <div class="headlinesyear">
                                <?php
                                    $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
                                    $post_date = get_the_date('Y', $post_id); // Lấy ngày đăng bài viết và định dạng ngày tháng (VD: 28/10/2023)
                                    echo $post_date;
                                ?>
                            </div>
                        </div>
                        <div class="headlinestitle">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </li>
                    <?php
                }

                    wp_reset_postdata();
                    ?>
                </ul>

            </div>

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
