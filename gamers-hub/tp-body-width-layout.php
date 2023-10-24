<?php

$gamers_hub_tp_theme_css="";

	$gamers_hub_scroll_position = get_theme_mod( 'gamers_hub_scroll_top_position','Right');
	if($gamers_hub_scroll_position == 'Right'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Left'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='left: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Center'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 50%;left: 50%;';
		$gamers_hub_tp_theme_css .='}';
	}

// site title and tagline font size option
$gamers_hub_site_title_font_size = get_theme_mod('gamers_hub_site_title_font_size', 30);{
$gamers_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_title_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_site_tagline_font_size = get_theme_mod('gamers_hub_site_tagline_font_size', 15);{
$gamers_hub_tp_theme_css .='.logo p{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_tagline_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_related_product = get_theme_mod('gamers_hub_related_product',true);
if($gamers_hub_related_product == false){
$gamers_hub_tp_theme_css .='.related.products{';
$gamers_hub_tp_theme_css .='display: none;';
$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_footer_widget_image = get_theme_mod('gamers_hub_footer_widget_image');
if($gamers_hub_footer_widget_image != false){
$gamers_hub_tp_theme_css .='#footer{';
$gamers_hub_tp_theme_css .='background: url('.esc_attr($gamers_hub_footer_widget_image).');';
$gamers_hub_tp_theme_css .='}';
}

		$gamers_hub_return_to_header_mob = get_theme_mod( 'gamers_hub_return_to_header_mob',false);
	if($gamers_hub_return_to_header_mob == true && get_theme_mod( 'gamers_hub_return_to_header',true) != true){
    	$gamers_hub_tp_theme_css .='.return-to-header{';
			$gamers_hub_tp_theme_css .='display:none;';
		$gamers_hub_tp_theme_css .='} ';
		}
    if($gamers_hub_return_to_header_mob == true){
    	$gamers_hub_tp_theme_css .='@media screen and (max-width:575px) {';
		$gamers_hub_tp_theme_css .='.return-to-header{';
			$gamers_hub_tp_theme_css .='display:block;';
		$gamers_hub_tp_theme_css .='} }';
	}else if($gamers_hub_return_to_header_mob == false){
		$gamers_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$gamers_hub_tp_theme_css .='.return-to-header{';
			$gamers_hub_tp_theme_css .='display:none;';
		$gamers_hub_tp_theme_css .='} }';
	}

		$gamers_hub_slider_buttom_mob = get_theme_mod( 'gamers_hub_slider_buttom_mob',true);
	if($gamers_hub_slider_buttom_mob == true && get_theme_mod( 'gamers_hub_slider_button',true) != true){
			$gamers_hub_tp_theme_css .='#slider .more-btn{';
			$gamers_hub_tp_theme_css .='display:none;';
		$gamers_hub_tp_theme_css .='} ';
	}
		if($gamers_hub_slider_buttom_mob == true){
			$gamers_hub_tp_theme_css .='@media screen and (max-width:575px) {';
		$gamers_hub_tp_theme_css .='#slider .more-btn{';
			$gamers_hub_tp_theme_css .='display:block;';
		$gamers_hub_tp_theme_css .='} }';
	}else if($gamers_hub_slider_buttom_mob == false){
		$gamers_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$gamers_hub_tp_theme_css .='#slider .more-btn{';
			$gamers_hub_tp_theme_css .='display:none;';
		$gamers_hub_tp_theme_css .='} }';
	}
	
	//Social icon Font size
$gamers_hub_social_icon_fontsize = get_theme_mod('gamers_hub_social_icon_fontsize');
$gamers_hub_tp_theme_css .='.social-media a i{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_social_icon_fontsize).'px;';
$gamers_hub_tp_theme_css .='}';


//menu font size
$gamers_hub_menu_font_size = get_theme_mod('gamers_hub_menu_font_size', 15);{
$gamers_hub_tp_theme_css .='.main-navigation a{';
	$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_menu_font_size).'px;';
$gamers_hub_tp_theme_css .='}';
}

// menu text tranform
$gamers_hub_menu_text_tranform = get_theme_mod( 'gamers_hub_menu_text_tranform','Capitalize');
if($gamers_hub_menu_text_tranform == 'Uppercase'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: uppercase;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_text_tranform == 'Lowercase'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: lowercase;';
$gamers_hub_tp_theme_css .='}';
}
else if($gamers_hub_menu_text_tranform == 'Capitalize'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: capitalize;';
$gamers_hub_tp_theme_css .='}';
}