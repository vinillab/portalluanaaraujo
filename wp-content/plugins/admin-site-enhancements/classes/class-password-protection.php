<?php

namespace ASENHA\Classes;

use WP_Error;
/**
 * Class for Password Protection module
 *
 * @since 6.9.5
 */
class Password_Protection {
    /**
     * Show Password Protection admin bar status icon
     *
     * @since 4.1.0
     */
    public function show_password_protection_admin_bar_icon() {
        add_action( 'wp_before_admin_bar_render', [$this, 'add_password_protection_admin_bar_item'] );
        add_action( 'admin_head', [$this, 'add_password_protection_admin_bar_item_styles'] );
        add_action( 'wp_head', [$this, 'add_password_protection_admin_bar_item_styles'] );
    }

    /**
     * Add WP Admin Bar item
     *
     * @since 4.1.0
     */
    public function add_password_protection_admin_bar_item() {
        global $wp_admin_bar;
        if ( is_user_logged_in() ) {
            if ( current_user_can( 'manage_options' ) ) {
                $wp_admin_bar->add_menu( array(
                    'id'    => 'password_protection',
                    'title' => '',
                    'href'  => admin_url( 'tools.php?page=admin-site-enhancements#utilities' ),
                    'meta'  => array(
                        'title' => __( 'Password protection is currently enabled for this site.', 'admin-site-enhancements' ),
                    ),
                ) );
            }
        }
    }

    /**
     * Add icon and CSS for admin bar item
     *
     * @since 4.1.0
     */
    public function add_password_protection_admin_bar_item_styles() {
        if ( is_user_logged_in() ) {
            if ( current_user_can( 'manage_options' ) ) {
                ?>
                <style>
                    #wp-admin-bar-password_protection { 
                        background-color: #c32121 !important;
                        transition: .25s;
                    }
                    #wp-admin-bar-password_protection > .ab-item { 
                        color: #fff !important;  
                    }
                    #wp-admin-bar-password_protection > .ab-item:before { 
                        content: "\f160"; 
                        top: 2px; 
                        color: #fff !important; 
                        margin-right: 0px; 
                    }
                    #wp-admin-bar-password_protection:hover > .ab-item { 
                        background-color: #af1d1d !important; 
                        color: #fff; 
                    }
                </style>
                <?php 
            }
        }
    }

    /**
     * Disable page caching
     *
     * @since 4.1.0
     */
    public function maybe_disable_page_caching() {
        if ( !defined( 'DONOTCACHEPAGE' ) ) {
            define( 'DONOTCACHEPAGE', true );
        }
    }

    /**
     * Maybe show login form
     *
     * @since 4.1.0
     */
    public function maybe_show_login_form() {
        $options = get_option( ASENHA_SLUG_U, array() );
        $stored_password = $options['password_protection_password'];
        // When user is logged-in as in an administrator
        if ( is_user_logged_in() ) {
            if ( current_user_can( 'manage_options' ) ) {
                return;
                // Do not load login form or perform redirection to the login form
            }
        }
        // When site visitor has entered correct password, get the auth cookie
        $auth_cookie = ( isset( $_COOKIE['asenha_password_protection'] ) ? $_COOKIE['asenha_password_protection'] : '' );
        // Compared $auth_cookie against hashed string set in maybe_process_login()
        if ( true === wp_check_password( $_SERVER['HTTP_HOST'] . '__' . $stored_password, $auth_cookie ) ) {
            return;
            // Do not load login form or perform redirection to the login form
        }
        if ( isset( $_REQUEST['protected-page'] ) && 'view' == $_REQUEST['protected-page'] ) {
            // Show login form
            $password_protected_login_page_template = ASENHA_PATH . 'includes/password-protected-login.php';
            load_template( $password_protected_login_page_template );
            exit;
        } else {
            // Redirect from current URL to login form
            $current_url = (( is_ssl() ? 'https://' : 'http://' )) . sanitize_text_field( $_SERVER['HTTP_HOST'] ) . sanitize_text_field( $_SERVER['REQUEST_URI'] );
            $args = array(
                'protected-page' => 'view',
                'source'         => urlencode( $current_url ),
            );
            $pwd_protect_login_url = add_query_arg( $args, home_url( '/' ) );
            nocache_headers();
            wp_safe_redirect( $pwd_protect_login_url );
            exit;
        }
    }

    /**
     * Maybe process login to access protected page content
     *
     * @since 4.1.0
     */
    public function maybe_process_login() {
        global $password_protected_errors;
        $password_protected_errors = new WP_Error();
        if ( isset( $_REQUEST['protected_page_pwd'] ) ) {
            $password_input = sanitize_text_field( $_REQUEST['protected_page_pwd'] );
            $options = get_option( ASENHA_SLUG_U, array() );
            $stored_password = $options['password_protection_password'];
            if ( !empty( $password_input ) ) {
                if ( $password_input == $stored_password ) {
                    // Password is correct
                    // Set auth cookie
                    // $expiration = time() + DAY_IN_SECONDS; // in 24 hours
                    $expiration = 0;
                    // by the end of browsing session
                    $hashed_cookie_value = wp_hash_password( $_SERVER['HTTP_HOST'] . '__' . $stored_password );
                    setcookie(
                        'asenha_password_protection',
                        $hashed_cookie_value,
                        $expiration,
                        COOKIEPATH,
                        COOKIE_DOMAIN,
                        false,
                        true
                    );
                    // Redirect
                    $redirect_to_url = ( isset( $_REQUEST['source'] ) ? sanitize_url( $_REQUEST['source'] ) : '' );
                    wp_safe_redirect( $redirect_to_url );
                    exit;
                } else {
                    // Password is incorrect
                    // Add error message
                    $password_protected_errors->add( 'incorrect_password', __( 'Incorrect password.', 'admin-site-enhancements' ) );
                }
            } else {
                // Password input is empty
                // Add error message
                $password_protected_errors->add( 'empty_password', __( 'Password can not be empty.', 'admin-site-enhancements' ) );
            }
        }
    }

    /**
     * Add custom login error messages
     *
     * @since 4.1.0
     */
    public function add_login_error_messages() {
        global $password_protected_errors;
        if ( $password_protected_errors->get_error_code() ) {
            $messages = '';
            $errors = '';
            // Extract the error message
            foreach ( $password_protected_errors->get_error_codes() as $code ) {
                $severity = $password_protected_errors->get_error_data( $code );
                foreach ( $password_protected_errors->get_error_messages( $code ) as $error ) {
                    if ( 'message' == $severity ) {
                        $messages .= $error . '<br />';
                    } else {
                        $errors .= $error . '<br />';
                    }
                }
            }
            // Output the error message
            if ( !empty( $messages ) ) {
                echo '<p class="message">' . wp_kses_post( $messages ) . '</p>';
            }
            if ( !empty( $errors ) ) {
                echo '<div id="login_error">' . wp_kses_post( $errors ) . '</div>';
            }
        }
    }

}
