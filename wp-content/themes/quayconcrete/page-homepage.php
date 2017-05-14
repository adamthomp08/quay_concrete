<?php
/**
 * Template Name: Homepage  */

get_header(); ?>

<section class="homepage-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/concrete_background.jpg" alt="Quay Concrete Home Banner" />
        <div class="container">
            <div class="into-msg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/think_pink_header_image_text.svg" alt="Go Green... Think Pink. We divert up to 97% of waste away from land" />
            </div>
        </div>
</section>

<section class="homepage-banner-contact">
    <div class="container">
        <div class="col">
            <span>Contact us</span> to make a booking:
        </div>
        <div class="col last">
           <i class="icon-call-phone"></i> 01524 388 251
        </div>
    </div>
</section>

<section class="home-intro">
        <div class="container">
                <div class="col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/building_construction.jpg" alt="Pouring Concrete" />
                </div>
                <div class="col last">
					<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile; // End of the loop.
					?>
                </div>
        </div>
</section>

<section class="icon-blocks-4">
        <div class="container">
                <h3>Why Choose Us?</h3>
                <div class="col">
                    <i class="icon-continues-mixing"></i>
                    
                    <h4>Domestic</h4>
                    <p>Volumetric proportioning &amp; continues mixing</p>
                </div>
                <div class="col">
                    <i class="icon-specialist-mix"></i>
                    
                    <h4>Commercial</h4>
                    <p>Specialist mix designs from a single truck</p>
                </div>
                <div class="col">
                    <i class="icon-exact-amount"></i>
                    
                    <h4>Fully Licensed</h4>
                    <p>Exact amount deliveries, no wastage</p>
                </div>
                <div class="col last">
                    <i class="icon-you-pay"></i>
                    
                    <h4>Quick Response</h4>
                    <p>You pay just for the amount you need.</p>
                </div>
        </div>
</section>

<section class="conrete-call-to">
    <div class="transparent-background">
        <div class="container">
            <div class="col">
                <h5>Concrete Calulator</h5>
                <p><strong>Please use our volume concrete calculator to estimate thevolume of the concrete needed for your project.</strong> When purchasing,we recommend ordering a bit more than the calculated result.</p>
            </div>
            <div class="col last">
                <div class="cal-btn">Calculator</div>
            </div>
        </div>
    </div>
</section>

<?php

get_sidebar();
get_footer();
