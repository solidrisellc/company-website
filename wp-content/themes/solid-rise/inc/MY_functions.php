<?php

/**
 * DEBUG FUNCTIONs
 */

if ( ! function_exists('debug'))
{
	function debug($param,$exit = 0)
	{
		echo "<pre>";print_r($param);echo "</pre>";
		if($exit)
			exit;
	}
}

if ( ! function_exists('prevar'))
{
	function prevar($params) {
		var_dump($params);die;
	}
}

//GET THE TEMPLATE FILE NAME
if ( ! function_exists('prevar'))
{
	function show_template() {  
	    global $template;
	    return basename($template);    
	}
}

/*
**GET IMAGE BY ID
*/
if ( ! function_exists('get_image'))
{
	function get_image($recordid)
	{
		return wp_get_attachment_url( get_post_thumbnail_id( $recordid ));	
	};
}

/*
**RENDER THEME CSS
*/
if ( ! function_exists('render_css'))
{
	function render_css($css = array())
	{
		if (isset($css)) {
			foreach ($css as $c) {
				wp_enqueue_style( "$c", CSS."$c.css",[], time(),"all");
			}
		}
		return;
	};
}


/*
**RENDER THEME JS
*/
if ( ! function_exists('render_js'))
{
	function render_js($js = array())
	{

		if (isset($js)) {
			foreach ($js as $val) {
				
				$j = $val[0];
				$infooter = $val[0];
				wp_enqueue_script( "$j", JS."$j.js", ["jquery"],time(),$infooter);
				// _S_VERSION
			}
		}
		return;
	};
}

if ( ! function_exists('additionals'))
{
	function additionals($param = array())
	{
		if (isset($param)) {
			foreach ($param as $key => $val) {
			
		//plugin-folder
		$PF = $key.'/';

		//css
		if(isset($val['css']) && !empty($val['css']))
		{
			$css = $val['css'];
			foreach($css as $c)
			{
				wp_enqueue_style( "$c", FRONTPLUGINS.$PF."$c.css",[], time(),"all");
			}
		}
		//js
		if(isset($val['js']) && !empty($val['js']))
		{
			$js = $val['js'];
			foreach($js as $j)
			{
				wp_enqueue_script( "$j", FRONTPLUGINS.$PF."$j.js", ["jquery"],time(),_S_VERSION);
			}
		}
			}
			}
		return;
	};
}


if ( ! function_exists('truncate'))
{
	function truncate( $text = "" , $limit = 150 ) {
		
		return ( strlen($text) > $limit ) ? ( substr($text, 0, $limit) . "..." ) : $text ;

	}
}