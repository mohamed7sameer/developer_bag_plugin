<?php






acf_add_local_field_group(array(
    'key' => 'field_1542091366',
    'title' => 'CODE Footer',
    'fields' => array(
        array(
            'key' => 'field_1376368034',
            'label' => 'dv_code_footer',
            'name' => 'dv_code_footer',
            'type' => 'textarea',
            'wrapper' => array(
                'class' => 'dv-textarea-codemirror-html',
            ),
            
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-footer-rtl',
            ),
        ),
    ),
));




?>