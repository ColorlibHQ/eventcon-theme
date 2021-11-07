<?php
    $eventcon_header_btn_text = eventcon_opt( 'eventcon_header_btn_text' ) ? eventcon_opt( 'eventcon_header_btn_text' ) : '';
    $eventcon_header_btn_url = eventcon_opt( 'eventcon_header_btn_url' ) ? eventcon_opt( 'eventcon_header_btn_url' ) : '';
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <?php echo eventcon_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new eventcon_bootstrap_navwalker()
                                            ));
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="buy_tkt">
                                <?php
                                    if ( $eventcon_header_btn_text ) {
                                        echo '
                                        <div class="book_btn d-none d-lg-block">
                                            <a href="'.esc_url($eventcon_header_btn_url).'">'.esc_html($eventcon_header_btn_text).'</a>
                                        </div>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->