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

	


	  <div class="search-result-count default-max-width">
	 	<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	 </div><!-- .search-result-count -->
	<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        .Search2{
            color: red;
            margin-bottom: 1px;
        }

        h4{
            text-align: center;
            margin-bottom: 1px;
            
        }
        h6{
            text-align: center;
            margin-top: 1px;
            
        }
        ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
    </style>
    <body>
        
    <h4 style="
    margin-bottom: 1px;
"><span class="Search2">Search: </span><?php
    $search_query = get_search_query(); // Lấy nội dung câu tìm kiếm

    if ($search_query) {
        echo esc_html($search_query);
    } else {
        echo 'Vui lòng nhập từ khóa tìm kiếm.';
    }
?></h4>
        <h6 style="
    margin-top: 5px;
">We could not find any result for search. You can give it another try through the search form below</h6>
    </body>
    </html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <br/>
    <div class="row justify-content-center" style="background: #d3df83;
    padding-bottom: 25px;
    padding-top: 25px;">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
<div class="row">
	<div class="col-md-3" style="
    margin-left: 10px;">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h4 style="text-align: left">
                                <?php the_title(); ?>
                            </h4>
                            <hr>
                            <p><img class="img-responsive">
                                <?php the_post_thumbnail(); ?>
                            </p>
                            <p>
                                <?php
                                        $excerpt = get_the_excerpt(); // Lấy phần tóm tắt của bài viết
                                        $trimmed_excerpt = wp_trim_words( $excerpt, 20, '...' ); // Giới hạn 20 từ và thêm dấu "..." vào cuối

                                        echo $trimmed_excerpt; // Hiển thị phần tóm tắt đã được giới hạn
                                    ?>
                            </p>
        <?php endwhile;?>
        <?php endif; ?>

    </div>
	<div class="col-md-6"><?php ?><?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<div class="container" style="
    border: 1px solid #efecec;
    margin: 10px;">
<div class="row title">
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
	<div class="col-md-3" ></div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4 style="text-align: left">Latest News</h4>
            <ul class="timeline">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a target="_blank" href="https://www.totoprayogo.com/#">
                        <?php the_title(); ?>
                    </a>
                    <a href="#" class="float-right">
                        <?php
                        $date = date('F d, Y'); // Lấy ngày tháng năm hiện tại
                        echo $date; // Hiển thị ngày tháng năm?></a>
                    <p style="color: #000">
                        <?php
                        $excerpt = get_the_excerpt(); // Lấy phần tóm tắt

                        $limited_excerpt = wp_trim_words($excerpt, 30, ''); // Giới hạn 20 từ

                        echo $limited_excerpt; // Hiển thị phần tóm tắt đã giới hạn?>....
                    </p>
                </li>
                <?php endwhile;?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>


	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
