<?php
function ws_session_start() {
    if( ! session_id()  && is_user_logged_in()) {
        session_start();
    }
}
add_action('init', 'ws_session_start', 1);
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',false,'1.1','all' );
wp_enqueue_style( 'colores', get_template_directory_uri().'/assets/css/colores.css',false,'1.1','all' );
wp_enqueue_style( 'iconos', get_template_directory_uri().'/assets/static/open-iconic/font/css/open-iconic-bootstrap.css',false,'1.1','all' );
wp_enqueue_script( 'jquery3', get_template_directory_uri() .'/assets/js/jquery-3.3.1.slim.min.js', false ,1.1, true);
wp_enqueue_script( 'bootjs', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery3') ,1.1, true);
wp_enqueue_script( 'popper', get_template_directory_uri() .'/assets/js/popper.min.js', array('bootjs') ,1.1, true);
