<?php






acf_add_local_field_group(array(
    'key' => 'field_1149876639',
    'title' => 'CODE JS',
    'fields' => array(
        array(
            'key' => 'field_1669280273',
            'label' => 'dv_code_js',
            'name' => 'dv_code_js',
            'type' => 'textarea',
            'wrapper' => array(
                'class' => 'dv-textarea-codemirror-js',
            ),
            
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-js-rtl',
            ),
        ),
    ),
));




?>