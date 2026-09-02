<?php

$username = "admin";
$password = "123456";

try {
    
    if (empty($username)) {
        throw new Exception("Username empty");
    }

    if (empty($password)) {
        throw new Exception("Password empty");
    }

    if ($username !== "admin" || $password !== "123456") {
        throw new Exception("username/password ভুল");
    }

    echo "Login successful\n";

} catch (Exception $e) {

    echo "Error: " . $e->getMessage() . "\n";

} finally {
   
    echo "Execution completed \n";
}
