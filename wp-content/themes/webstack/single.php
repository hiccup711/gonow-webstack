<?php 
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>


<?php 
$categories= get_categories(array(
  'taxonomy'     => 'favorites',
  'meta_key'     => '_term_order',
  'orderby'      => 'meta_value_num',
  'order'        => 'desc',
  'hide_empty'   => 0,
  )
); 
include( 'templates/header-nav.php' );
?>
<div class="main-content page">
    <div class="container">
	    <div class="row">
	    	<div class="col-12 mx-auto">
                <div class="panel panel-default">
                    <h1 class="h2"><?php echo get_the_title() ?></h1>
                    <div class="panel-body mt-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php while( have_posts() ): the_post(); ?>
	    			            <?php the_content();?>
                                    <?php edit_post_link(__('编辑','i_theme'), '<span class="edit-link">', '</span>' ); ?>
	    		                <?php endwhile; ?>
                            </div> 
                        </div>
                    </div>
                </div>
                    <?php
                    if(!empty($appids = get_post_meta(get_the_ID(), 'app_ids', true))) {
                        $matches = array();
                        preg_match_all("/\d+/", $appids, $matches);
                        if(!empty($appids = $matches[0])) {
                            $args = array(
                                'post_type' => 'sites',
                                'post_status' => 'publish',
                                'post__in' => $appids
                            );
                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                global $go_card_posts;
                                $go_card_posts = $query->get_posts();
                                include(get_theme_file_path() . '/templates/go-card.php');
                            }
                            wp_reset_postdata();
                        }
                    }
                    if ( comments_open() || get_comments_number() ) :
	    				comments_template();
                    endif; 
                    ?>
	    	</div>
	    </div>
	</div>
<?php get_footer(); ?>