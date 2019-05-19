<?php

$DATA_STRUCTURES[] = [
    
    'name' => 'Queue',
    'type' => '', // TODO: Figure out a clean way to categorize.

    'operations' => [
        [
            'name' => 'enqueue',
            'averageO' => '1',
            'description' => 'Insert an element into the Queue.',
        ],
        [
            'name' => 'dequeue',
            'averageO' => '1',
            'description' => 'Remove and return the element in the Queue that was added first.',
        ],
    ],

    'additionalOperations' => [
        [
            'name' => 'peek',
            'averageO' => '1',
            'description' => 'Return the first added element (without removing it from the Queue).',
        ],
    ],

    'characteristics' => [
        'FIFO'
    ],
];
