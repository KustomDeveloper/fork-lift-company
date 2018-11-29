<?php get_header(); ?>

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

    <div class="row blog-section">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
    </div><!-- .blog-section -->

    <div class="row tax-section">
        <div class="col">
            <p><?php _e( 'Section 179 Tax Deductions', 'jdequipment' ); ?></p>
            <h2><?php _e( 'Take Advantage Now', 'jdequipment' ); ?></h2>
            <p><?php _e( 'The bonus depreciation deduction has increased to 100%. 
                Businesses of all sizes can depreciate 100% of the cost of new and used acquired equipment 
                retroactive to Sept. 27th, 2017 and good through 2022.', 'jdequipment' ); ?>
            </p>
            <button type="button" class="btn btn-lg btn-primary">Primary button</button>
        </div>
    </div><!-- .blog-section -->

<?php get_footer(); ?>