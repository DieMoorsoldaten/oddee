<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header container-fluid px-0">
        <nav class="container navbar py-3">
            <div class="navbar-brand logo pl-3">
                <?php the_custom_logo(); ?>
            </div>
            <button class="navbar-toggler header__burger mr-3" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="header__menu text-left fix-menu" id="navbarSupportedContent">
                <div class="header__menu-container container-xl d-block">
                    <?php 
                        wp_nav_menu( array(
                            'menu'  => 'top_menu',
                            'container'       => false,
                            'menu_class'      => 'navbar-nav',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu'
                        ));
                    ?>
                </div>
                <div class="header__menu-c">    
                    <div class="header-menu-btm container-xl d-block">
                        <?php echo do_shortcode( '[footer]'); ?>
                    </div>
                </div>
            </div>
            <div class="header__menu-second text-left fix-menu">
                <div class="container-xl position-relative">
                    <a href="#" class="header__menu-second-btn" id="menuBtn"></a>
                    <?php 
                        wp_nav_menu( array(
                            'menu'  => 'top-menu-second',
                            'container'       => false,
                            'menu_class'      => 'navbar-nav',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu'
                        ));
                    ?>
                    
                </div>
                <div class="header-menu-btm">
                    <div class="container-xl d-block">
                        <?php echo do_shortcode( '[footer]'); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>