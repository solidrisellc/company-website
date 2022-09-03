<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d29898156df405"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/footer_2022-08-10-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
    <footer>
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
