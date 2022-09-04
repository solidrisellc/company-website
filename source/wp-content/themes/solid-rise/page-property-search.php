<?php
get_header();
// debug($_GET);

$property_location = $_GET['property_location'];
$property_city = $_GET['property_city'];
$property_price = $_GET['property_price'];


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
                            <h1><span><?=get_the_title();?></span></h1>
                          </div>
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

<section class="listing-wrap">
    <div class="container">
    

      <?php echo do_shortcode('[property_search_function property_location="'.$property_location.'" property_city="'.$property_city.'" property_price="'.$property_price.'"]');
      ?>  

	</div>
</section>



<?php
get_footer();
