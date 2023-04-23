<?php
/*
 * @Theme Name:WebStack
 * @Theme URI:https://www.iotheme.cn/
 * @Author: iowen
 * @Author URI: https://www.iowen.cn/
 * @Date: 2021-08-22 19:00:30
 * @LastEditors: iowen
 * @LastEditTime: 2021-08-22 22:27:34
 * @FilePath: \WebStack\inc\frame\config\metabox.config.php
 * @Description: 
 */
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$options[] = array(
    'id' => 'sites_meta',
    'title' => '网址链接属性',
    'post_type' => 'sites',
    'data_type' => 'unserialize',
    'context' => 'normal',
    'priority' => 'high',
    'sections'  => array(
        array(
            'name'   => 'section_4',
            'fields' => array(
                array(
                    'id'    => '_visible',
                    'type'  => 'switcher',
                    'title' => '管理员可见',
                    'label' => '如果开启，将只有登录管理员账号后才会显示',
                ),
                array(
                    "id" => "site_link",
                    "type"=>"text",
                    "title" => "默认网址链接",
                    'after' =>'需包含 http(s)://<br><span style="font-weight: normal;color: crimson;margin-top: 10px;display: block;">注意：“网址”和“公众号二维码”两者可同时填写，但是至少填一项。</span>',
                ),
                array(
                    "id" => "iphone",
                    "type"=>"text",
                    "title" => "苹果链接",
                    'after' =>'',
                ),
                array(
                    "id" => "android",
                    "type"=>"text",
                    "title" => "安卓链接",
                    'after' =>'',
                ),
                array(
                    "id" => "weixin",
                    "type"=>"text",
                    "title" => "微信小程序链接",
                    'after' =>'',
                ),
            
                array(
                    "id" => "_sites_sescribe",
                    "type"=>"text",
                    "title" => "描叙",
                ),
            
                array(
                    "id" => "_sites_order",
                    "std" => "0",
                    "title" => "网址排序数值越大越靠前",
                    "type"=>"text"
                ),
            
                array(
                    "id" => "_thumbnail",
                    "type"=>"image",
                    "title" => "添加图标地址，调用自定义图标",
                    'add_title' => '添加图标',
                ),
                array(
                    "id" => "_wechat_qr",
                    "type"=>"image",
                    "title" => "添加公众号二维码",
                    'add_title' => '添加二维码',
                ),
                array(
                    "id" => "target",
                    "type"=>"select",
                    "title" => "Target",
                    "options" => array(
                        '_blank' => 'Blank',
                        '_self' => 'Self',
                    ),
                    'default' => 'Blank'
                ),
                array(
                    "id" => "rel",
                    "type"=>"select",
                    "title" => "Rel",
                    "options" => array(
                        'external nofollow' => 'External Nofollow',
                        'nofollow' => 'Nofollow',
                        'external' => 'External',
                    ),
                    'default' => 'External Nofollow'
                ),
            ),
        ),

    ),
);
CSFramework_Metabox::instance( $options );