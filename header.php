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
                    <div class="topcta"><p><?php _e( 'Call Us Today', 'jdequipment' ); ?></p>
                        <a href="tel:8006216734" class="topphone">
                            <?php _e( '800.621.6734', 'jdequipment' ); ?>
                        </a>
                    </div>
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
                <div class="language-selector"><?php _e( 'English', 'jdequipment' ); ?> 
                    <span><img src="<?php bloginfo('stylesheet_directory');?>/images/selector-btn.png"></span>
                </div>
            </div><!-- .col-2 -->
        </div>
    </div>

    <div class="wrapper">
        <div class="container-fluid">