<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "practice";

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO login(email,password) VALUES('$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "inserted";
    } else {
        echo "not inserted";
    }

    $conn->close();
} 

?>