<?php get_header(); ?>

<div class="fix-wrapper about">
    <div class="container">
    <?php
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category'    => 26,
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
                <div class="about-block">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                </div>
                <?php
            }

            wp_reset_postdata();
        ?>
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
        </div>
        <div class="about-btm container">
            
            <?php
                $my_posts = get_posts( array(
                    'numberposts' => 1,
                    'category'    => 27,
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
                    <div class="about-btm">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
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