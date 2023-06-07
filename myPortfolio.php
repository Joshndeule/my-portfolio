<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_portfolio"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS my_portfolio";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
    $conn->close();
    exit;
}


$conn->select_db('my_portfolio');


$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["Id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $datetime = $_POST["datetime"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $querry = "INSERT INTO Contacts (name, surname, email, datetime, subject, message)
    VALUES ('$name', '$surname', '$email', '$datetime, '$subject', '$message')";

if($connection->query($sql)===true){
    echo "message sent successfully.";

    header("location: contact.php");
    exit;
} else {
    echo "Error: ". $sql . "<br>" .$connection->error;
}
}
$conn->close();
?>