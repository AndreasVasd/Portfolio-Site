<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="bigcontainer">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clickright Lite
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    
  <title>Andreas Vasdekis | Web development &amp design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Develompent &amp Design">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript, Responsive Web Design, Porfolio Site">
  <meta name="Andreas Vasdekis">


    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">


    
    <!-- Include fa awseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom css -->
    <link href="custom.css" rel="stylesheet">

   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="content">
</div> 

  

 <nav class="navbar navbar-inverse navbar-fixed-top"> <!-- προσθέτοντας fixed-top εμφανίζεται όπως πρέπει το collapsed menu -->
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- Δημιουργία του icon όταν μικραίνει η οθόνη-3 span classes γιατί θέλω τις τρεις γραμμούλες -->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">          
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
        </button>

      </div>
      <!-- Δημιουργία του menu -->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="http://localhost/Portfolio-Site/home.html"><i class="fa fa-home color-home"></i></a></li>

          <li><a href="http://localhost/Portfolio-Site/about.html">About</a></li>
          <li><a href="http://localhost/Portfolio-Site/Blog/wordpress/">Blog</a></li>
          <li><a href="http://localhost/Portfolio-Site/contact.php">Contact</a></li>

          <!-- Social Buttons -->
          <li><a href="https://github.com/AndreasVasd" target="_blank" id="tooltip1" data-toggle="tooltip" title="Github"><i class="fa fa-github color-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/andreas-vasdekis" target="_blank" id="tooltip2" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin color-linkedin"></i></a></li>
          <li><a href="https://www.twitter.com" target="_blank" id="tooltip3" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter color-twitter"></i></a></li>
        </ul>

        <!-- Το custom search bar που τοποθετήσαμε -->

        <ul class="nav navbar-nav navbar-right">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </ul>
      </div>
    </div>
  </nav>
           <!-- <div id="brand">   -->

                <?php the_custom_logo(); ?>    

                <?php if ( is_front_page() ) : ?>
                <h1><a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                <h2><a class="site-title-two" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                <?php endif; ?>

                <?php
                $description = get_bloginfo( 'description', 'display' );
               
                if ( $description || is_customize_preview()) :
                ?>

                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
               
               
            

        <div style="clear:both;"></div>

      




        <div class="container">

           <div id="navigation-wrapper"> 
                <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
            </div> 

            

        </div>

   <!-- nav -->

    <div id="bigcontainer">
        
       