<?php get_header(); ?>

<div class="fix-wrapper">
    <div class="container-fluid">
        <div class="container services">

        <?php
            $parent_id = 20;

            # получаем дочерние рубрики
            $sub_cats = get_categories( array(
                'child_of' => $parent_id,
                'hide_empty' => 1,
                'order' => 'DESC'
            ) );
            if( $sub_cats ){
                foreach( $sub_cats as $cat ){

                    echo '<h2>'. $cat->name .'</h2>';
                    echo '<div class="services-wrapper">';

                    # получаем записи из рубрики
                    $myposts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => $cat->cat_ID,
                        'orderby'     => 'post_date',
                        'order'       => 'ASC',
                    ) );

                    # выводим записи
                    global $post;
                    foreach($myposts as $post){
                        setup_postdata($post); ?>

                        <div class="services-block">
                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                        </div>

                    <?php
                    }

                    echo '</div>';
                }

                wp_reset_postdata();
            }


            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category'    => 23,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post ); ?>
                <div class="services-bottom">
                    <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
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