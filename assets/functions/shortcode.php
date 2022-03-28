<?php 

add_shortcode( 'footer', 'footer1_func' );
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
            <ul class="d-flex">
                <li>
                <?php

                    if(!empty(get_option( 'behance' ))) { ?>
                        <a href="<?php echo get_option( 'behance' ); ?>">
                            <?php echo get_option( 'behance_text' ); ?>
                        </a>
                <?php 
                    } ?>
                </li>
                <li>
                <?php

                    if(!empty(get_option( 'instagram' ))) { ?>
                        <a href="<?php echo get_option( 'instagram' ); ?>">
                            <?php echo get_option( 'instagram_text' ); ?>
                        </a>
                <?php 
                    } ?>
                </li>
                <li>
                <?php

                    if(!empty(get_option( 'facebook' ))) { ?>
                        <a href="<?php echo get_option( 'facebook' ); ?>">
                            <?php echo get_option( 'facebook_text' ); ?>
                        </a>
                <?php 
                    } ?>
                </li>
            </ul>
        <?php
		return ob_get_clean();
}