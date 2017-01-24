<?php

require("functions.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Checking if all fields recieved a value.
    if ($_POST["fullname"] !== "" && $_POST["username"] !== "" && $_POST["email"] !== "" && $_POST["password"] !== "") {

        registerUser($connection, $_POST["fullname"], $_POST["username"], $_POST["email"], $_POST["password"]);
    } else {
        // If there were missing fields an error message is displayed.
        session_start();
        $_SESSION["error"] = "Missing fields when register user. Please try again.";
    }
    header("Location: /");
    die();
}
