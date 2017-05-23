<?php
/**
 * Template Name: Advantages
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

        <?php get_sidebar('contact-bar'); ?> 


         <section class="white-text-area">
            <div class="container">
                <div class="col last">

                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>

                </div>
            </div>
        </section>

    <?php endwhile; // End of the loop.?> 

 <section class="pink-text-area">
        <div class="container">
                <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/building_construction.jpg" alt="Pouring Concrete" />
                </div>
                <div class="col last">
                        <h2>Do It Yourself</h2>
                        <p>
                            At Quay Concrete no job is to small. Our mixers our idea for
                            the DIY’ers or small builders. If you you are unsure of how
                            much you will need, use our concrete calculator to help you
                            work it out. Don’t worry if you get it wrong – we will deliver
                            as much or as little as you require.
                        </p>
                        <p>
                            With Quay Concrete Volumetric Mixers we can deliver
                            exactly what you need, and that what you pay for. No part or
                            full metre pricing – What you use is what you pay for, its as
                            simple as that.
                        </p>
                </div>
        </div>
</section>

 <section class="white-text-area-2">
        <div class="container">
                <div class="col">
                        <h3>Only Pay For What You Use</h3>
                        <p><strong>We supply concrete for all situations including:</strong></p>
                        <ul>
                            <li>All industrial, commercial and domestic requirements from ½ cubic metre</li>
                            <li>Extensions, footings, garage bases, factory floors</li>
                            <li>Specialists in small loads</li>
                        </ul>
                        <p>Our experienced staff will be happy to advise you of which
                        mix is right for your job and provide you with a competitive
                        quote.</p>
                </div>
                <div class="col last">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/building_construction.jpg" alt="Pouring Concrete" />
                </div>
                
        </div>
</section>

 <section class="pink-text-area-1">
        <div class="container">
                <div class="col last">
                       <h4>Specility Mixes</h4>
                       <p><strong>We can easily produce a number of different types of concrete including admixtures, fibre enhanced and foamed
                        concrete. Our volumetric proportioning and continuous mixing is well proven and has many advantages over
                        traditional drum type mixers that rely on batching plants.</strong></p>
                        <p>The volumetric mixer is essentially a mobile batching plant. It carries all the ingredients of concrete in a number of hoppers
                        which feed into a continuous mixer. This method allows the operator to mix any amount of fresh concrete on site, to any mix
                        design, with no waste. The mix design can also be changed instantly, producing different types of concrete from the same
                        load.</p>
                        <p>We can make multiple deliveries in the same truck, changing the mix design and delivering small quantities profitable.
                        Road traffic is also reduced compared to traditional ready mix resulting in environmental benefits. Many contractors prefer
                        volumetric concrete because a fresh mix provides improved workability. As mixing takes place on site there is no hydration or
                        segregation during transit. This is particularly beneficial in hot climates or for deliveries to remote locations. It is also excellent
                        for deliveries that require intermittent demand.</p>
                </div>
        </div>
</section>

<?php 

get_sidebar('concrete-call-to-action');
get_footer();
