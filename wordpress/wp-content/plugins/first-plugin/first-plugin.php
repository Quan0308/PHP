<?php

/**
 * @package FirstPlugin
 */
/*
Plugin Name: First Plugin
Plugin URI: https://github.com/Quan0308/PHP
Description: This is my first attempt on writing a custom plugin for WordPress
Version: 1.0.0
Author: Bui Do Duy Quan
Author URI: https://github.com/Quan0308/PHP
License: GPLv2 or later
Text Domain: first-plugin
*/

defined('ABSPATH') or die('Hey, you can\t access this file!');

class FirstPlugin
{

    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }

    function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function activate()
    {
        //Can not use echo here in activate function because plugin is not activated yet
        //Generate a CPT
        //flush rewrite rules -> refresh database
        $this->custom_post_type();
        flush_rewrite_rules();
    }

    function deactivate()
    {
        //flush rewrite rules
        echo 'The plugin is deactivated';
    }

    function delete()
    {
        //delete CPT
        //delete all the plugin data from the DB
    }

    function custom_post_type()
    {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }

    function enqueue()
    {
        //enqueue all our scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
        wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
    }
}

if (class_exists('FirstPlugin')) {
    $firstPlugin = new FirstPlugin();
    $firstPlugin->register();
}


register_activation_hook(__FILE__, array($firstPlugin, 'activate'));

register_deactivation_hook(__FILE__, array($firstPlugin, 'deactivate'));

register_uninstall_hook(__FILE__, array($firstPlugin, 'delete'));
