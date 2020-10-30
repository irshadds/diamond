<?php
/**
 * Blog section
 *
 * This is the template for the content of blog section
 *
 * @package Theme Palace
 * @subpackage Travel Master
 * @since Travel Master 1.0.0
 */
if ( ! function_exists( 'travel_master_add_blog_section' ) ) :
    /**
    * Add blog section
    *
    *@since Travel Master 1.0.0
    */
    function travel_master_add_blog_section() {
    	$options = travel_master_get_theme_options();
        // Check if blog is enabled on frontpage
        $blog_enable = apply_filters( 'travel_master_section_status', true, 'blog_section_enable' );

        if ( true !== $blog_enable ) {
            return false;
        }
        // Get blog section details
        $section_details = array();
        $section_details = apply_filters( 'travel_master_filter_blog_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render blog section now.
        travel_master_render_blog_section( $section_details );
    }
endif;

if ( ! function_exists( 'travel_master_get_blog_section_details' ) ) :
    /**
    * blog section details.
    *
    * @since Travel Master 1.0.0
    * @param array $input blog section details.
    */
    function travel_master_get_blog_section_details( $input ) {
        $options = travel_master_get_theme_options();

        // Content type.
        $blog_content_type  = $options['blog_content_type'];
        
        $content = array();
        switch ( $blog_content_type ) {
        	
            case 'category':
                $cat_id = ! empty( $options['blog_content_category'] ) ? $options['blog_content_category'] : '';
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 4,
                    'cat'               => absint( $cat_id ),
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            case 'recent':
                $cat_ids = ! empty( $options['blog_category_exclude'] ) ? $options['blog_category_exclude'] : array();
                $args = array(
                    'post_type'         => 'recipes',
                    'posts_per_page'    => 8,
                    'category__not_in'  => ( array ) $cat_ids,
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            default:
            break;
        }


        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = travel_master_trim_content( 20 );
                $page_post['author_id'] = get_the_author_meta('ID');
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : ''; 

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();

            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// blog section content details.
add_filter( 'travel_master_filter_blog_section_details', 'travel_master_get_blog_section_details' );


if ( ! function_exists( 'travel_master_render_blog_section' ) ) :
  /**
   * Start blog section
   *
   * @return string blog content
   * @since Travel Master 1.0.0
   *
   */
   function travel_master_render_blog_section( $content_details = array() ) {
        $options = travel_master_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="latest-posts" class="relative page-section">
            <div class="wrapper">
                <div class="section-header">
                    <?php if ( ! empty( $options['blog_title'] ) ) : ?>
                        <h2 class="section-title"><?php echo esc_html( $options['blog_title'] ); ?></h2>
                    <?php endif; ?>
                </div><!-- .section-header -->

                <div class="grid-wrapper">
                    <div class="grid-cols">
                        <?php foreach ( $content_details as $content ) : ?>
                        
                                <div class="grid-col" ontouchstart="this.classList.toggle('hover');">
                                    <div class="grid-container">
                                        <div class="grid-front" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                            <div class="grid-inner">
                                                <h3 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h3>

                                            </div>
                                        </div>
                                            <div class="grid-back" style="background-image: url('wp-content/uploads/2020/10/unnamed-1.jpg');">
                                                <div class="grid-inner">
                                                    <?php if ( ! empty( $content['excerpt'] ) ) : ?>
                                                    <p><?php echo substr(wp_kses_post( $content['excerpt'] ),0,80); ?> ...</p>
                                                <?php endif; ?>
                                                    <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn">Read More</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        <?php endforeach; ?>        
                    </div>
                    
                </div>

            </div><!-- .wrapper -->
        </div><!-- #latest-posts -->

    <?php }
endif;