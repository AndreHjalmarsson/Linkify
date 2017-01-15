<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require("functions.php");

    if (!checkLogin($connection)) {
        header("Location: /");
        die();
    }

    $action = $_POST["postAction"];
    if ($action === "createPost") {
        if (!isset($_POST["content"]) || empty($_POST["content"])) {
            $_SESSION["error"] = "Missing post content. Please provide enough content to share.";
            header("Location: /");
            die();
        }

        $content = mysqli_real_escape_string($connection, $_POST["content"]);
        $uid = $_SESSION["login"]["uid"];
        $date = date("Y-m-d H:i:s");
		  $title = $_POST["title"];
		  $topic = mysqli_real_escape_string($connection, $_POST["topic"]);
        dbPost($connection, "INSERT INTO posts (uid, content, published, title, topic) VALUES ('$uid', '$content', '$date', '$title', '$topic')");
        header("Location: /");
        die();
    }
} else {
    header("Location: /");
    die();
}
