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
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the data (you might want to add more validation)
    $sql="SELECT * FROM signup WHERE email='$email' ";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0){
        $_SESSION['email_alert']='1';
        header("Location: signup.php");
    }
    else {
        // Perform the registration
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database (replace with your actual table and column names)
        $sql = "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            header("Location: airline5.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
} 
// Close the database connection
$conn->close();
?>
