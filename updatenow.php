<?php

require_once "dbconnect.php";

$name = '';
$email = '';
$jobTitle = '';
$telephone = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

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
    $query = "UPDATE contact SET name='" . $name . "',email='" . $email . "',job_title='" . $jobTitle . "',telephone='" . $telephone . "' WHERE id='" . $id . "'";
}

if($name == ''){
    echo "<script>
    alert('Do not Leave Name empty Try Again');
    window.location.href='display.php';
    </script>";
}
if($email == ''){
    echo "<script>
    alert('Do not Leave an empty email field Try Again');
    window.location.href='display.php';
    </script>";
}

$select = mysqli_query($conn, $query);

if ($select) {
    echo "<script>
    alert('Updated successfully');
    window.location.href='display.php';
    </script>";
} else {
    echo 'Kindly check your query';
}
