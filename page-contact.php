<?php get_header(); ?>

<div class="fix-wrapper contact">
    <div class="container-fluid">
        <div class="container">
            <?php
                $my_posts = get_posts( array(
                    'numberposts' => 1,
                    'category'    => 29,
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
                    <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                        <div class="contact-head">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <?php the_content(); ?>
                        </div>
                    <?php
                }

                wp_reset_postdata();
            ?>

            <div class="contact-center">
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
            </div>

            <?php
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 30,
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
                    <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                        <div class="contact-btm">
                            <?php the_content(); ?>
                        </div>
                    <?php
                }

                wp_reset_postdata();
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>