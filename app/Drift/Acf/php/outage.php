<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5bbf31087bfe4',
    'title' => __('Driftstörningar', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5bbf35a41825a',
            'label' => __('Startar', 'halland'),
            'name' => 'start',
            'type' => 'date_time_picker',
            'instructions' => __('Fyll i när driftstörningen planeras att påbörjas.', 'halland'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y-m-d H:i',
            'return_format' => 'Y-m-d H:i',
            'first_day' => 1,
        ),
        1 => array(
            'key' => 'field_5bbf36151825b',
            'label' => __('Slutar', 'halland'),
            'name' => 'end',
            'type' => 'date_time_picker',
            'instructions' => __('Fyll i när driftstörningen planeras att vara avslutad.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y-m-d H:i',
            'return_format' => 'Y-m-d H:i',
            'first_day' => 1,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'outage',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}