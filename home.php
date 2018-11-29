<?php 
/*
Template Name: Home
*/

get_header(); ?>

    <div class="row top-section">
        <div class="col topcontent">
            <h1>Forklifts</h1>
            <p>We get our inventory from several sources. 
            Once the new inventory arrives to our facilities, a specialized team will inspect each unit. 
            An inspection report is prepared for potential buyers for your convenience. 
            Once the equipment is purchased, we can arrange domestic or non-domestic shipping paperwork for you.
            </p>
            <button type="button" class="btn btn-lg btn-primary cta-btn">See Inventory</button>
        </div><!-- .col -->

        <div class="col">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/forklift.png" />
        </div><!-- .col -->
    </div>

    <div class="row equipment-slider">
        <div><img src="#" alt="photo 1"></div>
        <div><img src="#" alt="photo 2"></div>
        <div><img src="#" alt="photo 3"></div>
        <div><img src="#" alt="photo 4"></div>
        <div><img src="#" alt="photo 5"></div>
    </div><!-- .equipment-slider -->

    <div class="row about-section">
        <div class="col-6">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/NOhTdI-kXkk" 
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
        <div class="col-6">
            <h2><?php _e( 'JD Equipment', 'jdequipment' ); ?></h2>
            <p><?php _e( 'JD-Equipment.us sells a wide variety of forklifts to meet a diverse number of application needs. 
                In addition, we always try to meet and exceed our customer’s expectations.', 'jdequipment' ); ?>
            </p>
        </div>
    </div><!-- .about-section -->

<?php get_footer(); ?>