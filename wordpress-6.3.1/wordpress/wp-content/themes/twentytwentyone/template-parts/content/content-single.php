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
<style>
.detail .title .headlinesdate {
    background: #f5ce31;
    border-radius: 50%;
    padding: 10px 17px;
}
	
	.col-md-2 {
    width: 16.66666667%;
}
</style>

<div class="container">	<header class="entry-header alignwide">
	
		
	</header><!-- .entry-header -->
	
	<div class="col-md-8">
                            <div class="row title">
    <div class="col-md-10 col-xs-9 ">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-md-2 col-xs-3" style="
    background: #f5ce31;
    border-radius: 50%;
   
	padding-left: 40px;
">
        <div class="headlinesdate" >
       
                        <div class="headlinesdm" style ="float: left;
    font-family: 'Prata', serif;">
                <div class="headlinesday" style = "     border-bottom: 1px solid #000;">24</div>
                <div class="headlinesmonth">06</div>
            </div>
            <div class="headlinesyear" style="line-height: 3.5em;
    float: left;
    margin-left: 3px;">'18</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"><div class="overviewline"></div></div>
</div>
<div class="row overview">
    <div class="col-md-12">
        <p>Theo khảo sát của VietnamWorks về ngành công nghệ thông tin (CNTT) ở Việt Nam, trong 3 năm qua, số lượng công việc ngành CNTT đã tăng trung bình 47%/năm.</p>

    </div>
</div>
<div class="row overview_thumb">
    <div class="col-md-12">
    </div>
</div>
<div class="row maincontent">
    <div class="col-md-12">
        <p>
            Tuy nhiên, số lượng nhân sự ngành này lại chỉ tăng ở mức trung bình 8% dẫn đến việc thiếu hụt nghiêm trọng nhân lực trong lĩnh vực này. Nguyên nhân chính được đưa ra là do số lượng doanh nghiệp tuyển dụng trong ngành CNTT đã tăng 69% từ năm 2012. Đặc biệt, số lượng công ty phần mềm đã tăng đến 124% chỉ trong vòng 4 năm. Khảo sát cũng cho thấy nếu cứ tiếp tục tăng trưởng nhân lực CNTT ở mức 8% như hiện nay, Việt Nam sẽ thiếu hụt khoảng 78.000 nhân lực CNTT mỗi năm và đến năm 2020 sẽ thiếu hơn 500.000 nhân lực CNTT.<br>
<br>
&ZeroWidthSpace;Dự báo trong 2 năm 2017 và 2018, các cơ sở đào tạo trong cả nước sẽ cho "ra lò" khoảng 80.000 nhân lực CNTT, so với nhu cầu tính đến cuối năm 2018, Việt Nam vẫn còn thiếu khoảng 70.000 nhân lực cho lĩnh vực này.
</p><div style="text-align: right;">&ZeroWidthSpace;<?php the_author(); ?></div>
        <p></p>
    </div>
</div>

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
