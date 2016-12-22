<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	session_start();
    require("functions.php");

    $action = $_POST["action"] ?? "";

    if ($action === "changeInfo") {
        if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
            $_SESSION["error"] = "Missing field. Check all fields and try again.";
            header("Location: /settings.php");
            die();
        }

        if (!validateUserPassword($connection, $_SESSION["login"]["uid"], $_POST["password"])) {
            $_SESSION["error"] = "Wrong password, try again.";
            header("Location: /settings.php");
            die();
        }

        $uid = $_SESSION["login"]["uid"];
        $username = mysqli_real_escape_string($connection, $_POST["username"]);
        $email = mysqli_real_escape_string($connection, $_POST["email"]);

        if (!dbPost($connection, "UPDATE users SET username = '$username', email = '$email' WHERE id = '$uid'")) {
            $_SESSION["error"] = "Could not connect to the database, try again later.";
        } else {
            $_SESSION["message"] = "Success! Your changes has been registred.";
        }

        header("Location: /settings.php");
        die();
	  }
  }


?>
