<?php get_header(); ?>

<div class="fix-wrapper">
    <div class="container-fluid">
        <div class="container error-page">
            <?php
                $my_posts = get_posts( array(
                    'numberposts' => 1,
                    'category'    => 32,
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
                    <div>
                        <?php // edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                        <h1>
                            <?php the_title() ?>
                        </h1>
                        <?php the_content(); ?>
                    </div>
                <?php
                wp_reset_postdata();

            }?>
        </div>
    </div>
</div>

<?php get_footer(); ?>