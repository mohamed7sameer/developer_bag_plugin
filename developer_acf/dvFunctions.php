<?php






acf_add_local_field_group(array(
    'key' => 'field_389105737',
    'title' => 'Function Php',
    'fields' => array(
        array(
            'key' => 'field_712872906',
            'label' => 'dv_code_functions',
            'name' => 'dv_code_functions',
            'type' => 'textarea',
            'wrapper' => array(
                'class' => 'dv-textarea-codemirror-php',
            ),
            
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-functions',
            ),
        ),
    ),
));




?>