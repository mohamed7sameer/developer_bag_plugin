<?php






acf_add_local_field_group(array(
    'key' => 'field_1314641241',
    'title' => 'CODE CSS RTL',
    'fields' => array(
        array(
            'key' => 'field_1080980736',
            'label' => 'dv_code_css_rtl',
            'name' => 'dv_code_css_rtl',
            'type' => 'textarea',
            'wrapper' => array(
                'class' => 'dv-textarea-codemirror-css',
            ),
            
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-css-rtl',
            ),
        ),
    ),
));




?>