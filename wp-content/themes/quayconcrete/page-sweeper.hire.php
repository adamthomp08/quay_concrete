<?php
/**
 * Template Name: Sweeper Hire
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Think_Pink_Skips
 */

get_header(); 

    while ( have_posts() ) : the_post(); ?> 

        <section class="landing-banner">
            <?php the_post_thumbnail(); ?>
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

         <section class="white-text-area">
            <div class="container">
                <div class="col last">

                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>

                </div>
            </div>
        </section>

    <?php endwhile; // End of the loop.

get_sidebar( 'sweeper-hire' );
get_footer();
