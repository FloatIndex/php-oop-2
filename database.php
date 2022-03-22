<?php

// pets
$pets = [
    'dog',
    'cat'
];

// prodotti
$productCategories = [
    'toy',
    'food',
    'flea and tick'
];

// giochi
$toyCategories = [
    'ball',
    'flying',
    'interactive'
];

$toyMaterials = [
    'plush',
    'rubber',
    'nylon'
];

// cibo
$foodCategories = [
    'canned',
    'dry',
    'fresh',
    'frozen'
];

$lifeStages = [
    'puppy',
    'adult',
    'senior'
];

// antipulci
$fleaAndTickCategories = [
    'pills',
    'collar',
    'shampoo'
];

$months = [
    'GEN',
    'FEB',
    'MAR',
    'APR',
    'MAG',
    'GIU',
    'LUG',
    'AGO',
    'SET',
    'OTT',
    'NOV',
    'DIC'
];

$products = [
    'dogs' => [
        'toys' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'toy',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'ball',
                'materials' => ['plush'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'toy',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'interactive',
                'materials' => ['rubber'],
            ]
        ],
        'foods' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'food',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'dry',
                'lifeStage' => ['puppy'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'food',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'frozen',
                'lifeStage' => ['adult', 'senior'],
            ]
        ],
        'flea and tick' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'flea and tick',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'pills',
                'monthlyAvailability' => ['MAG'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'flea and tick',
                'pet' => 'dog',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'collar',
                'monthlyAvailability' => ['GIU', 'LUG'],
            ]
        ]
    ],
    'cats' => [
        'toys' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'toy',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'categoria gioco',
                'materials' => ['plush', 'rubber'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'toy',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'categoria gioco2',
                'materials' => ['nylon'],
            ]
        ],
        'foods' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'food',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'canned',
                'lifeStage' => ['puppy'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'food',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'fresh',
                'lifeStage' => ['adult', 'senior'],
            ]
        ],
        'flea and tick' => [
            [
                'productName' => 'nome',
                'brand' => 'brand',
                'productCategory' => 'flea and tick',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'shampoo',
                'monthlyAvailability' => ['MAG'],
            ],
            [
                'productName' => 'nome2',
                'brand' => 'brand2',
                'productCategory' => 'flea and tick',
                'pet' => 'cat',
                'price' => 12,
                'quantity' => 122,
                'toyCategory' => 'collar',
                'monthlyAvailability' => ['GIU', 'LUG'],
            ]
        ]
    ]
];



?>