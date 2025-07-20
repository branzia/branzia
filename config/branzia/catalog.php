<?php 

return [

    'configuration' => [
        'tab' => 'Catalog',
        'section' => 'Category',
        'group' => 'Storefront',
        'fields' => [
            'mode' => [
                'label' => 'Mode',
                'type' => 'Select',
                'value' => [
                    'grid',
                    'list'
                ],
                'default' => 'list',
            ],
        ],
    ]
];