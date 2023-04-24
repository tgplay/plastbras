<?php 

	$private_tutor_custom_style = '';

	// Logo Size
	$private_tutor_logo_top_padding = get_theme_mod('private_tutor_logo_top_padding');
	$private_tutor_logo_bottom_padding = get_theme_mod('private_tutor_logo_bottom_padding');
	$private_tutor_logo_left_padding = get_theme_mod('private_tutor_logo_left_padding');
	$private_tutor_logo_right_padding = get_theme_mod('private_tutor_logo_right_padding');

	if( $private_tutor_logo_top_padding != '' || $private_tutor_logo_bottom_padding != '' || $private_tutor_logo_left_padding != '' || $private_tutor_logo_right_padding != ''){
		$private_tutor_custom_style .=' .logo {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_logo_top_padding).'px ;
			padding-bottom: '.esc_attr($private_tutor_logo_bottom_padding).'px ;
			padding-left: '.esc_attr($private_tutor_logo_left_padding).'px ;
			padding-right: '.esc_attr($private_tutor_logo_right_padding).'px ;';
		$private_tutor_custom_style .=' }';
	}

	// Service Section padding
	$private_tutor_subject_section_padding = get_theme_mod('private_tutor_subject_section_padding');

	if( $private_tutor_subject_section_padding != ''){
		$private_tutor_custom_style .=' #subjects-section {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_subject_section_padding).'px;
			padding-bottom: '.esc_attr($private_tutor_subject_section_padding).'px;';
		$private_tutor_custom_style .=' }';
	}

	// Slider
	if( get_theme_mod('private_tutor_slider_hide_show',false) == false){
		$private_tutor_custom_style .=' .page-template-custom-home-page .bottom-header {';
			$private_tutor_custom_style .=' position: static; border-bottom: 1px solid #4b95f4;';
		$private_tutor_custom_style .=' }';
	}

	// Site Title Font Size
	$private_tutor_site_title_font_size = get_theme_mod('private_tutor_site_title_font_size');
	if( $private_tutor_site_title_font_size != ''){
		$private_tutor_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_site_title_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	// Site Tagline Font Size
	$private_tutor_site_tagline_font_size = get_theme_mod('private_tutor_site_tagline_font_size');
	if( $private_tutor_site_tagline_font_size != ''){
		$private_tutor_custom_style .=' .logo p.site-description {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_site_tagline_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	// Copyright padding
	$private_tutor_copyright_padding = get_theme_mod('private_tutor_copyright_padding');

	if( $private_tutor_copyright_padding != ''){
		$private_tutor_custom_style .=' .site-info {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_copyright_padding).'px; padding-bottom: '.esc_attr($private_tutor_copyright_padding).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_copyright_color = get_theme_mod('private_tutor_copyright_color');
	if ( $private_tutor_copyright_color != '') {
		$private_tutor_custom_style .=' .site-info p a {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_copyright_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_copyrightbg_color = get_theme_mod('private_tutor_copyrightbg_color');
	if ( $private_tutor_copyrightbg_color != '') {
		$private_tutor_custom_style .=' .copyright {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_copyrightbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	// Header Image
	$header_image_url = private_tutor_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$private_tutor_custom_style .=' #inner-pages-header {';
			$private_tutor_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$private_tutor_custom_style .=' }';
		$private_tutor_custom_style .=' .header-overlay {';
			$private_tutor_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$private_tutor_custom_style .=' }';
	} else {
		$private_tutor_custom_style .=' #inner-pages-header {';
			$private_tutor_custom_style .=' background: linear-gradient(0deg,#eceffc,#fff 80%) no-repeat; ';
		$private_tutor_custom_style .=' }';
		$private_tutor_custom_style .=' #inner-pages-header h1, #inner-pages-header .theme-breadcrumb, #inner-pages-header .theme-breadcrumb a, #inner-pages-header .theme-breadcrumb span {';
			$private_tutor_custom_style .=' color: #000; ';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_slider_hide_show = get_theme_mod('private_tutor_slider_hide_show',false);
	if( $private_tutor_slider_hide_show == true){
		$private_tutor_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$private_tutor_custom_style .=' display:none;';
		$private_tutor_custom_style .=' }';
	}

	//Slider color
	$private_tutor_slider_title_color = get_theme_mod('private_tutor_slider_title_color');
	if ( $private_tutor_slider_title_color != '') {
		$private_tutor_custom_style .=' #slider .inner_carousel h2 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_slider_title_color).';';
		$private_tutor_custom_style .=' }';
	}
	$private_tutor_slider_text_color = get_theme_mod('private_tutor_slider_text_color');
	if ( $private_tutor_slider_text_color != '') {
		$private_tutor_custom_style .=' #slider .inner_carousel p {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_slider_text_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_sliderbtn_color = get_theme_mod('private_tutor_sliderbtn_color');
	$private_tutor_sliderbtnbg_color = get_theme_mod('private_tutor_sliderbtnbg_color');

	if ( $private_tutor_sliderbtn_color != '') {
		$private_tutor_custom_style .=' #slider a.read-btn {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_sliderbtn_color).'; background-color:'.esc_attr($private_tutor_sliderbtnbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	//Subject color
	$private_tutor_subject_section_small_heading_color = get_theme_mod('private_tutor_subject_section_small_heading_color');
	if ( $private_tutor_subject_section_small_heading_color != '') {
		$private_tutor_custom_style .=' .subjects-title small {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_section_small_heading_color).';';
		$private_tutor_custom_style .=' }';
	}
	$private_tutor_subject_section_heading_color = get_theme_mod('private_tutor_subject_section_heading_color');
	if ( $private_tutor_subject_section_heading_color != '') {
		$private_tutor_custom_style .=' .subjects-title h2 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_section_heading_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_imgbdr_color = get_theme_mod('private_tutor_subject_imgbdr_color');
	if ( $private_tutor_subject_imgbdr_color != '') {
		$private_tutor_custom_style .=' .subjects-img {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_subject_imgbdr_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxtitle_color = get_theme_mod('private_tutor_subject_boxtitle_color');
	if ( $private_tutor_subject_boxtitle_color != '') {
		$private_tutor_custom_style .=' .subjects-content h3 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_boxtitle_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxtext_color = get_theme_mod('private_tutor_subject_boxtext_color');
	if ( $private_tutor_subject_boxtext_color != '') {
		$private_tutor_custom_style .=' .subjects-content p {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_boxtext_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxbg_color = get_theme_mod('private_tutor_subject_boxbg_color');
	if ( $private_tutor_subject_boxbg_color != '') {
		$private_tutor_custom_style .=' #subjects-section .subjects-content {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_subject_boxbg_color).';';
		$private_tutor_custom_style .=' }';
	}