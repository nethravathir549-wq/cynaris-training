<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $course = trim($_POST["course"] ?? "");

    $errors = [];

    if ($name == "") {
        $errors[] = "Name is required.";
    }

    if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if ($course == "") {
        $errors[] = "Course is required.";
    }

    echo "<h1>Form Result</h1>";

    if (!empty($errors)) {

        echo "<h2>Please fix the following errors:</h2>";
        echo "<ul>";

        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</li>";
        }

        echo "</ul>";

    } else {

        echo "<h2>Submitted Information</h2>";

        echo "Name: " . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "<br>";
        echo "Email: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "<br>";
        echo "Course: " . htmlspecialchars($course, ENT_QUOTES, "UTF-8") . "<br>";
    }

} else {

    echo "Invalid request.";

}

?>