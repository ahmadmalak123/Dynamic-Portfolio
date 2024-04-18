<?php

function redirectToRegister($errorMessage = null) {
   
        header("location: ../register.php?error=" . urlencode($errorMessage));
         exit();
}

function validateAndRetrieve($postData, $fieldName) {
    return isset($postData[$fieldName]) ? $postData[$fieldName] : null;
}

function userAlreadyExists($username, $userArray) {
    if (empty($userArray)) {
        return false; // Array is empty, user doesn't exist
    }

    foreach ($userArray as $existingUser) {
        if ($existingUser['username'] === $username) {
            return true; // User already exists
        }
    }

    return false; // User doesn't exist
}

function insertUserToFile($user) {
    $usersFile = file_get_contents('../users.json');
    $userArray = json_decode($usersFile, true);

    if (userAlreadyExists($user->username, $userArray)) {
        return false; // Signup failed
    }

    $userArray[] = [
        "firstname" => $user->firstname,
        "lastname" => $user->lastname,
        "username" => $user->username,
        "password" => $user->pass,
        "gender" => $user->gender,
        "dob" => $user->dob,
    ];

    $newUser = json_encode($userArray, JSON_PRETTY_PRINT);

    if (file_put_contents('../users.json', $newUser)) {
        return true; // Signup successful
    } else {
        return false; // Signup failed
    }
}

session_start();

$signupSuccess = false;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = new stdClass();
    $user->firstname = validateAndRetrieve($_POST, "firstname");
    $user->lastname = validateAndRetrieve($_POST, "lastname");
    $user->username = validateAndRetrieve($_POST, "username");
    $user->pass = validateAndRetrieve($_POST, "password");
    $user->gender = validateAndRetrieve($_POST, "gender");
    $user->dob = validateAndRetrieve($_POST, "dob");

    if (insertUserToFile($user)) {
        $signupSuccess = true;
        $_SESSION["username"] = $user->username;
        header("location:../Home.php");
        exit();
    } else {
        $error = "Username already exists. Please choose a different username.";
        redirectToRegister($error);
    }
}


?>
