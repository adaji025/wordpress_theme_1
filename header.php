<?php
/*
*   The header for our theme
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><img src="./img/adaji.png" alt="Logo" class="img-fluid"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
                

                <?php wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
                
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./blog.html" class="nav-link">Blog</a>
                    </li>
                </ul> -->
            
        </nav>
        
        <!-- intro -->
        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img src="<?php header_image(); ?>" alt="girl background image" class="img-fluid header_img">
                <div class=" feature-bg position-absolute text-white">
                    <p class="feature-text">
                        <?php featurText(); ?>
                    </p>
                </div>
            </div>
        </section>
    </header>