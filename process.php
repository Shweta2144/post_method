<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    // Display the collected data
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age;
} else {
    echo "Form data not submitted using POST method.";
}
?>
