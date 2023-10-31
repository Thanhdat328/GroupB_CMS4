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
	//  ?>
	  <header class="page-header alignwide">
	  	<h1 class="page-title">
	 		<?php
	// 		printf(
	//  			/* translators: %s: Search term. */
	//  			esc_html__( 'Results for "%s"', 'twentytwentyone' ),
	// 			'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
	//  		);
	//  		?>
	 	</h1>
	  </header><!-- .page-header -->

	  <div class="search-result-count default-max-width">
	 	<?php
	// 	printf(
	// 		esc_html(
	// 			/* translators: %d: The number of search results. */
	// 			_n(
	// 				'We found %d result for your search.',
	// 				'We found %d results for your search.',
	// 				(int) $wp_query->found_posts,
	// 				'twentytwentyone'
	// 			)
	// 		),
	// 		(int) $wp_query->found_posts
	// 	);
	// 	?>
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
