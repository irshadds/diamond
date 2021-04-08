<?php
/**
 * Slider section
 *
 * This is the template for the content of slider section
 *
 * @package Theme Palace
 * @subpackage Travel Master
 * @since Travel Master 1.0.0
 */
if ( ! function_exists( 'travel_master_add_slider_section' ) ) :
    /**
    * Add slider section
    *
    *@since Travel Master 1.0.0
    */
    function travel_master_add_slider_section() {
    	$options = travel_master_get_theme_options();
        // Check if slider is enabled on frontpage
        $slider_enable = apply_filters( 'travel_master_section_status', true, 'slider_section_enable' );

        if ( true !== $slider_enable ) {
            return false;
        }
        // Get slider section details
        $section_details = array();
        $section_details = apply_filters( 'travel_master_filter_slider_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render slider section now.
        travel_master_render_slider_section( $section_details );
    }
endif;

if ( ! function_exists( 'travel_master_get_slider_section_details' ) ) :
    /**
    * slider section details.
    *
    * @since Travel Master 1.0.0
    * @param array $input slider section details.
    */
    function travel_master_get_slider_section_details( $input ) {
        $options = travel_master_get_theme_options();

        $content = array();
        $page_ids = array();

        for ( $i = 1; $i <= 10; $i++ ) {
            if ( ! empty( $options['slider_content_page_' . $i] ) )
                $page_ids[] = $options['slider_content_page_' . $i];
        }
        
        $args = array(
            'post_type'         => 'post',
            'post__in'          => ( array ) $page_ids,
            'category_name'     => 'hero-image',
            'posts_per_page'    => 10,
            'orderby'           => 'post__in',
            );                    

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']            = get_the_id();
                $page_post['video_id']      = get_field( 'video_id', get_the_ID() );
                $page_post['button_label']  = get_field( 'button_label', get_the_ID() );
                $page_post['button_link']   = get_field( 'button_link', get_the_ID() );
                $page_post['title']         = get_the_title();
                $page_post['url']           = get_the_permalink();
                $page_post['excerpt']       = travel_master_trim_content( 15 );
                $page_post['image']  	    = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : '';

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
// slider section content details.
add_filter( 'travel_master_filter_slider_section_details', 'travel_master_get_slider_section_details' );


if ( ! function_exists( 'travel_master_render_slider_section' ) ) :
  /**
   * Start slider section
   *
   * @return string slider content
   * @since Travel Master 1.0.0
   *
   */
   function travel_master_render_slider_section( $content_details = array() ) {
        $options = travel_master_get_theme_options();


        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="featured-slider-section">
            <div class="featured-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": <?php echo $options['slider_autoplay'] ? 'true' : 'false'; ?>, "draggable": true, "fade": true, "adaptiveHeight": true }'>
                <?php foreach ( $content_details as $content ) : ?>



                    <?php if (! empty( $content['button_label'] )):?>

                        <?php $btn_label = $content['button_label']; ?>
                        
                    
                    <?php else: ?>
                            
                            <?php $btn_label = ! empty( $options['slider_btn_label'] ) ? $options['slider_btn_label'] : esc_html__( 'Learn More', 'travel-master' ); ?>

                    <?php endif; ?>


                
                <?php if ( ! empty( $content['video_id'] ) ) : ?>
                   
                
                    <div class="item youtube">

                        <?php $source = "https://www.youtube.com/embed/". $content['video_id']. "?autoplay=0&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1"; ?>

                         <iframe class="embed-player slide-media" src="<?php echo $source ?>" frameborder="0" allowfullscreen></iframe>
                        
                    </div>

                    
                    
                    
                     
                        <?php /* <iframe class="videoWrapper-iframe"
                                src="https://www.youtube.com/embed/<?php $content['video_id']?>&autoplay=1"frameborder="0" width="720" height="480"
                    allowfullscreen> 
                        
                            </iframe> */ ?>
                       
                           
                        
                    
                    
                        

                <?php else : ?>

                     <article style="background-image:url('<?php echo esc_url( $content['image'] ); ?>');">

                        <div class="overlay"></div>
                        <div class="wrapper">
                            <div class="featured-content-wrapper">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                </header>

                                <div class="entry-content">
                                    <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                                </div><!-- .entry-content-->
                                <?php if (! empty( $content['button_link'] )):?>  
                                <div class="read-more">
                                 
                                    <a href="<?php echo esc_url( $content['button_link'] ); ?>" class="btn btn-fill" target="_blank">

                                        <span class="screen-reader-text"><?php echo esc_html( $content['title'] ); ?></span>
                                        <?php echo esc_html( $btn_label ); ?>
                                    </a>
                                </div><!-- .read-more -->
                                <?php endif; ?>
                            </div><!-- .featured-content-wrapper -->
                        </div><!-- .wrapper -->
                    </article>

                <?php endif; ?>

               

                        
                <?php endforeach; ?>
            </div><!-- .featured-slider -->  

        </div><!-- #featured-slider-section -->     
    <?php }
endif;