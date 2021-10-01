<?php
require_once 'dbconnect.php';

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$job_title = $_POST['job_title'];
$telephone = $_POST['telephone'];

$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `job_title`, `telephone`)
VALUES ('0', '$name', '$email', '$job_title', '$telephone')";




if ($conn->query($sql) === true) {
    header("Location:display.php");
    // header used to refresch the page.

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
