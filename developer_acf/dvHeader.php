<?php






acf_add_local_field_group(array(
    'key' => 'field_823042716',
    'title' => 'CODE JS',
    'fields' => array(
        array(
            'key' => 'field_2054497631',
            'label' => 'dv_code_header',
            'name' => 'dv_code_header',
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
                'value' => 'acf-options-header',
            ),
        ),
    ),
));




?>