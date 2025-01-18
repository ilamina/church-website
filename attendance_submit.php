<?php
// Connect to the database
$pdo = new PDO("mysql:host=localhost; dbname=rccg_db", "rccg", "Ben123!");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phoneNumber = $_POST["phone_num"];
    $date = $_POST["date"];
    $service = $_POST["service"];

    // Insert data into the database
    $stmt = $pdo->prepare("INSERT INTO attendance (firstname, lastname, phone_num, date, service) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $phoneNumber, $date, $service]);
}
?>