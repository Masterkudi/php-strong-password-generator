<?php

session_start();

$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;

if (!$email || !$password) {
    header("Location: index.php");

    exit;
}

$_SESSION["USER"] = [
    "name" => "Mario",
    "surname" => "Rossi",
    "email" => $email,
];

header("LOcation: index.php");
?>
