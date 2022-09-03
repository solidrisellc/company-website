<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d29807da76d9a2"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/functions_2022-06-10-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Solid-Rise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Solid-Rise
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function solid_rise_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Solid-Rise, use a find and replace
		* to change 'solid-rise' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'solid-rise', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'solid-rise' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'solid_rise_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'solid_rise_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solid_rise_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solid_rise_content_width', 640 );
}
add_action( 'after_setup_theme', 'solid_rise_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solid_rise_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 1', 'rebel-boom' ),
			'id'            => 'footer-widget-1',
			'description'   => esc_html__( 'Add widgets here.', 'rebel-boom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 2', 'rebel-boom' ),
			'id'            => 'footer-widget-2',
			'description'   => esc_html__( 'Add widgets here.', 'rebel-boom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 3', 'rebel-boom' ),
			'id'            => 'footer-widget-3',
			'description'   => esc_html__( 'Add widgets here.', 'rebel-boom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
}
add_action( 'widgets_init', 'solid_rise_widgets_init' );


require get_template_directory() . '/inc/MY_functions.php';


/**
 * Enqueue scripts and styles.
 */
function solid_rise_scripts() {
	// wp_enqueue_style( 'solid-rise-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'solid-rise-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'solid-rise-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	### ENQUE SCRIPTS START ###
	// Enque Scripts start
	wp_style_add_data( 'solid-rise-style', 'rtl', 'replace' );
	/*** HEADER CSS ***/
	// $c = array(
	// 	"all.min" ,
	// 	"custom.min" ,
	// );
	render_css($c);

	// LIVE LINK
	// wp_enqueue_style( 'NAME','LINK' , _S_VERSION );_S_VERSION, true );
	// LIVE LINK ENDS

	/*RENDERS LAST*/
	wp_enqueue_style( 'solid-rise-style', get_stylesheet_uri(), array(), _S_VERSION);
                
	/*** FOOTER JS ***/
	// $j = array(
	// 	["all.min" , true] ,
	// 	["custom.min" , true] ,
	// );
	render_js($j);
}
add_action( 'wp_enqueue_scripts', 'solid_rise_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}















require get_template_directory() . '/inc/MY_constants.php';

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


















function top_bar_contact_info($args){
	ob_start();
	
	$phone_no = ot_get_option('phone_no');
	$email = ot_get_option('email');

	if (!empty($phone_no)) {
		echo '
			<ul>
                <li class="icon-li"><img src="'.IMAGE.'/phone-icon.png" alt=""></li>
                <li><a href="tel:'.$phone_no.'"><h5>Available Support <br> <span>'.$phone_no.'</span></h5></a></li>
            </ul>
        ';		
	}

	if (!empty($email)) {
		echo '
			<ul>
                <li class="icon-li"><img src="'.IMAGE.'/mail-icon.png" alt=""></li>
                <li><a href="mailto:'.$email.'"><h5>Get In Touch <br> <span>'.$email.' </span></h5></a></li>
            </ul>
        ';		
	}

	wp_reset_postdata();
		
	$output = ob_get_clean();
	return $output;	
};
add_shortcode('top_bar_contact_info','top_bar_contact_info');

function footer_social_icon($args){
	ob_start();
	
	$facebook = ot_get_option('facebook');
	$twitter = ot_get_option('twitter');
	$linkedin = ot_get_option('linkedin');
	$instagram = ot_get_option('instagram');

	echo'<div class="social-links text-center"><ul>';

	if (!empty($facebook)) {
		echo '
			<li><a href="'.$facebook.'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        ';		
	}

	if (!empty($twitter)) {
		echo '
			<li><a href="'.$twitter.'" target="_blank"><i class="fab fa-twitter"></i></a></li>
        ';		
	}

	if (!empty($linkedin)) {
		echo '
			<li><a href="'.$linkedin.'" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        ';		
	}

	if (!empty($instagram)) {
		echo '
			<li><a href="'.$instagram.'" target="_blank"><i class="fab fa-instagram"></i></a></li>
        ';		
	}

	echo '</ul></div>';

	wp_reset_postdata();
		
	$output = ob_get_clean();
	return $output;	
};
add_shortcode('footer_social_icon','footer_social_icon');

function footer_contact_info($args){
	ob_start();
	
	$phone_no = ot_get_option('phone_no');
	$email = ot_get_option('email');
	$fax_no = ot_get_option('fax_no');
	$address = ot_get_option('address');

	echo '<div class="cont-links"><ul>';

	if (!empty($phone_no)) {
		echo '
			<li><img src="'.IMAGE.'/phone.png" alt=""><a href="tel:'.$phone_no.'">'.$phone_no.'</a></li>
        ';		
	}

	if (!empty($email)) {
		echo '
			<li><img src="'.IMAGE.'/email.png" alt=""><a href="mailto:'.$email.'">'.$email.'</a></li>
        ';		
	}

	if (!empty($fax_no)) {
		echo '
			<li><img src="'.IMAGE.'/fax.png" alt=""><a href="tel:'.$fax_no.'">'.$fax_no.'</a></li>
        ';		
	}

	if (!empty($address)) {
		echo '
			<li><img src="'.IMAGE.'/location.png" alt=""><a class   ="black">'.$address.'</a></li>
        ';		
	}

	echo '</ul></div>';

	wp_reset_postdata();
		
	$output = ob_get_clean();
	return $output;	
};
add_shortcode('footer_contact_info','footer_contact_info');

function render_home_banner($args){
	ob_start();

	$inner_banner_img = get_field('inner_banner_img');
	$inner_banner_title = get_field('inner_banner_title');

	echo'
		<section class="banner">
		    <img src="'.$inner_banner_img.'">
		    <div class="container">
		    	<div class="row">
		         	<div class="col-lg-8">
		          		<div class="banner_text wow fadeInLeft" data-wow-duration="2s">
			              	'.$inner_banner_title.'
		                </div>
		         	</div>
		        </div>
		    </div>
		</section>
	';
		
	echo do_shortcode('[render_search_tab]');
		 
	wp_reset_postdata();

	$output = ob_get_clean();
	return $output;
};
add_shortcode('render_home_banner','render_home_banner');

function render_inner_banner($args){
	ob_start();

	$inner_banner_img = get_field('inner_banner_img');
	$inner_banner_title = get_field('inner_banner_title');

	echo '
		<section class="main_slider">
            <div class="carousel-inner inner-banner">
              <div class="carousel-item active">
                <img src="'.$inner_banner_img.'" class="img-fluid slider-banner" alt="...">
                 <div class="carousel-caption">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-6 align-self-center">
                        <div class="banner_text banner_text-inner wow fadeInLeft" data-wow-duration="2s">
                          <h1><span>'.$inner_banner_title.'</span></h1>
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
	';

	wp_reset_postdata();

	$output = ob_get_clean();
	return $output;
};
add_shortcode('render_inner_banner','render_inner_banner');

function render_search_tab($args){
	ob_start();

	if( have_rows('inner_tab') ):

		echo '
			<section class="below-baner">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="below-search">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
      	';

		$i = 1;
		while( have_rows('inner_tab') ): the_row();
		$active = ($i == 1) ? 'active':'';

		$tab_title = get_sub_field('tab_title');

		?>
		<li class="nav-item  <?=$active?>" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home<?=$i?>" type="button" role="tab" aria-controls="home<?=$i?>" aria-selected="true"><?=$tab_title?></button>
        </li>  
		<?php

		$i ++ ; 
		endwhile;

		echo '
			</ul>
           <div class="tab-content" id="myTabContent">
		';

		$i = 1;
		while( have_rows('inner_tab') ): the_row();
		$active = ($i == 1) ? 'active':'';

		$tab_box = get_sub_field('tab_box');

		?>
		<div class="tab-pane fade show <?=$active?>" id="home<?=$i?>" role="tabpanel" aria-labelledby="home-tab">
            <?=$tab_box?>
        </div> 
		<?php

		$i ++ ; 
		endwhile;

        echo'
				    </div>
		          </div>
		          </div>
		        </div>
		      </div>
		    </section>
    	';

	endif;
		 
	wp_reset_postdata();

	$output = ob_get_clean();
	return $output;
};
add_shortcode('render_search_tab','render_search_tab');

function render_search_bar($args)
{
    ob_start();

    echo '
        <form  action="'.site_url('/property-search').'">
            <div class="tab-main">
    ';    

    $property_location = get_terms( array(
        'taxonomy' => 'property_location',
        'hide_empty' => false,
        'field'    => 'slug',
        'terms'    => $slug,
    ) );
    unset($property_location[7]);  //uncatgories

    if (!empty($property_location)): 
        echo '
            <div class="tab-wrap">
                <label>Location</label>
                <select name="property_location">
        ';
        foreach ($property_location as $property_location ):
            echo '<option  value="'.$property_location->slug.'" >'. $property_location->name.'</option>';
        endforeach ;
        echo '
                </select>
            </div>
        ';
    endif;


    $property_city = get_terms( array(
        'taxonomy' => 'property_city',
        'hide_empty' => false,
        'field'    => 'slug',
        'terms'    => $slug,
    ) );
    unset($property_city[7]);  //uncatgories

    if (!empty($property_city)): 
        echo '
            <div class="tab-wrap">
                <label>City</label>
                <select name="property_city">
        ';
        foreach ($property_city as $property_city ):
            echo '<option  value="'.$property_city->slug.'" >'. $property_city->name.'</option>';
        endforeach ;
        echo '
                </select>
            </div>
        ';
    endif;

    $property_price = get_terms( array(
        'taxonomy' => 'property_price',
        'hide_empty' => false,
        'field'    => 'slug',
        'terms'    => $slug,
    ) );
    unset($property_price[7]);  //uncatgories

    if (!empty($property_price)): 
        echo '
            <div class="tab-wrap">
                <label>Price </label>
                <select name="property_price">
        ';
        foreach ($property_price as $property_price ):
            echo '<option  value="'.$property_price->slug.'" >'. $property_price->name.'</option>';
        endforeach ;
        echo '
                </select>
            </div>
        ';
    endif;
              
    echo'   
            <div class="tab-wrap">
                <button  type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        </form>
    ';

    $output = ob_get_clean();
    return $output; 
};
add_shortcode('render_search_bar','render_search_bar');

















