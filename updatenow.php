<?php

require_once "dbconnect.php";

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$jobTitle = $_POST['job_title'];
$telephone = $_POST['telephone'];

$query = "UPDATE contact SET name='" . $name . "',email='" . $email . "',job_title='" . $jobTitle . "',telephone='" . $telephone . "' WHERE id='" . $id . "'";
$select = mysqli_query($conn, $query);

if ($select) {
    header("Location:display.php");
} else {
    echo 'Kindly check your query';
}
