<?php

$DATA_STRUCTURES[] = [

    'name' => 'Max Heap',
    'type' => '', // TODO: Figure out a clean way to categorize.

    'operations' => [
        [
            'name' => 'peek',
            'averageO' => '1',
            'description' => 'Return the root node (node at the top of the Heap), which is the maximum.',
        ],
        [
            'name' => 'insert',
            'averageO' => 'log(n)',
            'description' => 'Insert a given node into the Heap, while maintaining the Heap property.',
        ],
        [
            'name' => 'remove',
            'averageO' => 'log(n)',
            'description' => 'Remove the specified node from the Heap, while maintaining the Heap property.',
        ],
    ],

    'additionalOperations' => [
        [
            'name' => 'heapify',
            'averageO' => 'nlog(n)',
            'description' => 'Create a new Heap with a given set of keys.',
        ],
    ],

    'characteristics' => [
        'LIFO'
    ],
];
