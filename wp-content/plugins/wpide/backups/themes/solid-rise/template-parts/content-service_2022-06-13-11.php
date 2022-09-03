<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d2983bfc7ab89d"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/template-parts/content-service.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/template-parts/content-service_2022-06-13-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!-- banner start -->
    <section class="main_slider">
            <div class="carousel-inner inner-banner">
              <div class="carousel-item active">
                <img src="<?=IMAGE?>/inner-banner.jpg" class="img-fluid slider-banner" alt="...">
                 <div class="carousel-caption">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-6 align-self-center">
                        <div class="banner_text banner_text-inner wow fadeInLeft" data-wow-duration="2s">
                            <h1><span>Service Details</span></h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 align-self-center">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    </section>
    <!-- banner end -->


    <!--  Service Detail Start -->
    <section class="detail-sec">
        <div class="container">
            <div class="row">
                <div class="det-img">
                    <img src="<?=get_image(get_the_id());?>" alt="">
                </div>
                <div class="ser-det">
                    <h2><?=the_title();?></h2>
                    <?=the_content();?>
                    <a href="#" class="btn">
                      Get This Service <span><i class="fa fa-arrow-right"></i></span>
                  </a>
                </div>
            </div>
        </div>
    </section>
    <!--  Service Detail Start -->