<?php
/*
 * @Theme Name:WebStack
 * @Theme URI:https://www.iotheme.cn/
 * @Author: iowen
 * @Author URI: https://www.iowen.cn/
 * @Date: 2019-02-22 21:26:02
 * @LastEditors: iowen
 * @LastEditTime: 2023-02-20 19:36:41
 * @FilePath: \WebStack\templates\site-card.php
 * @Description: 
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }  ?>

<?php
global $go_card_posts;
echo "<div class='row go-now-card mb-4'>";
foreach($go_card_posts as $post) {
    $title = wp_kses($post->post_title, array());
    $post_meta = get_post_meta($post->ID);
    $link = $post_meta[do_shortcode('[which_url_should_be_use]')][0] ?? '';
    $target = $post_meta['target'][0] ?? '';
    $rel = $post_meta['rel'][0] ?? '';
    $thumbnail = $post_meta['_thumbnail'][0] ?? '';
    $sites_sescribe = $post_meta['_sites_sescribe'][0] ?? '';
    echo <<<HTML
            <div class="col-sm-4 col-md-3 go-now-card-item">
            <a href="{$link}" target="{$target}" rel="{$rel}">
                <div class="go-now-card-imgbox">
                    <img src="{$thumbnail}"/>
                </div>
                <div class="go-now-card-comment">
                    <div class="go-now-card-comment-name go-now-card-clip-words">
                        <strong>$title</strong>
                    </div>
                    <p class="go-now-card-comment-describ go-now-card-clip-words">{$sites_sescribe}</p>
                </div>
            </a>
            </div>
HTML;
}
echo "</div>";
