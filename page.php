<?php get_header() ?>
<!-- Page Head -->


<?php
if ( has_post_thumbnail() ) {
?>
    <div id="home-flexslider" class="clearfix">
        <div class="flexslider">
            <ul class="slides">
                <li><?php the_post_thumbnail(); ?></li>
            </ul>
        </div>
    </div>
<?php
}

?>

<!-- Content -->
<div  class="ver_height_4"></div>
<div class="container contents lisitng-grid-layout">

    <div class="row">

        <div class="span12 main-wrap">

            <!-- Main Content -->
            <div class="main">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <section class="listing-layout">
                        <h3 class="title-heading"><?php the_title() ?></h3>

                        <div class="list-container">
                            <?php the_content(); ?>
                        </div>

                    </section>

                <?php
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>




            </div><!-- End Main Content -->

        </div> <!-- End span9 -->
    </div><!-- End contents row -->

</div><!-- End Content -->
<?php get_footer(); ?>