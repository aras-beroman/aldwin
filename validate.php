<?php

$name = 'Aras';
$age = 29;
$postcode = '5611 ZH';
$email = 'aras@aras.nl';
$ip = '10.10.100';


// create a function that validates ip address
function validateIp($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        return true;
    } else {
        return false;
    }
}

// create a function that validates email address
function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

// create a function that validates postcode
function validatePostcode($postcode) {
    if (preg_match('/^[1-9][0-9]{3}\s?[a-zA-Z]{2}$/', $postcode)) {
        return true;
    } else {
        return false;
    }
}

var_dump(validateIp('127.0.0.154546'));
