<?php
/*
Plugin Name: Zach's Custom Functions
Plugin URI: http://wpninjas.net
Description: This plugin is a random collection of custom functions for testing
Version: 1.0
Author: WPN Zach
Author URI: http://zachskaggs.com
*/
function give_me_domain() {
	$domain = $_SERVER['HTTP_HOST'];
	return $domain;
}

add_shortcode(my_domain, give_me_domain);