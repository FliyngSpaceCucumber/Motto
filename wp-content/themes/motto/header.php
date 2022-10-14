<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->

        <header id="wrapper-navbar" class=" w-100">

            <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

            <?php $container = get_theme_mod( 'understrap_container_type' ); ?>

            <nav id="main-nav" class="navbar navbar-expand-xl navbar-dark bg-transparent py-1" aria-labelledby="main-nav-label">

                <h2 id="main-nav-label" class="screen-reader-text">
                    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
                </h2>


                <div class="px-1 px-md-3 pt-1 align-items-start w-100 d-block d-xl-flex justify-content-between ms-md-4 ms-0">

                    <!-- Your site title as branding in the menu -->
                    <?php if ( ! has_custom_logo() ) { ?>

                        <?php if ( is_front_page() && is_home() ) : ?>

                            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                        <?php else : ?>

                            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                        <?php endif; ?>

                        <?php
                    } else {
                        the_custom_logo();
                    }
                    ?>
                    <!-- end custom logo -->

                    <button class="navbar-toggler order-1 float-end m-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- The WordPress Menu goes here -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse order-md-0 order-1 justify-content-start text-black',
                            'add_li_class'  => 'text-dark ms-2 ',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                    <!--                <button class="btn-secondary mt-2" >Contact</button>-->

                </div><!-- .container(-fluid) -->

            </nav><!-- .site-navigation -->


        </header><!-- #wrapper-navbar end -->


