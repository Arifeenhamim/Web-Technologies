<?php
if (isset($_GET["name"]) && $_GET["name"] != "") {
    $name = htmlspecialchars($_GET["name"]);
    echo "Hello, " . $name . "! 👋 This response came from the server.";
} else {
    echo "Hello, Stranger! Please enter your name.";
}
?>
