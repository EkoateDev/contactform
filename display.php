<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact List</title>
</head>

<body>

    <div class="container justify-content-md-center">
        <h1>Display user list using HTML and PHP</h1>

        <form class="row gy-2 gx-3 align-items-center" action="actionhere.php" method="POST">
            <div class="col-md-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
            </div>

            <div class="col-md-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email Address" required>
            </div>

            <div class="col-md-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter your Job title" required>
            </div>

            <div class="col-md-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Enter your Number" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-outline-primary">Insert Row</button>
            </div>
        </form>
    </div><br>

    <div class="container">
        <table id="cus_table" class="table table-striped table table-bordered">
            <thead class="">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job_Title</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php

                include "dbconnect.php"; // Using database connection file here

                $select = mysqli_query($conn, "select * from contact"); // fetch data from database

                while ($row = mysqli_fetch_assoc($select)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $jobTitle = $row['job_title'];
                    $telephone = $row['telephone'];

                ?>

                    <tr id="row>">
                        <td class="table-outline-secondary" id=""><?php echo $row['id']; ?></td>
                        <td class="table-outline-secondary" id="name"><?php echo $row['name']; ?></td>
                        <td class="table-outline-secondary" id="email"><?php echo $row['email']; ?></td>
                        <td class="table-outline-secondary" id="job-title"><?php echo $row['job_title']; ?></td>
                        <td class="table-outline-secondary" id="telephone"><?php echo $row['telephone']; ?></td>
                        <td class="">
                            <a class="btn btn-outline-success  col-12" href="edit.php?id=<?php echo $id ?>" role="button">Edit </a>
                        </td>
                        <td class="">
                            <a class="btn btn-outline-danger col-12" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

        <?php $conn->close(); // Close connection 
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="modifyrecords.js"></script>


</body>

</html>