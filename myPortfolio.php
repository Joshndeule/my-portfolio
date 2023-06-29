<?php
$server = "localhost";
$username = "root";
$dbpassword = "";
$dbName = "my_portfolio"; 


$conn = mysqli_connect($server, $username, $dbpassword, $dbName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connection Successful<br/>";
}

//check if all required fields are set
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $datetime = $_POST["datetime"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, surname, email, datetime, subject, message)
    VALUES ('$name', '$surname', '$email', '$datetime', '$subject', '$message')";

if(mysqli_query($conn, $sql)) {

    header("location: contact.php");
    exit();
}else{
    echo "Error: Message failed to send <br>";
}



$conn->close();
}
?>