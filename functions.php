<?php

// Functions for WFC Child Theme
// AUTHOR: DATHAN CRUZ
// DATE: 3.17.2016

function  wfc_site_additional_jquery(){
  wp_enqueue_script( 'wfc-jquery', '/wp-content/themes/wfc-child/js/wfc.jquery.fn.js', array('jquery'), null, true );
  wp_enqueue_script( 'wfc-homepage-sticky-nav', '/wp-content/themes/wfc-child/js/wfc.homepage-sticky.fn.js', array('jquery'), null, true);
  wp_enqueue_script( 'wfc-easter-egg', '/wp-content/themes/wfc-child/js/egg.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'wfc-easter', '/wp-content/themes/wfc-child/js/wfc.easter.fn.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'wfc_site_additional_jquery' );


add_filter( 'widget_text', 'do_shortcode' );

add_shortcode( 'wfc_site_uri', 'wfc_site_uri' );

function wfc_site_uri(){
    return get_bloginfo( 'url' );
}

    /**
     * Add an 'Update & Done' button in the publish metabox
     * So that the user can just get back to the list after editing a page/post
     *
     * @since 2.1
     * @global $current_screen
     * @global $post
     */
    add_action( 'post_submitbox_start', 'wfc_add_update_and_finish_button' );
    function wfc_add_update_and_finish_button( $data ){
        global $current_screen;
        global $post;
        if( $post->post_status == 'auto-draft' ){
            echo '<div id="wfc_publish_block"><input name="original_publish" type="hidden" id="original_publish" value="Publish"><input type="hidden" name="publish" id="publish" class="button button-primary button-large" value="Publish" accesskey="p"><input name="wfc_continue" type="submit" class="wfc-continue-button button-primary" id="wfc_continue"  accesskey="p" value="Publish &amp; Done"></div>';
        } else{
            if( $post->post_status == 'publish' ){
                echo '<div id="wfc_publish_block"><input name="original_publish" type="hidden" id="original_publish" value="Update"><input type="hidden" name="save" id="publish" class="button button-primary button-large" value="Update" accesskey="p"><input name="wfc_continue" type="submit" class="wfc-continue-button button-primary" id="wfc_continue"  accesskey="p" value="Update &amp; Done"></div>';
            }
        }
    }
    /**
     * Redirect to list of page/post
     * if $_REQUEST['wfc_continue'] exists
     * Used for the update & done button
     *
     * @since 2.1
     *
     * @param string $location old location url
     *
     * @return string $url new location url
     */
    add_filter( 'wp_redirect', 'wfc_continue_after_update_redirect', 10, 2 );
    function wfc_continue_after_update_redirect( $location ){
        if( isset($_REQUEST['wfc_continue']) ){
            $location = admin_url().'edit.php?post_type='.$_REQUEST['post_type'].'';
        }
        return $location;
    }
?>
