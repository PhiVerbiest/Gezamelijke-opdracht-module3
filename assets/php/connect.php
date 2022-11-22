<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$fullName = $_POST['fullName'];
$email = $_POST['email'];
$telephoneNumber = $_POST['telephoneNumber'];
$adres = $_POST['adres'];
$questions = $_POST['questions'];

//create database
$conn = new mysqli('localhost','root','','Hovenier DB');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into form(fullName, email, telephoneNumber, adres, questions) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $fullName, $email, $telephoneNumber, $adres, $questions);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>
