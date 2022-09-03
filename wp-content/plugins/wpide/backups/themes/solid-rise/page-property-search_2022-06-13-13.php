<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d2983bfc7ab89d"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/page-property-search.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/page-property-search_2022-06-13-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
