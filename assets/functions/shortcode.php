<?php 

add_shortcode( 'footer', 'footer_func' );
function footer_func( $atts ) {
        ob_start();
        ?>
			<?php
				$lastposts = get_posts( [
					'posts_per_page' => 1,
					'post_type'      => 'footer'
				] );

				foreach( $lastposts as $post ){
					setup_postdata($post);
					?>
						<?php the_content(); ?>
					<?php
				}
				wp_reset_postdata();
			?>
        <?php
		return ob_get_clean();
}

add_shortcode( 'awards', 'awards_func' );
function awards_func( $atts ) {
        ob_start();
        ?>
			<?php
            $my_posts = get_posts( array(
                'numberposts' => 6,
                'category'    => 14,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post ); ?>
                <div class="main-awards-block">
                    <?php the_content(); ?>
                </div>
                <?php
            }

            wp_reset_postdata();
        ?>
        <?php
		return ob_get_clean();
}



