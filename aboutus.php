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
    <title>About Us</title>

    <!-- fevicon logo-->
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

        /* 1st section start  */
        .bg1 {
            height: 50vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            left: 0;
            top: 0;
            scroll-behavior: smooth;
            background-image: url('./img/about.jpeg');
            position: absolute;
            z-index: -1;
        }

        .font-1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'FontAwesome';
            font-size: 69px;
            padding-top: 10%;
            padding-left: 28%;
            padding-right: 28%;
        }

        /* 1st section end */

        /* 2nd section start */

        .phota {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-color: thistle;
            margin-top: 19.9rem;
            display: flex;
            align-items: center;
        }

        .s-o-unity {
            height: 100vh;
            width: 100%;
            background-color: #A8A7A7;
            display: flex;
            align-items: center;
            /* justify-content: ; */
        }

        .glrybox-sou {
            width: 460px;
            padding: 40px;
            background: rgb(0 0 0 / 65%);
            box-sizing: border-box;
            box-shadow: 0 10px 25px rgb(0 0 0 / 60%);
            border-radius: 10px;
            color: white;
        }

        /* 2nd section end */



        /* footer start  */
        .col-auto button {
            color: white;
            background: transparent;
        }

        .col-auto button:hover {
            color: black;
            background: white;
        }

        .text {
            color: white;
        }

        .text:hover {
            color: #03e9f4;
        }

        /* footer end  */
    </style>
</head>

<body>
    <!-- 1st section start -->
    <section>
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
                            <a class="nav-link active hvr" href="login.php">Logout</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="nav-link dactive" style="color: #03e9f4;">
                            <?php $username = $_SESSION['username'];
                            echo "Welcome to about us, $username"; ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="bg1" id="home">
        <p class="font-1">About Us</p>
    </section>
    <!-- 1st section end -->

    <!-- 2nd section start -->
    <section class="phota">
        <div class="firsthalf" style="width: 50%;">
            <img class="img-fluid" src="./img/cm.jpg" style="width: 75%; height: auto; display: flex; margin: auto;">
        </div>
        <div class="secoundhalf" style="width: 50%;display: flex; justify-content: center;">
            <div class="glrybox-sou">
                <center>
                    <h2 style="font-family: cursive; margin-bottom: 20px;">Shri Bhupendrabhai Patel</h2>
                    <h4 style="font-family: cursive; margin-bottom: 20px;">Hon'ble Chief Minister</h4>
                </center>
                <p>Gujarat has been a tourist friendly State since ages. Being the ideal host
                    is in the genes, Gujarat is moving ahead in the Tourism Sector with its scenic forest
                    beauty, picturesque mountains, vast beaches and famous pilgrimages. Government
                    of Gujarat is committed to entertain and provide with excellent facilities and hospitality
                    to welcome the Travelers from all over the country and across the world. Hon'ble Prime
                    Minister Shree Narendrabhai Modi has envisaged to
                    establish Gujarat as an attractive tourist spot with a view to develop its heritage and
                    tourist spots. Gujarat is having the only natural habitat and an empire of Asiatic Lions. It
                    has various kinds of ecosystem, ranging from marine
                    biodiversity, inland wetlands, saline deserts to tropical deciduous forest.</p>
            </div>
        </div>
    </section>
    <!-- 2nd section start -->
    <!-- footer start  -->
    <footer class="bg-dark text-center text-white text-lg-start">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example29" class="form-control" />
                                <label class="form-label" for="form5Example29">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About Crafted</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Newsletter</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#home" class="text">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="text">Services</a>
                        </li>
                        <li>
                            <a href="#project" class="text">Project</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Navigation Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#team" class="text">Team Members</a>
                        </li>
                        <li>
                            <a href="#blog" class="text"> Blog</a>
                        </li>
                        <li>
                            <a href="#contact" class="text">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#home">gujarattourisum.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- footer end  -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>