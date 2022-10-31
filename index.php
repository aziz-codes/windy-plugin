<?php
/*

PLugin Name: Windy Plugin
Plugin URI: https://github.com/aziz-codes/windy-plugin
Description: Windy plugin that allows you add items to windy theme
Version: 1.0.0
Author: Windy
Author URI: https://github.com/aziz-codes
Licesnse: GPL2

*/


global $wpdb;

//plugin dir constants to add views,enqueue scripts & styles
if(!defined("ABSPATH"))
exit;
if(!defined("PLUGIN_DIR_PATH"))
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
  
if(!defined("PLUGIN_URL"))
define("PLUGIN_URL",plugins_url()."/windy");


//function to enqueue css file, but this plugin use 
//tailwindcss for stylying, so no need to use
function load_styles(){
wp_enqueue_style('my-css',PLUGIN_URL."/assets/css/style.css",'',time());
}

add_action('init','load_styles');
//enqueue js files
function load_scripts(){
    wp_enqueue_script("my-script",PLUGIN_URL."/assets/js/app.js",'',time());
}
add_action("init","load_scripts");


// to add plugin option in wordpress dashboard

function add_plugin_menu(){
    add_menu_page(
        "Windy",
        "Windy",
        "manage_options",
        "add-project",
        "add_project_view",
        "dashicons-buddicons-groups"
    );
    add_submenu_page(
        "add-project",
        "View Projects",
        "View Projects",
        "manage_options",
        "projects",
        "view_projects"
    );

    add_submenu_page(
        "",
        null,
        null,
        "manage_options",
        "edit-project",
        "edit_project"
    );
}
add_action("admin_menu","add_plugin_menu");

function add_project_view(){
  include_once PLUGIN_DIR_PATH."/views/add-project.php";
}
function view_projects(){
    echo "Lists all the projects";
}

function edit_project(){
    echo "This will allows you to update project";
}

// functions for tables

function project_table(){
    global $wpdb;
     return $wpdb->prefix."project";
}


// create table on activation.

register_activation_hook(__FILE__,"create_table_project");

function create_table_project(){
    global $wpdb;

    require_once ABSPATH.'/wp-admin/includes/upgrade.php';

    $sql = "CREATE TABLE `".project_table()."` (
        `project_id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(220) DEFAULT NULL,
        `token` varchar(220) DEFAULT NULL,
        `url` varchar(220)  DEFAULT NULL,
        `date` date  DEFAULT NULL,
        `photo` varchar(220)  DEFAULT NULL,
        `tools` varchar(220)  DEFAULT NULL,
        `description` varchar(220)  DEFAULT NULL,
        PRIMARY KEY(project_id)
        ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ";

    dbDelta($sql);
}



// drop table on deactivation.

function drop_table(){
    global $wpdb;

    $wpdb->query("DROP TABLE IF EXISTS ".project_table());
}

register_deactivation_hook(__FILE__,"drop_table");


// add support for ajax to work.

add_action('wp_ajax_project','project_handler');

function project_handler(){
    global $wpdb;

    if($_REQUEST['params']=="save_project"){
        $wpdb->insert(project_table(),array(
            "title" => $_REQUEST['title'],
            "token" => $_REQUEST['token'],
            "url" => $_REQUEST['url'],
            "date" => $_REQUEST['date'],
            "photo" => $_REQUEST['photo'],
            "tools" => $_REQUEST['tools'],
            "description" => $_REQUEST['description']
        ));
        echo json_encode(array('status'=>1,"message"=>"Project Added "));
    }
}


?>