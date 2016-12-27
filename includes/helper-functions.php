<?php

/**
 * Row and Column Extensions
 */
function pp_extensions()
{
    $extensions = array(
        'row'       => array(
            'separators'    => __('Separators', 'bb-powerpack'),
        ),
        'col'       => array(
            'corners'       => __('Round Corners', 'bb-powerpack'),
        )
    );

    return $extensions;
}

/**
 * Row templates categories
 */
function pp_row_templates_categories()
{
    $cats = array(
        'pp-contact-blocks'     => __('Contact Blocks', 'bb-powerpack'),
        'pp-contact-forms'      => __('Contact Forms', 'bb-powerpack'),
        'pp-call-to-action'     => __('Call To Action', 'bb-powerpack'),
        'pp-hero'               => __('Hero', 'bb-powerpack'),
        'pp-subscribe-forms'    => __('Subscribe Forms', 'bb-powerpack'),
        'pp-content'            => __('Content', 'bb-powerpack'),
        'pp-blog-posts'         => __('Blog Posts', 'bb-powerpack'),
        'pp-lead-generation'    => __('Lead Generation', 'bb-powerpack'),
        'pp-logos'              => __('Logos', 'bb-powerpack'),
        'pp-team'               => __('Team', 'bb-powerpack'),
        'pp-testimonials'       => __('Testimonials', 'bb-powerpack'),
        'pp-features'           => __('Features', 'bb-powerpack'),
        'pp-services'           => __('Services', 'bb-powerpack'),
    );

    asort($cats);

    return $cats;
}

/**
 * Page templates categories
 */
function pp_page_templates_categories()
{
    $cats = array(
        'pp-dentist'            => __('Dentist', 'bb-powerpack'),
        'pp-wedd-photography'   => __('Wedding Photography', 'bb-powerpack'),
        'pp-charity'            => __('Charity', 'bb-powerpack'),
        'pp-gym'                => __('Fitness - Gym', 'bb-powerpack'),
        'pp-travel'             => __('Travel', 'bb-powerpack'),
        'pp-yoga'               => __('Yoga', 'bb-powerpack'),
        'pp-sales-funnel'       => __('Sales Funnel', 'bb-powerpack'),
        'pp-agency-1'           => __('Agency 1', 'bb-powerpack'),
        'pp-agency-2'           => __('Agency 2', 'bb-powerpack'),
    );

    asort($cats);

    return $cats;
}

/**
 * Templates demo source URL
 */
function pp_page_templates_preview_src( $cat = '' )
{
    $url = 'https://ib.wpbeaveraddons.com/powerpack-templates-demo/';
    $preview = array(
        'pp-dentist'            => $url . 'dentist-home/',
        'pp-wedd-photography'   => $url . 'wedding-photography-home/',
        'pp-charity'            => $url . 'charity-home/',
        'pp-gym'                => $url . 'fitness-home/',
        'pp-travel'             => $url . 'travel-home/',
        'pp-yoga'               => $url . 'yoga-home/',
        'pp-sales-funnel'       => $url . 'mini-squeeze-1-lead-gen/',
        'pp-agency-1'           => $url . 'agency-1-home/',
        'pp-agency-2'           => $url . 'agency-2-home/',
    );

    if ( '' == $cat ) {
        return $preview;
    }

    if ( isset( $preview[$cat] ) ) {
        return $preview[$cat];
    }

    return $url;
}

/**
 * Hex to Rgba
 */
if ( !function_exists( 'pp_hex2rgba' ) )
{
    function pp_hex2rgba( $hex, $opacity )
    {
    	$hex = str_replace( '#', '', $hex );

    	if ( strlen($hex) == 3 ) {
    		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
    		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
    		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
    	} else {
    		$r = hexdec(substr($hex,0,2));
    		$g = hexdec(substr($hex,2,2));
    		$b = hexdec(substr($hex,4,2));
    	}
    	$rgba = array($r, $g, $b, $opacity);

    	return 'rgba(' . implode(', ', $rgba) . ')';
    }
}
