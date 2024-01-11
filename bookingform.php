<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST["from"];
    $to = $_POST["to"];
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

    // You can now process and validate the data as needed.

    // For demonstration purposes, let's just print the received data.
    echo "From: $from<br>";
    echo "To: $to<br>";
    echo "Departure Date: $departureDate<br>";
    echo "Departure Time: $departureTime<br>";
    echo "Preferred Airline: $preferredAirline<br>";
    echo "Preferred Seating: $preferredSeating<br>";
    echo "Adult: $adult<br>";
    echo "Children: $children<br>";
    echo "Infant: $infant<br>";
    echo "Fare Type: $fareType<br>";
    echo "Return Date: $returnDate<br>";
    echo "Return Time: $returnTime<br>";
    echo "Message: $message<br>";
    echo "Full Name: $fullName<br>";
    echo "Phone Number: $phoneNumber<br>";
    echo "Email: $email<br>";
}
?>
