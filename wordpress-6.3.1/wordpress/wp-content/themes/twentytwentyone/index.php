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
<?php 
$post_date = $post->post_date;				
$post_date_day = date('d',strtotime($post_date));				
$post_date_month = date('m',strtotime($post_date));				
?>
<div class="row">
    <div class="col-md-3">hihi</div>
    <div class="col-md-6"><?php if (have_posts()) : ?>

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
    <div class="col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?><style>
    .headlinestitle a {
        text-decoration: none;
        margin-top: 20px;
        color: #006ecd;

    }

    ul {
        padding-left: 0px;
        margin-bottom: 0px;
    }

    li {
        list-style: none;
        display: flex;
    }

    .headlinesdate {
        display: flex;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        padding-left: 20px;
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
    .tieude {
        margin-left: 10px;
        font-size: 15px;
        
    }

    .line{
        border-bottom: solid grey 1.5px;
        margin-left: 10px;
        width: 45px;
    }

    .bg-ul{
        background-color: white;
    }

</style>
<div class="col-md-3">
            <div class="headlines">

                <ul class="bg-ul" style="margin-bottom: 0px;">
                    <?php
                    $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => -1, 
                    );

                    $posts = get_posts($args); ?>
                    <div class="tieude line">Comments</div>
                    <?php
// Lấy danh sách comment
$comments = get_comments();

// Kiểm tra xem có comment hay không'/
if (!empty($comments)) {
    // Hiển thị danh sách comment
    foreach ($comments as $comment) {
        echo '<div class="comment1" >';
        echo '<a href="" style = "MARGIN-LEFT: 25PX;">' . $comment->comment_content . '</a>';
        echo '</div>';
    }
}
?>

                </ul>

            </div></div>
</div>




<?php

get_footer();
?>