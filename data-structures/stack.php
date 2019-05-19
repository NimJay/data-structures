<?php

$DATA_STRUCTURES[] = [
    
    'name' => 'Stack',
    'type' => '', // TODO: Figure out a clean way to categorize.
    
    'operations' => [
        [
            'name' => 'push',
            'averageO' => '1',
            'description' => 'Insert an element into the Stack.',
        ],
        [
            'name' => 'pop',
            'averageO' => '1',
            'description' => 'Remove and return the element that was last inserted.',
        ],
    ],
    
    'additionalOperations' => [
        [
            'name' => 'peek',
            'averageO' => '1',
            'description' => 'Return the element that was last inserted (without removing it from the Stack).',
        ],
    ],
    
    'characteristics' => [
        'LIFO'
    ],
];
