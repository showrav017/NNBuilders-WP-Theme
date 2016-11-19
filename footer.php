<!-- Footer Bottom -->
<footer>
    <div class="container">
        <?php

        wp_nav_menu( array( 'menu'=>'Footer Menu', 'menu_class'=>'clearfix', 'container'=>"div" ) );

        ?>
    </div>
    <div id="footer-bottom" class="container">

        <div class="row">
            <div class="span6">
                <p class="copyright">Copyright &copy; <?php echo date("Y") ?>. All Rights Reserved.</p>
            </div>
            <div class="span6">
                <p class="designed-by"> Powered By <a target="_blank" href="https://dhakawebhost.com">Dhaka Web Host</a></p> </div>
        </div>

    </div>
    <!-- End Footer Bottom -->
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flexslider/jquery.flexslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/elastislide/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/elastislide/jquery.elastislide.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prettyphoto/jquery.prettyPhoto.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swipebox/jquery.swipebox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.form.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.selectbox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/bxslider-4/dist/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom2.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            minSlides: 4,
            maxSlides: 6,
            slideWidth: 170,
            slideMargin: 10,
            ticker: true,
            speed: 20000,
            tickerHover: true
        });
    });

</script>


</body>
</html>