<?php

/* Template Name: Project List With Filters */

?>
<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="columns">

                <?php $loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => 1000, 'post_status' => 'publish'  ) ); ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <figure>
                        <a href="<?php echo get_permalink() ?>"><?php echo the_post_thumbnail( 'medium' ); ?></a>
                        <figcaption><?php echo the_title(); ?></figcaption>
                    </figure>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
