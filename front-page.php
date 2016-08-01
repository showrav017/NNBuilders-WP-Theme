<?php get_header() ?>
<!-- Start Header -->
<div id="home-flexslider" class="clearfix">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $args = array('category' => 4);

            $myposts = get_posts( $args );

            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <li>
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="Real Estate Property Developers in Bangalore-SNN Builders Banner">
                    </a>
                    <p class="flex-caption"><?php echo $post->post_title; ?> : <?php echo substr($post->post_content, 0, 50)." ...."; ?></p>
                </li>
                <?php endif; ?>

            <?php endforeach;
            wp_reset_postdata();?>

        </ul>
    </div>
</div><!-- End Slider -->

<?php

$ThemeOption=get_option('my_option_name');
?>

<div class="container contents">
    <section class="property-items">
        <div class="listing-layout">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
        <div style="text-align: center"><?php echo $ThemeOption['address']; ?></div>
    </section><!-- End .property-items -->
</div>

<?php get_footer(); ?>