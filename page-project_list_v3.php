<?php

/* Template Name: Project List With Filters V3 */

?>
<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="columns">

                <?php

                $SQL = 'SELECT wp_posts.ID, wp_posts.post_title FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id WHERE wp_term_taxonomy.term_taxonomy_id = 10 AND wp_posts.post_status = "publish"';

                $result=$wpdb->get_results($SQL);

                ?>

                <?php foreach ($result as $item) { ?>
                    <figure>
                        <a href="<?php echo get_permalink($item->ID) ?>"><?php echo get_the_post_thumbnail($item->ID, 'medium'); ?></a>
                        <figcaption><?php echo $item->post_title; ?></figcaption>
                    </figure>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
