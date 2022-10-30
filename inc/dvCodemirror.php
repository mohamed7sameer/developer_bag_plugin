<?php




function dvDefaultCodeMirror(){
    wp_enqueue_style( 'moStyleEditorCodeMirror', plugin_dir_url(__dir__) . '/assets/codemirror/lib/codemirror.css' );
    wp_enqueue_style( 'moStyleEditorXqDark', plugin_dir_url(__dir__) . '/assets/codemirror/theme/xq-dark.css' );
    wp_enqueue_style( 'moStyleEditorSimplesScrolBar', plugin_dir_url(__dir__) . '/assets/codemirror/addon/scroll/simplescrollbars.css' );

    wp_enqueue_style( 'dv-codemirror-foldgutter', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/foldgutter.css' );
    wp_enqueue_style( 'dv-codemirror-show-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/show-hint.css' );
    wp_enqueue_style( 'dv-codemirror-lint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/lint/lint.css' );
    


    wp_enqueue_style( 'dv-codemirror', plugin_dir_url(__dir__) . '/assets/css/dv-codemirror.css' );



    
    //---------------------js---------------

    wp_enqueue_script( 'moScriptEditorModeCodemirror', plugin_dir_url(__dir__) . '/assets/codemirror/lib/codemirror.js' , array(), '1.0.0', false );

    

    wp_enqueue_script( 'moScriptEditorAddonsTrailingspace', plugin_dir_url(__dir__) . '/assets/codemirror/addon/edit/trailingspace.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddonsActiveLine', plugin_dir_url(__dir__) . '/assets/codemirror/addon/selection/active-line.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddonsMatchbracktes', plugin_dir_url(__dir__) . '/assets/codemirror/addon/edit/matchbrackets.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddonsSimpleScrollbar', plugin_dir_url(__dir__) . '/assets/codemirror/addon/scroll/simplescrollbars.js' , array(), '1.0.0', false );

    wp_enqueue_script( 'moScriptEditorAddonsClosebrackets', plugin_dir_url(__dir__) . '/assets/codemirror/addon/edit/closebrackets.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddonsClosetag', plugin_dir_url(__dir__) . '/assets/codemirror/addon/edit/closetag.js' , array(), '1.0.0', false );

    wp_enqueue_script( 'moScriptEditorAddons-foldcode', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/foldcode.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-foldgutter', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/foldgutter.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-brace-fold', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/brace-fold.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-xml-fold', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/xml-fold.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-indent-fold', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/indent-fold.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-markdown-fold', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/markdown-fold.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-comment-fold', plugin_dir_url(__dir__) . '/assets/codemirror/addon/fold/comment-fold.js' , array(), '1.0.0', false );
    
    wp_enqueue_script( 'moScriptEditorAddons-show-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/show-hint.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-xml-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/xml-hint.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-html-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/html-hint.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-anyword-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/anyword-hint.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-css-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/css-hint.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-javascript-hint', plugin_dir_url(__dir__) . '/assets/codemirror/addon/hint/javascript-hint.js' , array(), '1.0.0', false );
    // not found php
    

    wp_enqueue_script( 'moScriptEditorAddons-annotatescrollbar', plugin_dir_url(__dir__) . '/assets/codemirror/addon/scroll/annotatescrollbar.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-matchesonscrollbar', plugin_dir_url(__dir__) . '/assets/codemirror/addon/search/matchesonscrollbar.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-searchcursor', plugin_dir_url(__dir__) . '/assets/codemirror/addon/search/searchcursor.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorAddons-match-highlighter', plugin_dir_url(__dir__) . '/assets/codemirror/addon/search/match-highlighter.js' , array(), '1.0.0', false );

    wp_enqueue_script( 'moScriptEditorAddons-matchtags', plugin_dir_url(__dir__) . '/assets/codemirror/addon/edit/matchtags.js' , array(), '1.0.0', false );
    
    wp_enqueue_script( 'moScriptEditorModeCss', plugin_dir_url(__dir__) . '/assets/codemirror/mode/css/css.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorModeHtml', plugin_dir_url(__dir__) . '/assets/codemirror/mode/htmlmixed/htmlmixed.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorModeXml', plugin_dir_url(__dir__) . '/assets/codemirror/mode/xml/xml.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorMode-javascript', plugin_dir_url(__dir__) . '/assets/codemirror/mode/javascript/javascript.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorMode-clike', plugin_dir_url(__dir__) . '/assets/codemirror/mode/clike/clike.js' , array(), '1.0.0', false );
    // wp_enqueue_script( 'moScriptEditorMode-javascript', plugin_dir_url(__dir__) . '/assets/codemirror/mode/javascript/javascript.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'moScriptEditorModePhp', plugin_dir_url(__dir__) . '/assets/codemirror/mode/php/php.js' , array(), '1.0.0', false );
    
    

    

    
    

    wp_enqueue_script( 'moScriptEditorAddonsScript', plugin_dir_url(__dir__) . '/assets/js/script-codemirror.js' , array(), '1.0.0', true );
}




function addCodeScriptToEditorAdmin( $hook ) {
    // dd(get_current_screen()->id);
    switch(get_current_screen()->id){
        case 'toplevel_page_acf-options-css' :
            dvDefaultCodeMirror();

        break ;
        case 'mo-setting_page_acf-options-css-rtl' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-js' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-js-rtl' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-header' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-header-rtl' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-footer' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-footer-rtl' :
            dvDefaultCodeMirror();
        break ;
        case 'mo-setting_page_acf-options-functions' :
            dvDefaultCodeMirror();
        break ;
        default:
    }
  
    
}
add_action( 'admin_enqueue_scripts', 'addCodeScriptToEditorAdmin' );
