<?php

$name = $_GET["name"] ?? "Guest";

echo "<h1>GET Example</h1>";
echo "Hello, " . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "!";

?>