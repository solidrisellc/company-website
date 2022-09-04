<?php
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
