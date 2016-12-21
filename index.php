<?php
// session_start();
require("resources/lib/functions.php");

$loggedIn = checkLogin($connection);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Linkify</title>
	 <link rel="stylesheet" href="/resources/css/style.css">
  </head>
  <body>
	  <?php
	  require("resources/blocks/comps/header.php");

	  if ($loggedIn) {
            require("resources/blocks/home.php");
        } else {
				require("resources/blocks/comps/allPosts.php");
            require("resources/blocks/authentication.php");
        }


	  require("resources/blocks/comps/error.php");
     require("resources/blocks/comps/message.php");
	   ?>
  </body>
</html>
