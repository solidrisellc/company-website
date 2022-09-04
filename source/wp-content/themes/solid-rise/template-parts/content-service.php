<!-- banner start -->
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
                    <img src="<?=get_image(get_the_id());?>" alt="" class="service_detail">
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