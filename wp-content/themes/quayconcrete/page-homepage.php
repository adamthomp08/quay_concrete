<?php
/**
 * Template Name: Homepage  */

get_header(); ?>

<section class="homepage-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/concrete_background.jpg" style="margin-top: -18px;" alt="Quay Concrete Home Banner" />
        <div class="container">
            <div class="into-msg">
                <h1>Where <span>Quality</span><br> Counts</h1>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/yellow_arrow.png" alt="yellow arrow">Only pay for what you use</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/yellow_arrow.png" alt="yellow arrow">Any size delivery</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/yellow_arrow.png" alt="yellow arrow">Pump hire available</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/yellow_arrow.png" alt="yellow arrow">Trade &amp; DIY welcome</li>
                </ul>
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


<?php

get_sidebar('concrete-call-to-action');
get_sidebar();
get_footer();
