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
<style>
    .headlines {
        background: #56bdbf;
    }

    .headlinestitle a {
        text-decoration: none;
        margin-top: 20px;
        color: white;
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
        border-bottom: white solid 1px;

    }

    .headlinesdate {
        display: flex;
        font-family: 'Times New Roman', Times, serif;
        color: white;
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

    .newsall {
        text-align: center;
        background: #62c6c8;
    }

    .newsall a {
        color: white;
        font-weight: bold;
        pad
    }
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->

    <div class="row">
        <!-- Categories (9) -->
        <div class="col-md-3"></div>

        <!-- Detail (6) -->
        <div class="col-md-6">
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
            </div>
        </div>



        <!-- Revent Post (10) -->
        <div class="col-md-3 bg-color">
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
                                    $current_date = date_i18n( 'd' ); // Lấy ngày hiện tại theo định dạng "dd/mm/yyyy"
                                    echo $current_date; // Hiển thị ngày hiện tại
                                    ?>
                                </div>
                                <div class="headlinesmonth">
                                    <?php
                                    $current_date = date_i18n( 'm' ); // Lấy ngày hiện tại theo định dạng "dd/mm/yyyy"
                                    echo $current_date; // Hiển thị tháng hiện tại
                                    ?>
                                </div>
                            </div>
                            <div class="headlinesyear">
                                <?php
                                $current_date = date_i18n( 'Y' ); // Lấy ngày hiện tại theo định dạng "dd/mm/yyyy"
                                echo $current_date; // Hiển thị năm hiện tại
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
            <div class="newsall">
                <a href="<?php
                $search_keyword = 'wordpress';
                $search_url = get_search_link( urlencode( $search_keyword ) ); // Lấy đường dẫn trang kết quả tìm kiếm với từ khóa đã mã hóa
                echo $search_url; // Hiển thị đường dẫn trang kết quả tìm kiếm
                ?>">Xem tất cả tin tức</a>
            </div>
        </div>

        <!-- (14) -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                
                    <div class="row">
                        <div class=" container-fluid media comment-box">
                            <div class="media-left">
                                <a href="#">
                                    <img class="img-responsive user-photo"
                                        src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">John Doe</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="img-responsive user-photo"
                                                src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jane Doe</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="img-responsive user-photo"
                                                src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="col-md-3"></div>
        </div>

        <!-- .entry-content -->

        <footer class="entry-footer default-max-width">
            <?php twenty_twenty_one_entry_meta_footer(); ?>
        </footer><!-- .entry-footer -->

        <?php if ( ! is_singular( 'attachment' ) ) : ?>
        <?php get_template_part( 'template-parts/post/author-bio' ); ?>
        <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->