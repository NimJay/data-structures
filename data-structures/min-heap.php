<?php

$DATA_STRUCTURES[] = [

    'name' => 'Min Heap',
    'type' => '', // TODO: Figure out a clean way to categorize.
    'description' => 'A Min Heap is a Tree with a special property: each node is less than (or equal to) its children nodes. This ensures that the top-most node (root node) is the minimum.',

    'operations' => [
        [
            'name' => 'peek',
            'averageO' => '1',
            'description' => 'Return the root node (node at the top of the Heap), which is the minimum.',
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
            'averageO' => 'n',
            'description' => 'Create a new Heap with a given set of keys.',
        ],
    ],
];
