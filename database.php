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
    'flea'
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
$fleaCategories = [
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

// prodotti
$products = [
    'toys' => [
        [
            'productName' => 'Chuckit! Rugged Flyer',
            'brand' => 'Chuckit!',
            'productCategory' => 'toy',
            'pet' => 'dog',
            'price' => 15.49,
            'quantity' => 50,
            'toyCategory' => 'flying',
            'materials' => ['rubber'],
        ],
        [
            'productName' => 'KONG Treat Dispensing',
            'brand' => 'KONG',
            'productCategory' => 'toy',
            'pet' => 'dog',
            'price' => 18.99,
            'quantity' => 122,
            'toyCategory' => 'interactive',
            'materials' => ['rubber'],
        ],
        [
            'productName' => 'Whisker City Fluff Balls',
            'brand' => 'Whisker City',
            'productCategory' => 'toy',
            'pet' => 'cat',
            'price' => 12,
            'quantity' => 360,
            'toyCategory' => 'ball',
            'materials' => ['plush'],
        ],
        [
            'productName' => 'Petlinks Long-Braided Feather Teaser',
            'brand' => 'Petlinks',
            'productCategory' => 'toy',
            'pet' => 'cat',
            'price' => 9.99,
            'quantity' => 212,
            'toyCategory' => 'interactive',
            'materials' => ['nylon', 'plush'],
        ]
    ],
    'foods' => [
        [
            'productName' => 'Purina Pro Plan Focus Puppy',
            'brand' => 'Purina',
            'productCategory' => 'food',
            'pet' => 'dog',
            'price' => 12,
            'weight' => 2,
            'quantity' => 475,
            'foodCategory' => 'canned',
            'lifeStages' => ['puppy'],
        ],
        [
            'productName' => 'Instinct Frozen Raw Dog Food',
            'brand' => 'Instinct',
            'productCategory' => 'food',
            'pet' => 'dog',
            'price' => 19.99,
            'weight' => 1.3,
            'quantity' => 76,
            'foodCategory' => 'frozen',
            'lifeStages' => ['adult', 'senior'],
        ],
        [
            'productName' => 'Fancy Feast Classic Adult Cat Food',
            'brand' => 'Fancy Feast',
            'productCategory' => 'food',
            'pet' => 'cat',
            'price' => 0.78,
            'weight' => 0.85,
            'quantity' => 678,
            'foodCategory' => 'fresh',
            'lifeStages' => ['senior'],
        ],
        [
            'productName' => 'Hills Perfect Weight Adult Dry Cat Food - Chicken',
            'brand' => 'Hills',
            'productCategory' => 'food',
            'pet' => 'cat',
            'price' => 52.99,
            'weight' => 6.80,
            'quantity' => 104,
            'foodCategory' => 'dry',
            'lifeStages' => ['adult'],
        ]
    ],
    'fleas' => [
        [
            'productName' => 'Frontline Plus Flea & Tick Dog Treatment',
            'brand' => 'Frontline',
            'productCategory' => 'flea',
            'pet' => 'dog',
            'price' => 38.99,
            'quantity' => 12,
            'fleaCategory' => 'pills',
            'monthlyAvailability' => ['MAG'],
        ],
        [
            'productName' => 'Seresto Flea & Tick Dog Collar',
            'brand' => 'Seresto',
            'productCategory' => 'flea',
            'pet' => 'dog',
            'price' => 62.99,
            'quantity' => 72,
            'fleaCategory' => 'collar',
            'monthlyAvailability' => ['GIU', 'LUG'],
        ],
        [
            'productName' => 'Vets Best Flea + Tick Waterless Cat Bath Foam',
            'brand' => 'Vets Best',
            'productCategory' => 'flea',
            'pet' => 'cat',
            'price' => 13.99,
            'quantity' => 5,
            'fleaCategory' => 'shampoo',
            'monthlyAvailability' => ['MAG','GIU', 'LUG'],
        ],
        [
            'productName' => 'Capstar 2-25 Lb Cat Flea Treatment - 6 Count',
            'brand' => 'Capstar',
            'productCategory' => 'flea',
            'pet' => 'cat',
            'price' => 41.99,
            'quantity' => 177,
            'fleaCategory' => 'pills',
            'monthlyAvailability' => ['SET'],
        ]
    ]
];



?>