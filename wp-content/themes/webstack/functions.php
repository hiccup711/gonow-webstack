<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
date_default_timezone_set('Asia/Shanghai');
require get_template_directory() . '/inc/inc.php';

const URL_TYPES = [
    'android' => 'android',
    'iphone' => 'iphone',
    'weixin' => 'weixin',
    'default' => 'site_link',
];
//登录页面的LOGO链接为首页链接
add_filter('login_headerurl',function() {return get_bloginfo('url');});
//登陆界面logo的title为博客副标题
add_filter('login_headertext',function() {return get_bloginfo( 'description' );});

//WordPress 5.0+移除 block-library CSS
add_action( 'wp_enqueue_scripts', 'fanly_remove_block_library_css', 100 );
function fanly_remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}


function which_url_should_be_use() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    // If Mobile
    if(preg_match('/mobile/i', $ua)) {
        // MiniProgram
        if (strpos($ua, 'MicroMessenger')) {
            return URL_TYPES['weixin'];
        }
        // Android
        if(preg_match('/android/i', $ua)) {
            return URL_TYPES['android'];
        }
        // iPhone
        if(preg_match('/iphone|ipad|ipod/i', $ua)) {
            return URL_TYPES['iphone'];
        }
    }
    // Default return link
    return URL_TYPES['default'];
}
add_shortcode('which_url_should_be_use', 'which_url_should_be_use');