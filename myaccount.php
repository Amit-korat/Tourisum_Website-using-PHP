<?php
// start the session
session_start();

// check if the session variable is not set
if (!isset($_SESSION['username'])) {
    // redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Gujarat Tourisum</title>

    <!-- fevicon logo -->
    <link rel="icon" href="./img/logo.png">

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

        .hovbutton:hover {
            color: #ffffff;
            background: #139c49;
            border-color: #139c49;
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
        /* 1st section end */

        /* Account section start */
        body {
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        /* Account section end */
    </style>
</head>

<body>

    <!-- 1st section start -->
    <section id="home" class="firstsection">
        <!-- nevbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-nev">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home" style="color: white; font-family: cursive; ">
                    <img src="./img/logo.png" alt="logo" width="36" height="29" class="d-inline-block align-text-top">
                    Gujarat Tourisum
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./booking.php">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./contactus.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./myaccount.php">My Account</a>
                        </li>
                        <?php $username = $_SESSION['username']; ?>
                        <li class="nav-item" id="admin-button" style="display:none;">
                            <a class="nav-link active hvr" href="admin/admin.php">Admin-Panel</a>
                        </li>
                        <script>
                            var userRole = "<?php echo $username; ?>";
                            if (userRole === "admin") { document.getElementById("admin-button").style.display = "block"; }
                        </script>
                        <li class="nav-item">
                            <a class="nav-link active hvr" href="./login.php">Logout</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="nav-link dactive" style="color: #03e9f4;">
                            <?php $username = $_SESSION['username'];
                            echo "Welcome, $username"; ?>
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

        <!-- Account section start -->
        <div class="container-xl px-4 mt-4">
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0"><b>My Account</b></a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header"><b>Profile Picture</b></div>
                        <div class="card-body text-center">
                            <?php
                            // Connect to the database
                            $db = new mysqli('localhost', 'root', '', 'myDB');

                            $username = $_SESSION['username'];

                            // Fetch the image data from the database
                            $query = "SELECT image_data FROM images WHERE username = '$username'";
                            $result = $db->query($query);
                            $imageData = $result->fetch_assoc()['image_data'];

                            // Display the image
                            echo '<img class="img-account-profile rounded-circle" src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Profile Image">';
                            ?>

                            <form action="myaccount.php" method="get" enctype="multipart/form-data">
                                <div class="small font-italic text-muted mb-4">
                                    <input type="file" name="image" accept="image/*" required>
                                </div>
                                <button class="btn btn-primary" type="submit" name="done">Upload image</button>
                            </form>
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        </div>
                        <?php
                        // Connect to the database
                        // $db = new mysqli('localhost', 'root', '', 'myDB');
                        include "database/dbconnect.php";

                        // Check if the form was submitted
                        if (isset($_GET['done'])) {
                            // Get the image data
                            $username = $_SESSION['username'];
                            $image = $_FILES['image']['tmp_name'];

                            // Read the image data into a variable
                            $imgData = addslashes(file_get_contents($image));

                            // Insert the image data into the database
                            $query = "INSERT INTO images (username, image_data) VALUES ('$username','$imgData')";
                            $result = $db->query($query);

                            // Check if the image was successfully uploaded
                            if ($result) {
                                echo "<script>alert('Image uploaded successfully.')</script>";
                            } else {
                                echo "<script>alert('Error uploading image.')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <b>Account Details</b><br>
                        </div>
                        <div class="card-body">
                            <?php
                            $username = $_SESSION['username'];
                            $sql = "SELECT * FROM `MyGuests` WHERE username = '$username';";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $f_name = $row["firstname"];
                                $l_name = $row["lastname"];
                                $p_number = $row["phonenumber"];
                                $b_date = $row["birthdate"];
                            }
                            ?>
                            <form method="post">
                                <div class="mb-3">
                                    <label class="small mb-1">Username/Email ID</label>
                                    <input class="form-control" disabled name="username" type="text" placeholder="<?php $username = $_SESSION['username'];
                                    echo "$username"; ?>">
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1">First name</label>
                                        <input class="form-control" name="firstname" type="text"
                                            placeholder="<?php echo "$f_name"; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1">Last name</label>
                                        <input class="form-control" name="lastname" type="text"
                                            placeholder="<?php echo "$l_name"; ?>" required>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1">Phone number</label>
                                        <input class="form-control" type="tel" name="phonenumber" maxlength="10"
                                            placeholder="<?php echo "$p_number"; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1">Birthdate</label>
                                        <input class="form-control" name="birthdate" onfocus="(this.type = 'date')"
                                            onblur="(this.type='text')" placeholder="<?php echo "$b_date"; ?>" required>
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" id="submit" value="Save changes">
                            </form>
                        </div>

                        <div class="card-header"><b>Password</b><br>
                            <button class="btn btn-primary" type="submit" id="submit" onclick="redirect()">I want to
                                Change Password</button>
                            <script>
                                function redirect() {
                                    location.replace('changepass.php')
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($_POST) {
            include 'database/dbconnect.php';

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phonenumber = $_POST["phonenumber"];
            $birthdate = $_POST["birthdate"];
            $username = $_SESSION['username'];

            $sql = "UPDATE `MyGuests` SET `firstname` = '$firstname', `lastname` = '$lastname', `phonenumber` = '$phonenumber', `birthdate` = '$birthdate' WHERE `username` = '$username';";
            $result = mysqli_query($conn, $sql);

            if ($result === false) {
                echo "Error updating record: " . mysqli_error($conn);
            } else {
                echo "<script>alert('Your record has been updated.')</script>";
            }
        }
        ?>

        <!-- Account section end -->

    </section>
    <!-- 1st section end -->


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>