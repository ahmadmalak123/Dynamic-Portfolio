<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $un = $_POST["username"];
    $pass = $_POST["password"];

    $usersJson = file_get_contents('../users.json');
    $usersArray = json_decode($usersJson, true);

    $loggedInUser = authenticateUser($un, $pass, $usersArray);

    if ($loggedInUser !== null) {
        $_SESSION["username"] = $loggedInUser["username"];
        $_SESSION["firstname"] = $loggedInUser["firstname"]; // Fix typo: "frstname" to "firstname"
        header("location: ../Home.php");
        exit();
    } else {
        $errorMessage = "Username or Password incorrect";
        header("location: ../index.php?error=" . urlencode($errorMessage));
        exit();
    }
} else {
    header("location:../index.php");
    exit();
}

function authenticateUser($username, $password, $usersArray) {
    if (empty($usersArray)) { // Fix variable name: $userArray to $usersArray
        return null;
    }

    foreach ($usersArray as $user) {
        if ($username === $user["username"] && $password === $user["password"]) {
            return $user;
        }
    }
    return null;
}
?>
