<?php
/**
 * @package Rentit_Moment_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Moment Updater 2.22.2 (ok)
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme js and css file up to date
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Moment_Updater
*/
//SOURCE:https://github.com/moment/moment

/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Moment_Updater_dequeue_scripts', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Moment_Updater_enqueue_scripts', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Moment_Updater_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Moment_Updater_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_Moment_Updater_dequeue_scripts() {
	wp_deregister_script( 'renita_moment-with-locales' );
}
function Rentit_Moment_Updater_enqueue_scripts() {
	wp_enqueue_script( 'renita_moment-with-locales',plugins_url("moment/min/moment-with-locales.min.js",__FILE__ ),array(), '2.22.2', true );
}
/*************************************
*************************************/
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Moment_Updater_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Moment_Updater_enqueue_styles', 400 );
/* add forntend */
/******************************************/
//Updating styles
/******************************************/
add_action( 'wp_enqueue_scripts', 'Rentit_Moment_Updater_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Moment_Updater_enqueue_styles', 400 );
function Rentit_Moment_Updater_dequeue_styles() {}
function Rentit_Moment_Updater_enqueue_styles() {}


