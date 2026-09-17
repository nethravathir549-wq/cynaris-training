<?php

$name = "Nethravathi";
$age = 21;
$course = "BCA";

echo "<h1>PHP Fundamentals</h1>";

echo "<h2>Variables</h2>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Course: " . $course . "<br>";

$subjects = ["Web Technology", "Software Engineering", "Data Mining", "Data Analytics"];

echo "<h2>Array</h2>";

foreach ($subjects as $subject) {
    echo $subject . "<br>";
}

echo "<h2>Conditional</h2>";

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "<h2>For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "<br>";
}
echo "<h2>Function</h2>";

function greet($name) {
    return "Hello, " . $name . "!";
}

echo greet($name);

?>