<?php
//
//// 根据不同的浏览器环境返回链接地址
//function is_ua($links)
//{
//    $ua = $_SERVER['HTTP_USER_AGENT'];
//    // 如果是手机端
//    if(preg_match('/mobile/i', $ua)) {
//        // 小程序
//        if (strpos($ua, 'MicroMessenger')) {
//            return $links['weixin'];
//        }
//        // 安卓浏览器
//        if(preg_match('/android/i', $ua)) {
//            return $links['android'];
//        }
//        // iphone浏览器
//        if(preg_match('/iphone|ipad|ipod/i', $ua)) {
//            return $links['iphone'];
//        }
//    }
//    // 默认返回pc
//    return $links['pc'] ?? '';
//}
//
//if (!function_exists('gonow')) {
//    function gonow($atts)
//    {
//        $args = shortcode_atts( array(
//            'weixin' => '',
//            'android' => '',
//            'iphone' => '',
//            'pc' => ''
//        ), $atts);
//        $res = is_ua($args);
//        echo <<<HTML
//        <a href="$res">测试连接</a>
//HTML;
//
//    }
//}
//add_shortcode('gonow', 'gonow');

wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, '3.3.7', 'all' );