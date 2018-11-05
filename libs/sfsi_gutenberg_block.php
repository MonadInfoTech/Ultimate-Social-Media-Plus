<?php

function check_compatibility() {
	global $wp_version;

	if ( ! version_compare( $wp_version, '5.0', '>=' ) and ! is_plugin_active( 'gutenberg/gutenberg.php' ) ) {
		return false;
	}else{
		return true;
	}
}

add_action('admin_init','sfsi_plus_block_init');

function sfsi_plus_block_init(){
    if(check_compatibility()){
        add_action( 'enqueue_block_editor_assets', 'sfsi_plus_share_block_editor_assets' );
        add_action('enqueue_block_assets', 'sfsi_plus_share_block_assets');
        // add_action( 'plugins_loaded', 'sfsi_plus_register_block' ); 
    }
}

function sfsi_plus_share_block_editor_assets() {
    wp_enqueue_script(
        'sfsi-plus-share-block',
        plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ), // Block.build.js: We register the block here. Built with Webpack.
        array( 'wp-blocks', 'wp-i18n', 'wp-element' , 'jquery','wp-api'),
        '1'
        // filemtime( plugin_dir_path( 'js/block.js', __FILE__ ) )
    );

    wp_enqueue_style(
        'sfsi-plus-share-block-editor', // Handle.
        plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ), // Block editor CSS.
        array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
        '1'
        // filemtime( plugin_dir_path( 'css/editor.css', __FILE__ ) )
    );
    wp_localize_script( 'sfsi-plus-share-block', 'plugin_url',plugins_url( 'icons_theme', __FILE__ )  );
}
function sfsi_plus_share_block_assets() {
    wp_enqueue_style(
        'sfsi-plus-share-block-frontend',
        plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), // Block style CSS.
        array( 'wp-blocks' ),
        '1'
        // filemtime( plugin_dir_path( 'css/style.css', __FILE__ ) )
    );

    wp_register_script(
        'sfsi-plus-share-block-front',
        plugins_url( 'js/front.js', __FILE__ ),
        array( 'wp-blocks', 'wp-i18n', 'wp-element','jquery' ),
        '1'
        // filemtime( plugin_dir_path( 'js/front.js', __FILE__ ) )
    );

}

function sfsi_plus_register_icon_route(){
    register_rest_route(SFSI_PLUS_DOMAIN.'/v1','icons',array(
        'methods'=> WP_REST_Server::READABLE,
        'callback' => 'sfsi_plus_render_shortcode',
        'args'=>array(
            "share_url"=>array(
                "type"=>'string',
                "sanitize_callback" => 'sanitize_text_field'
            ),
            "admin_refereal" => array(
                "type"  =>  'string',
                "sanitize_callback" =>  'sanitize_text_field'
            ),
            "ractangle_icon" => array(
                "type"  =>  'string',
                "sanitize_callback" =>  'sanitize_text_field'
            )
        )
    ));
    // register_rest_route(SFSI_PLUS_DOMAIN.'/v1','settings',array(
    //     'methods'=> WP_REST_Server::READABLE,
    //     'callback' => 'sfsi_plus_fetch_settings',
    //     // 'args'=>array(
    //         // "share_url"=>array(
    //             // "type"=>'string',
    //             // "sanitize_callback" => 'sanitize_text_field'
    //         // )
    //     // )
    // ));
}

add_action( 'rest_api_init', 'sfsi_plus_register_icon_route');

function sfsi_plus_render_shortcode(){
    ob_start();
    if(isset($_GET['ractangle_icon']) && 1==$_GET['ractangle_icon']){
        $returndata=DISPLAY_ULTIMATE_PLUS(null,null,$_GET['share_url']);
    }else{
        $returndata=sfsi_plus_render_gutenberg_round(null,null,$_GET['share_url'],$_GET['admin_refereal']);
    }
    ob_clean();
    return rest_ensure_response($returndata);
}


function sfsi_plus_render_gutenberg_round($args = null, $content = null,$share_url=null, $is_admin){
    $instance = array("showf" => 1, "title" => '');
    $sfsi_plus_section8_options = get_option("sfsi_plus_section8_options");
    $sfsi_plus_section8_options = unserialize($sfsi_plus_section8_options);
    $sfsi_plus_place_item_gutenbery = $sfsi_plus_section8_options['sfsi_plus_place_item_gutenberg'];
    if($sfsi_plus_place_item_gutenberg == "yes")
    {
        $return = '';
        if(!isset($before_widget)): $before_widget =''; endif;
        if(!isset($after_widget)): $after_widget =''; endif;
        
        /*Our variables from the widget settings. */
        $title = apply_filters('widget_title', $instance['title'] );
        $show_info = isset( $instance['show_info'] ) ? $instance['show_info'] : false;
        global $is_floter;        
        $return.= $before_widget;
            /* Display the widget title */
            if ( $title ) $return .= $before_title . $title . $after_title;
            $return .= '<div class="sfsi_plus_widget">';
                $return .= '<div id="sfsi_plus_wDiv"></div>';
                /* Link the main icons function */
                $return .= sfsi_plus_check_visiblity(0,$share_url);
                $return .= '<div style="clear: both;"></div>';
            $return .= '</div>';
        $return .= $after_widget;
        return $return;
    }else{
        if($is_admin){
            return __('Kindly go to setting page and check the option " "', SFSI_PLUS_DOMAIN);
        }
    }
}

// function sfsi_plus_fetch_settings(){
//     ob_start();
//     $option8=  unserialize(get_option('sfsi_plus_section8_options',false));
//     // $returndata = $option8;
//     $returndata=array(
//         'textBeforeShare'=>isset($option8['sfsi_plus_textBefor_icons'])?$option8['sfsi_plus_textBefor_icons']:'',
//         'iconType'=>isset($option8['sfsi_plus_display_button_type'])?($option8['sfsi_plus_display_button_type']):'';
//         'iconAlignemt'=>isset()
//     );
//     ob_clean();
//     return rest_ensure_response($returndata);
// }


// function sfsi_plus_gutenberg_share_block_init(){
//     $post_types = get_post_types(array('public'=>true,'_builtin'=>true));
//     register_meta($post_types,'sfsi_plus_gutenberg_text_before_share',array(
//         'show_in_rest' => true,
//         'single'    =>  true,
//         // 'type'      =>  'string'
//     ));
//     register_meta($post_types,'sfsi_plus_gutenberg_icon_type',array(
//         'show_in_rest' => true,
//         'single'    =>  true,
//         // 'type'      =>  'string'
//     ));
//     register_meta($post_types,'sfsi_plus_gutenberg_icon_alignemt',array(
//         'show_in_rest' => true,
//         'single'    =>  true,
//         // 'type'      =>  'string'
//     ));
//     register_meta($post_types,'sfsi_plus_gutenberg_max_per_row',array(
//         'show_in_rest' => true,
//         'single'    =>  true,
//         // 'type'      =>  'string'
//     ));
// }

// add_action( 'init','sfsi_plus_gutenberg_share_block_init' );

?>