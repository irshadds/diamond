<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Travel Master
 * @since Travel Master 1.0.0
 */

/* 
Template Name: Brand_List
*/

get_header(); 

$args = array(
                'taxonomy' => 'product_brand',
                'hide_empty' => false
        		);
        		$taxonomies = get_terms($args);

        
        		$contents = array();
        
		        foreach ($taxonomies as $taxonomy) {
		                    $page_post['id']        = $taxonomy->term_id;
		                    $page_post['title']     = $taxonomy->name;
		                    $page_post['url']       = get_term_link( $taxonomy);
		                    $page_post['image']     = get_field('brand_image',$taxonomy);
		            array_push( $contents, $page_post );
		        }

?>

<div id="inner-content-wrapper" class="wrapper page-section">

    <div id="primary" class="content-area">
    	<main id="main" class="site-main" role="main">
            <div class="archive-blog-wrapper clear col-3">

            	<?php

            	

					if (!empty($contents)):
						foreach ($contents as $content) :
							
							$class = has_post_thumbnail() ? '' : 'no-post-thumbnail';
							$options = travel_master_get_theme_options();

            	?>
            	<article id="post-<?php $content['id']; ?>" <?php post_class( $class ); ?>>
            		<div class="post-item-wrapper">
						<div class="entry-container">

							<?php echo travel_master_article_header_meta(); ?>

						     <header class="entry-header">
						       	<h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo $content['title']; ?></a></h2>
						     </header>

						            
						</div><!-- .entry-container -->
						<div class="featured-image matchheight" style="background-image: url('<?php echo esc_url($content['image']); ?>');">
						                <a href="<?php echo esc_url($content['url']); ?>" class="post-thumbnail-link"></a>
						</div><!-- .featured-image -->
					</div><!-- .post-item-wrapper -->
            	</article><!-- #post-## -->	

					<?php
					endforeach;

					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					

            </div>

            <?php  
			/**
			* Hook - travel_master_action_pagination.
			*
			* @hooked travel_master_pagination 
			*/
			do_action( 'travel_master_action_pagination' ); 

			
			?>
    	
     	</main><!-- #main -->
	</div><!-- #primary -->
	<?php  
	if ( travel_master_is_sidebar_enable() ) {
		get_sidebar();
	}
	?>
</div><!-- .wrapper -->
<?php
get_footer();
?>
