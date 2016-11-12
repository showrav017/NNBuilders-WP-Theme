<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div>
                <div class="mq" style="height: 300px">
                    <h5 style="display: block; background-color: #0d90d1; text-align: center; color: #ffffff; padding: 12px; font-size: 17px; font-weight: bold;">Project Updates</h5>
                    <marquee behavior="scroll" direction="up" scrollamount="2" height="250" ><p>
                        <ul>
                            <li>Ut vestibulum nibh ac diam sollicitudin, blandit consequat purus aliquam.</li>
                            <li>Donec quis elit ut quam finibus tristique.</li>
                            <li>Ut a libero ut odio molestie tincidunt ut in libero.</li>
                            <li>Quisque et velit tincidunt, euismod odio et, sodales ante.</li>
                            <li>Sed pulvinar diam sed molestie pulvinar.</li>
                            <li>Ut eget tellus vel magna laoreet fermentum.</li>
                        </ul>
                    </p></marquee>
                </div>
                <div class="mq" style="height: 300px">
                    <h5 style="display: block; background-color: #0d90d1; text-align: center; color: #ffffff; padding: 12px; font-size: 17px; font-weight: bold;">Notice</h5>
                    <marquee behavior="scroll" direction="up" scrollamount="2" height="250" ><p>
                        <ul>
                            <li>Ut vestibulum nibh ac diam sollicitudin, blandit consequat purus aliquam.</li>
                            <li>Donec quis elit ut quam finibus tristique.</li>
                            <li>Ut a libero ut odio molestie tincidunt ut in libero.</li>
                            <li>Quisque et velit tincidunt, euismod odio et, sodales ante.</li>
                            <li>Sed pulvinar diam sed molestie pulvinar.</li>
                            <li>Ut eget tellus vel magna laoreet fermentum.</li>
                        </ul>
                        </p></marquee>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
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
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-3">

            <div>
                <div class="mq" style="height: 300px">
                    <h5 style="display: block; background-color: #0d90d1; text-align: center; color: #ffffff; padding: 12px; font-size: 17px; font-weight: bold;">Managing Director Message</h5>
                    <marquee behavior="scroll" direction="up" scrollamount="2" height="250" ><p>
                        <ul>
                            <li>Ut vestibulum nibh ac diam sollicitudin, blandit consequat purus aliquam.</li>
                            <li>Donec quis elit ut quam finibus tristique.</li>
                            <li>Ut a libero ut odio molestie tincidunt ut in libero.</li>
                            <li>Quisque et velit tincidunt, euismod odio et, sodales ante.</li>
                            <li>Sed pulvinar diam sed molestie pulvinar.</li>
                            <li>Ut eget tellus vel magna laoreet fermentum.</li>
                        </ul>
                        </p>
                    </marquee>
                </div>
                <div class="mq" style="height: 300px">
                    <h5 style="display: block; background-color: #0d90d1; text-align: center; color: #ffffff; padding: 12px; font-size: 17px; font-weight: bold;">Director Message</h5>
                    <marquee behavior="scroll" direction="up" scrollamount="2" height="250"><p>
                        <ul>
                            <li>Ut vestibulum nibh ac diam sollicitudin, blandit consequat purus aliquam.</li>
                            <li>Donec quis elit ut quam finibus tristique.</li>
                            <li>Ut a libero ut odio molestie tincidunt ut in libero.</li>
                            <li>Quisque et velit tincidunt, euismod odio et, sodales ante.</li>
                            <li>Sed pulvinar diam sed molestie pulvinar.</li>
                            <li>Ut eget tellus vel magna laoreet fermentum.</li>
                        </ul>
                        </p></marquee>
                </div>
            </div>

        </div>
        <div class="col-sm-9" style="height: 750px; overflow-y: auto">
            <h5 style="font-size: 17px; font-weight: bold;">NNBL History</h5>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
<br><br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            <br><br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div>
                <div class="mq" style="height: 300px">
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6242.984689035427!2d90.41317451683342!3d23.732155943349017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ0JzAwLjUiTiA5MMKwMjQnNDcuNyJF!5e0!3m2!1sen!2sbd!4v1470070242413" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>

        </div>
        <div class="col-sm-9" style="height: 362px; padding-left: 38px;">
            <h5 style="font-size: 17px; font-weight: bold;">Latest News & Events</h5>
            <div id="marquePic"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
