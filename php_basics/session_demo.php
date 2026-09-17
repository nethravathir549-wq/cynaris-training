<?php

session_start();

$_SESSION["username"] = "Nethravathi";
$_SESSION["course"] = "BCA";

echo "<h1>Session Example</h1>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];

?>