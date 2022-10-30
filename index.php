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
        "dashicons-admin-users"
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
?>
 <h2 class="text-red-500 font-bold">Hello World</h2>

<?php
}
function view_projects(){
    echo "Lists all the projects";
}

function edit_project(){
    echo "This will allows you to update project";
}

?>