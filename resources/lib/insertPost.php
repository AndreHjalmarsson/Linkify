<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require("functions.php");

    if (!checkLogin($connection)) {
        header("Location: /");
        die();
    }

    $action = $_POST["postAction"];
	//  Checks that the hidden input field matches the requires activity
    if ($action === "createPost") {
		//  Checks that post content and title both have values
        if (empty($_POST["title"]) || empty($_POST["content"])) {
            $_SESSION["error"] = "Missing post content or title, fill in all fields to post.";
            header("Location: /");
            die();
        }

        $content = mysqli_real_escape_string($connection, $_POST["content"]);
        $uid = $_SESSION["login"]["uid"];
        $date = date("Y-m-d H:i:s");
		  $title = $_POST["title"];
		  $topic = mysqli_real_escape_string($connection, $_POST["topic"]);

		//   Inserts post information to the database
        dbPost($connection, "INSERT INTO posts (uid, content, published, title, topic) VALUES ('$uid', '$content', '$date', '$title', '$topic')");
        header("Location: /");
        die();
    }
} else {
    header("Location: /");
    die();
}
