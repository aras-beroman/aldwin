<?php

$arrayOfPersons = [    
    [
        'name' => 'King Amancio',
        'age' => 27,
        'address' => '',
        'phone' => '06-12345678',
        'email' => 'amancio@live.nl',
        'isMarried' => false,
        'gender' => 'male'
    ],
    [
        'name' => 'Aras Tatar',
        'age' => 29,
        'address' => 'Nolenstraat 2, 5611 ZH Amsterdam',
        'phone' => '06-12345678',
        'email' => 'aras@live.nl',
        'isMarried' => true,
        'gender' => 'male'
    ],
    [
        'name' => 'Sander van der Velden',
        'age' => 55,
        'address' => 'SPUI 2, 5611 ZH Amsterdam',
        'phone' => '06-12345678',
        'email' => 'sandra@live.nl',
        'isMarried' => false,
        'gender' => 'female'
    ]
];


function getAllMarriedPersons($arrayOfPersons) {
    $marriedPersons = [];

    foreach ($arrayOfPersons as $persoon) {
       if ($persoon['isMarried']) {
        array_push($marriedPersons, $persoon);
       } 
    }

    return $marriedPersons;

}

$filteredArrayOfPersons = getAllMarriedPersons($arrayOfPersons);

print_r($filteredArrayOfPersons);

