<?php 



acf_add_options_page(array(
    'page_title' 	=> 'MG Setting',
    'menu_slug' 	=> 'mediagate-developer-bag-setting',
    'redirect'		=> true
));



acf_add_options_sub_page(array(
    'page_title' 	=> 'CSS',
    'menu_title'	=> 'CSS',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'CSS RTL',
    'menu_title'	=> 'CSS RTL',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'JS',
    'menu_title'	=> 'JS',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'JS RTL',
    'menu_title'	=> 'JS RTL',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'HEADER',
    'menu_title'	=> 'HEADER',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'HEADER RTL',
    'menu_title'	=> 'HEADER RTL',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'FOOTER',
    'menu_title'	=> 'FOOTER',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'FOOTER RTL',
    'menu_title'	=> 'FOOTER RTL',
    'parent_slug'	=> 'mediagate-developer-bag-setting',
));




// acf_add_options_sub_page(array(
//     'page_title' 	=> 'Fonts',
//     'menu_title'	=> 'Fonts',
//     'parent_slug'	=> 'mediagate-developer-bag-setting',
// ));

// acf_add_options_sub_page(array(
//     'page_title' 	=> 'Fonts Arabic',
//     'menu_title'	=> 'Fonts Arabic',
//     'parent_slug'	=> 'mediagate-developer-bag-setting',
// ));








?>