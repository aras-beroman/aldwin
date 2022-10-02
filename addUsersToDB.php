<?php

# add 10 users to the database with random names and passwords

# connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'test');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

for ($i = 0; $i < 10; $i++) {
    $name = "user" . $i;
    $password = "password" . $i;

    // encrept the password use bcrypt
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO login (username, password) VALUES ('$name', '$password')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
}


// delete all users from the database
// $query = "DELETE FROM login";
// $result = mysqli_query($conn, $query);


?>