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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

    /* CSS Test begin */
    .comment-box {
        margin-top: 10px !important;
    }

    /* CSS Test end */

    .comment-box img {
        width: 50px;
        height: 50px;
        
    }

    .comment-box .media-left {
        
    }

    .comment-box .media-body p {
        border: 1px solid #ddd;
        padding: 10px;
    }
    .media-body{
        margin-top: -50px;
        margin-left: 75px;
    }


    .comment-box .media-body .media p {
        margin-bottom: 0;
    }

    .comment-box .media-heading {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        padding: 7px 10px;
        position: relative;
        margin-bottom: -1px;
    }

    .media-heading:before {
        content: "";
        width: 12px;
        height: 12px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-width: 1px 0 0 1px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        position: absolute;
        top: 10px;
        left: -6px;
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
            <div class="newsall">
                <a href="<?php
                $search_keyword = 'wordpress';
                $search_url = get_search_link( urlencode( $search_keyword ) ); // Lấy đường dẫn trang kết quả tìm kiếm với từ khóa đã mã hóa
                echo $search_url; // Hiển thị đường dẫn trang kết quả tìm kiếm
                ?>">Xem tất cả tin tức</a>
            </div>
        </div>

        <!-- (14) -->
        <div class="row container-fluid">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                    $comments = get_comments(); // Lấy danh sách các comment
                    $previous_author = ''; // Biến lưu trữ người comment trước đó

                    foreach ($comments as $comment) {
                        $comment_author = $comment->comment_author;
                    
                    $comment_id = get_comment_ID(); // Lấy ID của comment hiện tại
                    $avatar_html = get_avatar($comment_id, 50);  
                ?>

                <div class='container'>
                    <div class="media comment-box">
                        <div class="media-left">
                            <a href="<?php
                                        $comment_author_url = get_comment_author_url();

                                        if (!empty($comment_author_url)) {
                                            echo '<a href="' . esc_url($comment_author_url) . '">' . get_comment_author() . '</a>';
                                        } else {
                                            echo get_comment_author();
                                        }
                                    ?>">
                            <?php echo $avatar_html; ?>
                            </a>
                        </div>
                    </div>
                </div>


                <?php    if ($comment_author !== $previous_author) {?>
            
                    <div class="media comment-box">
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $comment_author; ?></h4>
                                <p>
                                    <?php echo $comment->comment_content ;?>
                                </p>
                        </div>
                    </div>

        <?php   
     }
?>
                        
        <?php  $previous_author = $comment_author; 
    }
?>
    <?php
            if (comments_open() && !have_comments()) {
                comment_form();
            }
        ?>
                  
            </div>
            
                
                
                        

                        <!-- .entry-content -->

                        <footer class="entry-footer default-max-width">
                            <?php twenty_twenty_one_entry_meta_footer(); ?>
                        </footer><!-- .entry-footer -->

                        <?php if ( ! is_singular( 'attachment' ) ) : ?>
                        <?php get_template_part( 'template-parts/post/author-bio' ); ?>
                        <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->