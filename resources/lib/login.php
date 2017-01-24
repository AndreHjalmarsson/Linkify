<?php

require("functions.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Check that username and password both have values.
    if ($_POST["username"] !== "" && $_POST["password"] !== "") {
        if ($uid = loginUser($connection, $_POST["username"], $_POST["password"])) {
            session_start();
            $_SESSION["login"] = [
                "uid" => $uid
            ];
				//Create a cookie of remember me box has been filled in.
            if (isset($_POST["remember"])) {
                createLoginCookie($connection, $uid);
            }
        }
    } else {
        //Print error message if fields are missing
        session_start();
        $_SESSION["error"] = "Missing fields when logging in. Please try again.";
    }
    header("Location: /");
    die();
}
