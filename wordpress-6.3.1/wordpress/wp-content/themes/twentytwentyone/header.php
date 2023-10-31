<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <style>
    #search{
      border-radius: 5px; 
      outline: none;
<<<<<<< HEAD
      border: 1px solid #ccc;
    margin: 18px 0px;
    }
  
=======
    }
    #search:focus{      
      border: none !importantto;
    }
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)
    #submit{
      background:#fff;
      color:#333339;
      border-radius: 5px;
	border: 1px solid #dee2e6;
  margin-left: 5px;
  outline: none;
  font-family: Arial, Helvetica, sans-serif;
<<<<<<< HEAD
  margin: 15px 10px;
    height: 49px;
    margin-top: 18px;
    padding: 15px 22px;
    text-align: center;
    padding-top: 13px;

=======
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)

    }
    #submit:hover{
      background:#e6e6e6;
      border:none;
    }
    #home{
      color: #929492;
    background-color: #e7e7e7;
    height: 85px;
    padding-top: 29px;
    }
  </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<<<<<<< HEAD
<?php 
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
=======
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid border">            
          <a class="navbar-brand text-secondary" href="#">Group B</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>      
          <a class="nav-link active mr-15" id ="home" aria-current="page" href="#"  style="margin-right: 15px">Home</a>
<<<<<<< HEAD
          <form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
	<input id="search" placeholder="Search" type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="rounded" id="submit">Submit</button>
  </form>
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100 align-items-center">             
                <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Thể thao</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Khoa học</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
=======
          <form class="d-flex" action="<?php the_permalink(); ?>" method="get">
            <input id="search" class="rounded form-control me-2 border border-secondary-subtle" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="rounded" id="submit">Submit</button>
          </form>    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100 align-items-center">             
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Thể thao</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Khoa học</a>
                </li>
                <li class="nav-item">
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Tin tức</a>
                </li>
                <li class="nav-item" style="margin-top: 10px;">
                <div class="text-center">
<<<<<<< HEAD
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-bottom: 2px;margin-right: 20px;" >
=======
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)
                  <i class="fa-solid fa-ellipsis" style="color: #080808;"></i>
                  <p style="font-size: 10px;">Menu</p>
                </a>
                </div>
                </li>
                <li class="nav-item" style="margin-top: 10px;">
                <div class="text-center">
<<<<<<< HEAD
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="margin-bottom: -8px; ">
=======
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
>>>>>>> Truong_Thi_Thuy_Hoa_Module(2)
                  <i class="fa-solid fa-magnifying-glass" style="color: #0a0a0a;"></i>
                  <p style="font-size: 10px;">Search</p>
                </a>
                </div>              

                </li>      
              <div class="text-center">
              <li class="nav-item dropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle-o"></i> <br>Acconut            
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              </div>
            </ul>          
          </div>
        </div>
      </nav>    

