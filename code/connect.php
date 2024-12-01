<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "yeta1234"; // Default password for XAMPP
$database = "assignments_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle the signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nrc = $_POST['nrc'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $address = $_POST['address'];
    $area = $_POST['area'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $bankName = $_POST['bankName'];
    $accountNumber = $_POST['accountNumber'];
    $branch = $_POST['branch'];
    $swiftCode = $_POST['swiftCode'];

    // Insert the data into the UserInformation table
    $sql = "INSERT INTO UserInformation (first_name, last_name, nrc, date_of_birth, phone_number, email, password, physical_address, area, street, town, province, country, bank_name, account_number, branch, swift_code)
            VALUES ('$firstName', '$lastName', '$nrc', '$dob', '$phone', '$email', '$password', '$address', '$area', '$street', '$town', '$province', '$country', '$bankName', '$accountNumber', '$branch', '$swiftCode')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>\
