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
                            <h1><span><?=the_title();?></span></h1>
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
<!-- banner end -->

<!-- blog about start -->
<section class="blog-detail-sec">
    <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7">
            <div class="blog-detail-main">
              <img src="<?=get_image(get_the_id());?>" alt="">
            </div>
          </div>
          <div class="col-md-5 col-sm-5">
            <?php echo do_shortcode('[render_recent_post]');?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="detimg-btm">
              <h6><?=the_title();?></h6>
            </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <div class="detimg-btm-chat">
              <ul>
                <li><span class="far fa-calendar-alt"></span><?=the_date();?></li>
                <li><span class="far fa-comment"></span>15</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="detail-btm-txt">
                <?=the_content();?>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- blog about end -->