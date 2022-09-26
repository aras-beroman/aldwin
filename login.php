<?php

// $name = $_GET['username'];
// $password = $_GET['password'];
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $cars = ['bmw','merrie'];
    $cars = ['bmw','merrie'];

    http_response_code(201);

    $response = [
        "success" => true,    
        "message"=> "Credentials are valid",    
        "data" => [$name]
    ];

    echo json_encode($response);

} else {

    http_response_code(200);
    $response = [
        "success" => false,    
        "message"=> "All fields are required",    
        "data" => []
    ];

    echo json_encode($response);
}


