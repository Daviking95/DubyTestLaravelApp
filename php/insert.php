<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duby";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['fname']);
$middle_name = mysqli_real_escape_string($conn, $_POST['mname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$lg = mysqli_real_escape_string($conn, $_POST['lg']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']);
$bio = mysqli_real_escape_string($conn, $_POST['bio']);

$sql = "INSERT INTO 'Biodata' ('firstname', 'middlename', 'lastname', 'phone', 'twitter', 'gender', 'state', 'lg', 'password', 'rpassword', 'bio')
VALUES ('$first_name', '$middle_name', '$last_name', '$phone', '$twitter', '$gender', '$state', '$lg', '$password', '$rpassword', '$bio')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
