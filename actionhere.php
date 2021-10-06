<?php
require_once 'dbconnect.php';

// get the post records
$name = '';
$email = '';
$jobTitle = '';
$telephone = '';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['job_title'])) {
    $jobTitle = $_POST['job_title'];
}
if (isset($_POST['telephone'])) {
    $telephone = $_POST['telephone'];
}

if ($name != '' && $email != '') {
    $sql = "INSERT INTO `contact` (`name`, `email`, `job_title`, `telephone`) VALUES ('$name', '$email', '$jobTitle', '$telephone')";
}

if ($conn->query($sql) === true) {
    header("Location:display.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
