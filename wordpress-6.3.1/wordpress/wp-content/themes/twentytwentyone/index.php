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
<?php 
$post_date = $post->post_date;				
$post_date_day = date('d',strtotime($post_date));				
$post_date_month = date('m',strtotime($post_date));				
?>


<?php ?><?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
   <div class="container">
  <div class="row">
   <div class="col-3 text-center"  id="border"><span style="font-family: 'Prata', serif;font-size: 3.1em;line-height: 1em;"><?php echo get_the_date('d'); // lấy ngày post bài ?></span> <br>Tháng <?php echo get_the_date('m'); // lấy ngày post bài ?></div>
        
   
   <div class="col-9" style="
    max-width: 50%;
"><h4 style="
    margin-top: 35px;"><a class="tieuDe" href=<?php the_permalink(); ?>><?php the_title();?></a></h4>
   
   <p id="noiDung"><?php the_excerpt(); ?><a href=<?php the_permalink(); ?>>[...]</a></p>
</div>
    </div>
  </div>
    
   </div>
<?php endwhile;?>
<?php endif; ?>




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