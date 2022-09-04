<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d2983bfc7ab89d"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/404.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/404_2022-06-13-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Solid-Rise
 */

get_header();
?>


	<section class="main_slider">
        <div class="carousel-inner inner-banner">
	        <div class="carousel-item active">
	            <img src="<?=IMAGE?>/inner-banner.jpg" class="img-fluid slider-banner" alt="...">
	            <div class="carousel-caption">
	                <div class="container">
		                <div class="row">
		                    <div class="col-12 col-sm-12 col-md-6 align-self-center">
		                      <div class="banner_text banner_text-inner wow fadeInLeft" data-wow-duration="2s">
		                        <h1><span>Page Not Found</span></h1>
		                      </div> 
		                    </div>
		                    <div class="col-12 col-sm-12 col-md-6 align-self-center">
		                      <div class="banner_img wow bounceIn" data-wow-duration="2s"> 
		                      </div>
		                    </div>
		                </div>
	                </div>
	            </div>
            </div>
        </div>
    </section>

		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'solid-rise' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'solid-rise' ); ?></p>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->


<?php
get_footer();
