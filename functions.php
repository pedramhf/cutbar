
<?php define("path",get_template_directory_uri()) ;
require 'functions/f-setting.php';
 function pedro_setup(){
    add_theme_support("post_thumbnail");
    add_theme_support("title_tag");
    register_nav_menu('main-menu','main-menu');
}


add_action("after_setup_theme","pedro_setup");

function pedro_enqueue(){
    wp_enqueue_style('bootstrap',path.'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome',path.'/css/all.min.css');
    wp_enqueue_style('style',path.'/style.css');
    wp_enqueue_style('googlefont','https://fonts.gstatic.com');
    wp_enqueue_style('googlefont','https://fonts.googleapis.com');
    wp_enqueue_script('bootstrap-bundel',path.'/js/bootstrap.bundle.min.js',array(),'1.0.0',true);
    wp_enqueue_script('bootstrap-bundel',path.'/js/index.js',array(),'5.1.1',true);
    wp_enqueue_script('style',path.'/js/style.js',array(),'1.0.0',true);
    
}
add_action("wp_enqueue_scripts",'pedro_enqueue');

function pedrosidebar(){
register_sidebar(array(
    'name'=>'footer',
    'id'=>'footer',
    'before_widget'=>'<div>',
    'aftere_widget'=>'</div>',
    'before_title'=>'<strong>',
    'after_title'=>'</srong>',

));
}
add_action('widgets_init','pedrosidebar');







?>

