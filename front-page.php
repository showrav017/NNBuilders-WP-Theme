<?php get_header() ?>
<!-- Start Header 
<div id="home-flexslider" class="clearfix">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $args = array('category' => 6);

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
</div>  End Slider -->



<div class="main_content">


<table style="width: 100%; border: 0px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="20%"><strong>Project Updates</strong></td>
<td width="60%">

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
</div>

</td>

<td width="20%"><strong>Managing Director Message</strong> Message</td>
</tr>
<tr>
<td width="20%">Notice</td>
<td width="60%"> <strong>NNBL History</strong> </td>
<td width="20%"> <strong>Director Message</strong>
Message</td>
</tr>
<tr>
<td colspan="4">Our valuable employees

&nbsp;</td>
</tr>
</tbody>
</table>


</div>






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
		<div>
            <div class="company_address" style="text-align: left"><?php echo $ThemeOption['address']; ?></div>
			<div class="map"><p style="text-align: left;font-style:bold;color:blue" >Find Us Here!</p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6242.984689035427!2d90.41317451683342!3d23.732155943349017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ0JzAwLjUiTiA5MMKwMjQnNDcuNyJF!5e0!3m2!1sen!2sbd!4v1470070242413" width="500" height="195" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
		</div>
    </section><!-- End .property-items -->
</div>

<?php get_footer(); ?>