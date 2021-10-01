<?php

require_once 'dbconnect.php';

$id = $_GET['id'];

$query = "DELETE FROM contact WHERE id='" . $id . "'";
$select = mysqli_query($conn, $query);

if ($select) {
    header("Location:display.php");
} else {
    echo 'Kindly check your query';
}

