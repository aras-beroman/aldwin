<?php

// string variable
$name = 'King Amancio'; // string variable
$age = 27; // integer variable
$address = 'Burgemeest Roellsstraat 2, 5611 ZH Eindhoven'; // string variable
$phone = '06-12345678'; // string
$email = 'king@amancio.nl'; // string variable
$isMarried = false; // boolean variable


// what is a object in php? 
// object is a collection of data and functions
// object is a instance of a class
// object is a variable that can store data and information on how to process that data
// object is a variable that can have properties and methods

// create a array based on the variables above
$person = [
    'name' => $name, // index 
    'age' => $age,
    'address' => $address,
    'phone' => $phone,
    'email' => $email,
    'isMarried' => $isMarried
];


// create a function that return true if the person is married
function isMarried($person) {
    if ($person['isMarried'] == 1) {
        return true;
    } else {
        return false;
    }
}


$thePersonIsMarried = isMarried($person);

if ($thePersonIsMarried) {
    echo 'The person is married';
} else {
    echo 'The person is not married';
}
