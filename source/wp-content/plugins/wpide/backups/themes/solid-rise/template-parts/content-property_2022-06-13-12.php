<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d2983bfc7ab89d"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/template-parts/content-property.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/template-parts/content-property_2022-06-13-12.php") )  ) ){
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
                            <div class="col-12 col-sm-12 col-md-12 align-self-center">
                                <div class="banner_text banner_text-inner wow fadeInLeft" data-wow-duration="2s">
                                    <h1><span>Place Detail</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- listing start -->
    <section class="listing-wrap">
        <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="Detail-list">
                     <img src="<?=get_field('inner_image');?>" alt="images">
                 
                  </div>
                  <div class="description">
                        <h5>Property Description</h5>
                        
                        	<?php
                        	if( have_rows('inner_property_description') ):
                        
                        		echo '<table class="table table-striped"><thead></thead><tbody>';
                        
                        		$i = 1;
                        		while( have_rows('inner_property_description') ): the_row();
                            		$active = ($i == 1) ? 'active':'';
                            
                            		$inner_property_description_title = get_sub_field('inner_property_description_title');
                            		$inner_property_description_desc = get_sub_field('inner_property_description_desc');
                            
                            		?>
                            		<tr>
                                        <td class="blod"><?=$inner_property_description_title?></td>
                                        <td><?=$inner_property_description_desc?></td>
                                    </tr> 
                            		<?php
                            
                            		$i ++ ; 
                        		endwhile;
                        
                                echo'</tbody></table>';
                        
                        	endif;
                        		 
                        	?>

                        <a href="javascript:void(0)" class="btn btn_badam">Book Now</a>
                  </div>
               </div>

               <div class="col-md-4">
                 <div class="place-detail-txt">
                   <img src="<?=get_field('agent_img');?>" alt="img">

                   <?=get_field('agent_text');?>
                 </div>
               </div>
         </div>
      </section>