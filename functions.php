<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        [
            "username" => "admin",
            "password" => "admin",
            "user_type" => "admin",
            "fullname" => "Administrator",
            "firstName" => "Julieto",
            "middleName" => "Camano",
            "lastName" => "Lirazan",
            "age" => "21",
            "gender" => "Male",
            "nationality" => "Filipino",
            "contactNumber" => "(+639)49-308-9229",
            "email" => "admin@example.com",
            "address" => "Brgy. 7, Sto. Niño, Pinamalayan, Oriental Mindoro, Philippines"
        ]
    ];
}

function login($username, $password) {
    $users = $_SESSION['users'];
    
    foreach ($users as $user) {
        if ($username === $user['username'] && $password === $user['password']) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['firstName'] = $user['firstName'];
            $_SESSION['middleName'] = $user['middleName'] ? $user['middleName'] : '';
            $_SESSION['lastName'] = $user['lastName'];
            $_SESSION['age'] = $user['age'];
            $_SESSION['gender'] = $user['gender'];
            $_SESSION['nationality'] = $user['nationality'];
            $_SESSION['contactNumber'] = $user['contactNumber'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['address'] = $user['address'];
            return true;
        }
    }
    return false;
}

function register($firstName, $middleName, $lastName, $age, $gender, $nationality, $contactNumber, $email, $address, $username, $password) {
    $users = &$_SESSION['users']; 
    
    foreach ($users as $user) {
        if ($username === $user['username']) {
            return false;
        }
    }
    
    $fullname = trim($firstName . ' ' . ($middleName ? $middleName . ' ' : '') . $lastName);
    
    $newUser = [
        "username" => $username,
        "password" => $password, 
        "user_type" => "user",
        "fullname" => $fullname,
        "firstName" => $firstName,
        "middleName" => $middleName,
        "lastName" => $lastName,
        "age" => $age,
        "gender" => $gender,
        "nationality" => $nationality,
        "contactNumber" => $contactNumber,
        "email" => $email,
        "address" => $address
    ];
    
    $users[] = $newUser;
    return true;
}
?>