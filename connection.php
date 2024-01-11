<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "airline";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $from = $_POST["from_location"];
    $to = $_POST["to_location"];
    $departureDate = $_POST["departure_date"];
    $departureTime = $_POST["departure_time"];
    $preferredAirline = $_POST["preferred_airline"];
    $preferredSeating = $_POST["preferred_seating"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $infant = $_POST["infant"];
    $fareType = $_POST["fare_type"];
    $returnDate = $_POST["return_date"];
    $returnTime = $_POST["return_time"];
    $message = $_POST["message"];
    $fullName = $_POST["full_name"];
    $phoneNumber = $_POST["phone_number"];
    $email = $_POST["email"];

    // Prepare an SQL query to insert data into a table
    $sql = "INSERT INTO booking (from_location, to_location, departure_date, departure_time, preferred_airline, preferred_seating, adult, children, infant, fare_type, return_date, return_time, message, full_name, phone_number, email) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


    if ($stmt->execute()) {
        header("Location:airline5.php");
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
