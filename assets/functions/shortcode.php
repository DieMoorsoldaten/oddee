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


add_shortcode( 'footer1', 'footer1_func' );
function footer1_func( $atts ) {
    ob_start();
    ?>
        <?php
            if(!empty(get_option( 'email' ))) { ?>
                <p>
                    <a href="mailto:<?php echo get_option( 'email' ); ?>"><?php echo get_option( 'email' ); ?></a>
                </p>
            <?php } ?>
            <?php
                if(!empty(get_option( 'number1' ))) { ?>
                    <p>
                        <a href="tel:<?php echo str_replace(array( "/", "\\", ".", " ", "-", "(", ")" ), "" ,get_option( 'number1' )); ?>"><?php echo get_option( 'number1' ); ?></a>
                    </p>
            <?php } ?>
            <?php
                if(!empty(get_option( 'number2' ))) { ?>
                    <p>
                        <a href="tel:<?php echo str_replace(array( "/", "\\", ".", " ", "-", "(", ")" ), "" ,get_option( 'number1' )); ?>"><?php echo get_option( 'number2' ); ?></a>
                    </p>
            <?php } ?>
            <?php
                if(!empty(get_option( 'number3' ))) { ?>
                    <p>
                        <a href="tel:<?php echo str_replace(array( "/", "\\", ".", " ", "-", "(", ")" ), "" ,get_option( 'number1' )); ?>"><?php echo get_option( 'number3' ); ?></a>
                    </p>
            <?php } ?>
            <ul class="d-flex">
                <li>
                <?php

                    if(!empty(get_option( 'behance' ))) { ?>
                        <a href="<?php echo get_option( 'behance' ); ?>">
                            <img src="<?php echo get_option( 'behance_img' ); ?>" alt="">
                        </a>
                <?php 
                    } ?>
                </li>
                <li>
                <?php

                    if(!empty(get_option( 'instagram' ))) { ?>
                        <a href="<?php echo get_option( 'instagram' ); ?>">
                            <img src="<?php echo get_option( 'instagram_img' ); ?>" alt="">
                        </a>
                <?php 
                    } ?>
                </li>
                <li>
                <?php

                    if(!empty(get_option( 'facebook' ))) { ?>
                        <a href="<?php echo get_option( 'facebook' ); ?>">
                            <img src="<?php echo get_option( 'facebook_img' ); ?>" alt="">
                        </a>
                <?php 
                    } ?>
                </li>
            </ul>
        <?php
		return ob_get_clean();
}