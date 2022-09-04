<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solid-Rise
 */

?>

	<!-- footer strat  -->
    <footer id="footer-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="site-info">
                    	<?php dynamic_sidebar('footer-widget-1');?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row bg-foot">
                        <div class="col-lg-6">
                            <div class="cont-info">
                            	<?php dynamic_sidebar('footer-widget-2');?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="footer-in">
                          	<?php dynamic_sidebar('footer-widget-3');?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer strat  -->

    <script src="<?php echo get_bloginfo('template_url');?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/js/wow.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/slick/slick.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/slick/slick.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/js/fancybox.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/js/bootstrap.js"></script>
    <script src="<?php echo get_bloginfo('template_url');?>/js/custom.js"></script>

    <script type="text/javascript">
        function blockSpecialChar(e){
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
    
<?php wp_footer(); ?>

</body>
</html>
