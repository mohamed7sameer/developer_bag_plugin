<?php
/**
 * Plugin Name: Mediagate Developer Bag
*/


// load_theme_textdomain( 'a', plugin_dir_path(__FILE__) . '/languages' );
require plugin_dir_path(__FILE__) . 'inc/dvDd.php';
require plugin_dir_path(__FILE__) . 'inc/class-tgm-plugin-activation.php';
require plugin_dir_path(__FILE__) . 'inc/dvRequire_plugin.php';



if( function_exists('acf_add_options_page') ) {
	require plugin_dir_path(__FILE__) . 'inc/dvOption_page.php';
}

if( function_exists('acf_add_local_field_group') ):
    require plugin_dir_path(__FILE__) . 'developer_acf/dvCss.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvCssRtl.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvFooter.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvFooterRtl.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvHeader.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvHeaderRtl.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvJs.php';
    require plugin_dir_path(__FILE__) . 'developer_acf/dvJsRtl.php';
endif;

require plugin_dir_path(__FILE__) . 'inc/dvCodemirror.php';



function dv_mo_head(){
    $css = get_field('dv_code_css','option');
    $cssRtl = get_field('dv_code_css_rtl','option');
    $header = get_field('dv_code_header','option');
    $headerRtl = get_field('dv_code_header_rtl','option');

    print_r($header);
    if(is_rtl()){
        print_r($headerRtl);
    }

    print_r("<style>$css</style>");
    if(is_rtl()){
        print_r("<style>$cssRtl</style>");
    }


}
//<style>*{
add_action('wp_head','dv_mo_head');





function dv_mo_footer(){
    $js = get_field('dv_code_js','option');
    $jsRtl = get_field('dv_code_js_rtl','option');
    $footer = get_field('dv_code_footer','option');
    $footerRtl = get_field('dv_code_footer_rtl','option');

    print_r($footer);
    if(is_rtl()){
        print_r($footerRtl);
    }

    print_r("<script>$js</script>");
    if(is_rtl()){
        print_r("<script>$jsRtl</script>");
    }


}

add_action('wp_footer','dv_mo_footer');



?>