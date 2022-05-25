<?php 
    
    // HIDE ADMIN BAR FOR USER OTHER THAN ADMIN
    add_action('after_setup_theme', 'remove_admin_bar');
    function remove_admin_bar() 
    {
        if ( !current_user_can('manage_options') && !is_admin() ) {
          show_admin_bar(false);
        }
    }
    
    // RE-DIRECT AFTER LOGOUT
    add_action('wp_logout','ps_redirect_after_logout');
    function ps_redirect_after_logout()
    {
        wp_redirect( get_permalink( $std_page_id = 1503 ) );
        exit();
    }