<?php



function dvRequirePlugins() {

    
    $plugins = array(

        

        array(
            'name'               => 'Custom Post Type UI', 
            'slug'               => 'custom-post-type-ui', 
            'source'             => plugin_dir_url( __DIR__ ) . 'dvPlugins/custom-post-type-ui.zip', // The plugin source.
            'required'           => true,
        ),

        array(
            'name'               => 'Advanced Custom Fields PRO', 
            'slug'               => 'advanced-custom-fields-pro', 
            'source'             => plugin_dir_url( __DIR__ ) . 'dvPlugins/advanced-custom-fields-pro.zip', // The plugin source.
            'required'           => true,
        ),
        array(
            'name'               => 'UpdraftPlus - Backup/Restore', 
            'slug'               => 'updraftplus', 
            'source'             => plugin_dir_url( __DIR__ ) . 'dvPlugins/updraftplus.zip', // The plugin source.
            'required'           => true,
        ),

        
        array(
            'name'               => 'WP Custom Admin Interface', 
            'slug'               => 'wp-custom-admin-interface', 
            'required'           => true,
        ),

        array(
            'name'               => 'TranslatePress - Multilingual', 
            'slug'               => 'translatepress-multilingual', 
            'required'           => true,
        ),


        array(
            'name'               => 'WP Dummy Content Generator', 
            'slug'               => 'wp-dummy-content-generator', 
            'required'           => true,
        ),
        
        array(
            'name'               => 'Duplicate Page', 
            'slug'               => 'duplicate-page', 
            'required'           => true,
        ),
        array(
            'name'               => 'WP Reset - Most Advanced WordPress Reset Tool', 
            'slug'               => 'wp-reset', 
            'required'           => true,
        ),
      

        array(
            'name'               => 'Bulk menu creator', 
            'slug'               => 'bulk-menu-creator', 
            'required'           => true,
        ),

        array(
            'name'               => 'BCM Duplicate Menu', 
            'slug'               => 'bcm-duplicate-menu', 
            'required'           => true,
        ),
        array(
            'name'               => 'Seed Prod', 
            'slug'               => 'coming-soon', 
            'required'           => true,
        ),





        array(
            'name'               => 'Contact Form 7', 
            'slug'               => 'contact-form-7', 
            'required'           => false,
        ),

        array(
            'name'               => 'Classic Editor', 
            'slug'               => 'classic-editor', 
            'required'           => false,
        ),

        array(
            'name'               => 'Classic Widgets', 
            'slug'               => 'classic-widgets', 
            'required'           => false,
        ),

        array(
            'name'               => 'Essential Addons for Elementor', 
            'slug'               => 'essential-addons-for-elementor-lite', 
            'required'           => false,
        ),

        array(
            'name'               => 'Ultimate Post Kit Addons For Elementor - (Post Grid, Post Carousel, Post Slider, Category List, Post Tabs, Post Ticker, Tag Cloud)', 
            'slug'               => 'ultimate-post-kit', 
            'required'           => false,
        ),

        
      
    );

    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'dvRequirePlugins' );



?>