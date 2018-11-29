
</div><!-- .container-fluid -->
</div><!-- .wrapper -->

<footer>
    <div class="row">
        <div class="col-4">
            <h3><?php _e( 'Our Location', 'jdequipment' ); ?></h3>

            <div class="map">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d392565.2037547804!2d-105.13529645012136!3d39.76400211690762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C+CO!5e0!3m2!1sen!2sus!4v1543440764273" 
                frameborder="0" 
                allowfullscreen>
                </iframe>
            </div>
            <a class="maplink" href="#"><?php _e( 'See Full Map', 'jdequipment' ); ?></a>
        </div>

        <div class="col-4">
            <h3><?php _e( 'Recent Posts', 'jdequipment' ); ?></h3>
            <div class="footermenu">
                <?php wp_nav_menu(array( 'theme_location' => 'footer_menu' )); ?>
            </div>
        </div>

        <div class="col-4">
            <h3><?php _e( 'Join our newsletter', 'jdequipment' ); ?></h3>
            <p><?php _e( 'Interested in our future inventory? Would you like updated  
                information regarding new products we may have coming in stock? 
                Sign up to our newsletter to get updates.', 'jdequipment' ); ?></p>
            <div class="subscribeform">    
               <?php echo do_shortcode('[contact-form-7 id="20" title="Newsletter Form"]'); ?>
            </div>
        </div>
    </div><!--.row-->
    
    <div class="row">
        <p class="copyright"><?php _e( '&copy; 2019 JD EQUIPMENT | ALL RIGHTS RESERVED', 'jdequipment' ); ?></p>
    </div><!--.row-->
</footer>

<?php wp_footer(); ?>

</body>
</html>
