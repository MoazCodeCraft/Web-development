<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "airline";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the data (you might want to add more validation)
    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {
        // Check login credentials
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User found, check password
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                echo "Login successful!";
                // Redirect or perform other actions after successful login
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }

        $stmt->close();
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: airline5.php");
    exit();
}

// Close the database connection
$conn->close();
?>
