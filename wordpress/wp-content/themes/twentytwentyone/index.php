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

get_header(); 
	?>
            <div id="main">
                    <div class="row">
                            <div class="row title">
    <div class="col-md-10 col-xs-9">
    </div>
    
</div>
<div class="row">
    <div class="col-md-12"><div class="overviewline"></div></div>
</div>
<div class="row maincontent">
    <div class="col-md-12">
        
    </div>
</div>

                        </div>
                        <div class="col-md-4">
                            <div class="widget html">
	
	<style>
            .holder {
                perspective: 800px;
                width: 80%;
                margin: 100px auto;
                padding-bottom: 60%;
            }

            .cube {
                position: relative;
                width: 100%;
                transform-style: preserve-3d;
                animation: spin 10s infinite ease-in-out;
            }

            .cube-img {
                width: 100%;
                position: absolute;
                display: block;
                top: 0;
                left: 0;
            }

            .face {
                width: 100%;
                position: absolute;
                transform-style: preserve-3d;
                backface-visibility: hidden;
            }

            .txt {
                transform-style: preserve-3d;
            }

            .txt div {
                transform-style: preserve-3d;
                display: inline-block;
            }

            @keyframes spin {
                0% {
                    transform: rotateY(0deg);
                }

                15% {
                    transform: rotateY(0deg);
                }

                25% {
                    transform: rotateY(90deg);
                }

                40% {
                    transform: rotateY(90deg);
                }

                50% {
                    transform: rotateY(180deg);
                }

                65% {
                    transform: rotateY(180deg);
                }

                75% {
                    transform: rotateY(270deg);
                }

                90% {
                    transform: rotateY(270deg);
                }

                100% {
                    transform: rotateY(360deg);
                }
            }
        </style>
  
	
	<style>
        .badge { display: inline-block; padding: .25em .4em; font-size: 75%; font-weight: 700; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: .25rem; transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out; }
        .badge-warning { color: #212529; background-color: #ffc107; }
        .badge-info { color: #fff; background-color: #17a2b8; }
        .table.fit-calendar>tbody>tr>td, .table.fit-calendar>tbody>tr>th {text-align: left; vertical-align: middle;}
		
    </style>
    <div class="widget topevents_itdc">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Xem nhiều</h2>
            </div>
            <div class="crossedbg"></div>
            <div class="panel-body">
                <table class="table fit-calendar">
                    <tbody>
                       
                        <tr>
                            <td scope="row" style="display: flex"><p id="numberss" style="margin-right: 10px">1</p> <b><a href="">Việt Nam thua Hàn Quốc 0-6</a></b></td>
                            <td>
                                <span class="badge badge-warning">Sáng</span> <span class="badge badge-info">Thứ 2</span><br>
                                <span class="badge badge-warning">Chiều</span> <span class="badge badge-info">Thứ 5</span><br>
                                <span class="badge badge-warning">Sáng</span> <span class="badge badge-info">Thứ 6</span>
                            </td>
                        </tr>
 <tr>
                            <td scope="row"><b>Phan Thị Thể</b><br><i>(Phó Khoa CNTT)</i></td>
                            <td>
                                <span class="badge badge-warning">Sáng</span> <span class="badge badge-info">Thứ 2</span><br>
                       
                            </td>
                        </tr>
                        <tr>
                            <td scope="row"><b>Nguyễn Huy Hoàng</b><br><i>(Trưởng Bộ môn Công nghệ phần mềm)</i></td>
                            <td>
                                <span class="badge badge-warning">Chiều</span> <span class="badge badge-info">Thứ 4</span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row"><b>Cao Trần Thái Anh</b><br><i>(Trưởng Bộ môn Mạng máy tính)</i></td>
                            <td>
                                <span class="badge badge-warning">Chiều</span> <span class="badge badge-info">Thứ 3</span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row"><b>Nguyễn Phong Lan</b><br><i>(Trưởng Bộ môn Đồ họa)</i></td>
                            <td>
                                <span class="badge badge-warning">Sáng</span> <span class="badge badge-info">Thứ 3</span>
                            </td>
                        </tr>
<tr>
                            <td scope="row"><b>Nguyễn Huy Hoàng</b><br><i>(Phụ trách quản lý Bộ môn Hệ thống thông tin)</i></td>
                            <td>
                                <span class="badge badge-warning">Sáng</span> <span class="badge badge-info">Thứ 5</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="divider"></div>
    </div>	<div class="divider"></div>
</div>
<div class="widget html">
	
	
</div>
<div class="widget topevents_itdc">
	
	
    </div>
</div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
			
<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>


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
