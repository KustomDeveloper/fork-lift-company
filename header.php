<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="head-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <img class="logo" 
                        src="<?php bloginfo('stylesheet_directory'); ?>/images/default-logo.png" />
                </div>

                <div class="col-6">
                  <p class="topcta"><?php _e( 'Call Us Today', 'jdequipment' ); ?><br/>
                        <a href="tel:8006216734" class="topphone">
                            <?php _e( '800.621.6734', 'jdequipment' ); ?>
                        </a>
                  </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="row">
            <div class="col-10">
                <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
            </div><!-- .col-10 -->
            <div class="col-2">
                <div class="language-selector"></div>
            </div><!-- .col-2 -->
        </div>
    </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row slider">
                <ul>
                    <li><img src="#" alt="photo 1"></li>
                    <li><img src="#" alt="photo 2"></li>
                </ul>
            </div>
        


