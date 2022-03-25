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
                    <?php // edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
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
                <?php echo do_shortcode( '[footer1]' ); ?>
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
                    <?php // edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
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