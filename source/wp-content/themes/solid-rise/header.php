<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solid-Rise
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php echo get_bloginfo('template_url');?>/css/animate.css" rel="stylesheet" >
    <link href="<?php echo get_bloginfo('template_url');?>/fontawesome5/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_url');?>/slick/slick-theme.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo get_bloginfo('template_url');?>/slick/slick.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo get_bloginfo('template_url');?>/css/slicknav.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_bloginfo('template_url');?>/css/fancybox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_url');?>/css/custom.css" rel="stylesheet" >

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>	
    <div class="top-links">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-6">
              <ul>
                <?php echo do_shortcode('[top_bar_contact_info]');?>
              </ul>
            </div>
          </div>
        </div>
    </div>
	<div class="main-navigate">
		<div class="container">
			<div class="row nav-flex">
				<div class="col-md-3 col-sm-2 col-9">
					<div class="logo">
						<?=the_custom_logo();?>
					</div>
				</div>
				<div class="sidenav" id="mySidenav">
					<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">×</a>
				</div>
				<div class="mobilecontainer d-lg-none  d-md-none">
					<span class="pull-right" onclick="openNav()" style="font-size:30px;cursor:pointer">☰</span>
				</div>		
				<div class="col-md-9 col-sm-9 col-xs-2 col-9  d-none d-md-block ">
					<div class="navigation">
						<?php 
							if ( has_nav_menu( 'menu-1' ) ) 
							{
								wp_nav_menu( 
									array(
									'theme_location' => 'menu-1',  //difference??
									'container' => '',
									'menu_id' => '',
									'menu_class' => 'navbar-set',
									)
								);
							}
						?>
						<!-- <ul class="navbar-set ">
							<li class="active"><a href="index.html">Home</a></li>
              			    <li><a href="services.html">Sell Your House</a></li>
                  			<li><a href="place-to-live.html">Find a Place to Live</a></li>
							<li><a href="investors.html">Investors & Agents</a></li>
                			<li><a href="contact.html">
                    			<div class="dropdown">
						         	<button class="dropbtn">Contact Us</button>
          							<div class="dropdown-content">
							            <a href="#">Sell my house</a>
							            <a href="#">Find an Apartment or House to Rent</a>
							            <a href="#">Do a Joint Venture Deal with Solid Rise</a>
							            <a href="#"> Invest in Solid Rice</a>
							            <a href="#">Request Solid Rise to Invest in me/us</a>
							            <a href="#">Business Relationship with Solid Rise</a>
							        </div>
							    </div>
			                </a></li>
			                <li><a href="contact.html">Get Started</a></li>			
						</ul> -->
					</div>
				</div>	
			</div>
		</div>
	</div>
</header>