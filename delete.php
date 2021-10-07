<?php

require_once 'dbconnect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = "DELETE FROM contact WHERE id='" . $id . "'";

$select = mysqli_query($conn, $query);

if ($select) {
    echo "<script>
    alert('Deleted successfully');
    window.location.href='display.php';
    </script>";
    // header("Location:display.php");
} else {
    echo 'Kindly check your query';
}
