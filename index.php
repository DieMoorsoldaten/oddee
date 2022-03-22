<?php get_header(); ?>

<div class="container main-head">
    <?php
        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category'    => 7,
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
            <div class="main-head-block">
                <?php the_content(); ?>
            </div>
            <?php
        }

        wp_reset_postdata();
    ?>
</div>
<div class="container main-cases">
    <?php
        $my_posts = get_posts( array(
            'numberposts' => 5,
            'category'    => 10,
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
            <div class="main-cases-btn px-3">
                <?php the_content(); ?>
            </div>
            <?php
        }

        wp_reset_postdata();
    ?>
    <div class="main-cases-wrapper px-0">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 4,
                'category'    => 9,
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
                <div class="main-cases-block">
                    <figure class="mb-2">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <h4 class= mb-1>
                        <?php the_title(); ?>
                    </h4>
                    <p class="main-cases-descr">
                        <?php the_field('main_descr'); ?>
                    </p>
                </div>
                <?php
            }

            wp_reset_postdata();
        ?>
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 1,
                'category'    => 10,
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
                <div class="main-cases-btn main-cases-btn-help px-3">
                    <?php the_content(); ?>
                </div>
                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</div>
<div class="container-fluid main-center-menu">
    <div class="container">
        <?php 
            wp_nav_menu( array(
                'menu'  => 'main-center-menu',
                'container'       => false,
                'menu_class'      => 'main-menu__ul',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu'
            ));
        ?>
    </div>
</div>
<div class="container-fluid main-awards">
    <div class="container">
        <?php echo do_shortcode( '[awards]' ); ?>
    </div>
</div>
<div class="container-fluid main-clients">
    <div class="container">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 1,
                'category'    => 16,
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
                <div class="main-clients-container">
                    <div class="text-uppercase">
                        <?php the_content(); ?>
                    </div>
                    <div class="main-clients-wrapper">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => 7,
                                'category'    => 17,
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
                                <div class="main-clients-block">
                                    <figure>
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                    <h4>
                                        <?php the_title(); ?>
                                    </h4>
                                </div>
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => 1,
                                'category'    => 18,
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
                                <div class="main-clients-inner">
                                    <?php the_content(); ?>
                                </div>
                            <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php
            }

            wp_reset_postdata();
        ?>
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 1,
                'category'    => 19,
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
                <div class="main-client-descr">
                    <?php the_content(); ?>
                </div>
            <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>