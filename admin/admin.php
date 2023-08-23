<?php
// start the session
session_start();

// check if the session variable is not set
if (!isset($_SESSION['username'])) {
    // redirect to the login page
    echo "<script>";
    echo "window.location.replace('../login.php')";
    echo "</script>";
    // header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- fevicon logo-->
    <link rel="icon" href="../img/logo.png">

    <!-- bootstrap ni css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }


        /* 1st section start */
        .firstsection {
            height: auto;
            width: 100%;
        }

        .bg-nev {
            display: flex;
            align-items: flex-end;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 8px;
            box-shadow: 0 5px 20px rgb(0 0 0 / 60%);
            border-radius: 10px;
            margin: 7px 30px 7px 30px;
            width: auto;
            z-index: 3;
        }

        .hvr {
            color: white !important;
            text-decoration: none !important;
        }

        .hvr,
        .hvr:after,
        .hvr:before {
            transition: all .5s !important;
        }

        .hvr:hover {
            color: #03e9f4 !important;
        }

        .hvr {
            position: relative !important;
        }

        .hvr:after {
            position: absolute !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            margin: auto !important;
            width: 0% !important;
            content: '.' !important;
            color: transparent !important;
            background: #03e9f4 !important;
            height: 2px !important;
        }

        .hvr:hover:after {
            width: 100% !important;
        }

        /* social media  */
        .s-box {
            position: fixed;
            top: 50%;
            left: 97.7%;
            height: auto;
            width: auto;
            padding: 5px;
            cursor: pointer;
            transform: translate(-50%, -50%);
            background: rgb(0 0 0 / 65%);
            box-sizing: border-box;
            box-shadow: 0 10px 25px rgb(0 0 0 / 60%);
            border-radius: 15px;
            z-index: 3;

        }

        /* social media  */

        .table>:not(caption)>*>* {
            padding: 10px;
        }

        /* 1st section end */
    </style>
</head>

<body>

    <!-- 1st section start -->
    <section id="home" class="firstsection">
        <!-- nevbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-nev">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php" style="color: white; font-family: cursive; ">
                    <img src="../img/logo.png" alt="logo" width="36" height="29" class="d-inline-block align-text-top">
                    Gujarat Tourisum
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="../gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="../booking.php">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./contactus.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="../login.php">Logout</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="nav-link dactive" style="color: white;">
                            <?php $username = $_SESSION['username'];
                            echo "Welcome back, $username"; ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- social media start -->
        <div class="s-box">
            <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                    class="fab fa-twitter" style="font-size:19px"></i></a>

            <!-- Google -->
            <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                    class="fab fa-google" style="font-size:19px"></i></a>

            <!-- Instagram -->
            <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                    class="fab fa-instagram" style="font-size:19px"></i></a>

            <!-- Linkedin -->
            <a class="btn text-white btn-floating m-1" style="background-color: rgb(99 212 54);" href="#!"
                role="button"><i class="fab fa-whatsapp" style="font-size:19px"></i></a>
            <!-- Github -->
            <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                    class="fab fa-youtube" style="font-size:19px"></i></a>
        </div>
        <!-- social media end -->

        <div class="container-fluid">
            <h3 class="text-primary mb-4 fw-bold">Users</h3>
            <div class="card shadow" style="width: 96%;">
                <div class="card-header py-3"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="text-primary m-0 fw-bold">Users Info</span>
                    <?php
                    include '../database/dbconnect.php';
                    $sql = "SELECT * FROM `visitor_counter` WHERE id = 1;";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $v_count = $row["count"];
                    }
                    ?>
                    <span class="text-primary m-0 fw-bold">Visiters Count :
                        <?php echo "$v_count"; ?>
                    </span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                <label class="form-label">Show&nbsp;<select
                                        class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                                    class="form-label"><input type="search" class="form-control form-control-sm"
                                        aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid"
                        aria-describedby="dataTable_info">
                        <?php
                        // Step 1: Establish a connection to the database
                        include '../database/dbconnect.php';

                        // Step 2: Execute a SELECT query on the database table
                        $sql = "SELECT * FROM MyGuests";
                        $result = mysqli_query($conn, $sql);

                        // Step 3: Store the retrieved data in an array or object
                        $data = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $data[] = $row;
                        }

                        // Step 4: Loop through the array or object and display the data in an HTML table format
                        echo "<table class='table' id='dataTable'>";
                        echo "<thead>";
                        echo "<tr><th>Id</th><th style='min-width: 100px;'>FirstName</th><th style='min-width: 100px;'>LastName</th><th style='min-width: 100px;'>Birthdate</th><th style='min-width: 100px;'>Phone Number</th><th style='min-width: 100px;'>UserName</th><th style='min-width: 100px;'>Password</th><th style='min-width: 100px;'>Question</th><th style='min-width: 100px;'>Answer</th><th style='min-width: 50px;'>Action</th></tr>";
                        foreach ($data as $row) {
                            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['birthdate'] . "</td><td>" . $row['phonenumber'] . "</td><td>" . $row['username'] . "</td><td>" . $row['cpassword'] . "</td><td>" . $row['question'] . "</td><td>" . $row['answer'] . "</td><td><button type='button' class='btn btn-danger' onclick='deleteRow(" . $row['id'] . ")'>Delete</button></td></tr>";
                        }
                        echo "</thead>";
                        echo "</table>";


                        // Get row ID from query string
                        $row_id = $_GET["row_id"];

                        // Delete row from database
                        $sql = "DELETE FROM MyGuests WHERE id = '$row_id'";
                        if (mysqli_query($conn, $sql)) {
                            echo "";
                        } else {
                            echo "Error deleting row: " . mysqli_error($conn);
                        }


                        // Step 5: Close the database connection
                        mysqli_close($conn);
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 27</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" aria-label="Previous"
                                            href="#"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span
                                                aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- 1st section end -->


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    <script>
        function deleteRow(rowId) {
            if (confirm("Are you sure you want to delete this row?")) {
                // Send AJAX request to server to delete row
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status == 200) {
                            // Row deleted successfully, do something if needed
                            alert(xhr.responseText);
                        } else {
                            // An error occurred while deleting the row
                            alert("Error deleting row");
                        }
                    }
                };
                xhr.open("GET", "admin.php?row_id=" + rowId, true);
                xhr.send();
                window.location.reload();
            }
        }
    </script>

</body>

</html>