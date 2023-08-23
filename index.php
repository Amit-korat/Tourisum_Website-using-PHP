<?php
// start the session
session_start();

// check if the session variable is not set
if (!isset($_SESSION['username'])) {
    // redirect to the login page
    header("Location: login.php");
    exit();
}

// Set session cookie duration to 30 minutes
$session_duration = 1800; // 30 minutes in seconds
session_set_cookie_params($session_duration);

// if the session variable is set, display a welcome message
// $username = $_SESSION['username'];
// echo "Welcome back, $username";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Gujarat Tourisum</title>

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


        /* 1st section start */
        .firstsection {
            height: 99vh;
            width: 100%;
        }

        .bg1 {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            left: 0;
            top: 0;
            scroll-behavior: smooth;
            background-image: url('./img/bg-img-1.jpg');
            position: absolute;
            z-index: -1;
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

        /* social media */
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

        /* social media */
        /* 1st section end */


        /* 2nd section start */
        .photo-glry {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 85%;
            height: 85%;
            transform: translate(-50%, 68%);
            box-sizing: border-box;
            box-shadow: 0 0px 100px 80px rgb(0 0 0 / 80%);
            border-radius: 20px;
            z-index: 1;
        }

        .photo {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            animation: animate 15s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes animate {

            0%,
            100% {
                background-image: url(./img/bg-img-2.jpg);
                min-height: 100vh;
            }

            25% {
                background-image: url(./img/bg-img-3.jpg);
                min-height: 100vh;
            }

            50% {
                background-image: url(./img/bg-img-4.jpg);
                min-height: 100vh;
            }

            75% {
                background-image: url(./img/bg-img-5.jpg);
                min-height: 100vh;
            }
        }

        /* 2nd section end */

        /* 360° section start */
        .s-o-unity {
            height: 100vh;
            width: 100%;
            background-color: #A8A7A7;
            display: flex;
            align-items: center;
            /* justify-content: ; */
        }

        .glrybox-sou {
            width: 400px;
            padding: 40px;
            background: rgb(0 0 0 / 65%);
            box-sizing: border-box;
            box-shadow: 0 10px 25px rgb(0 0 0 / 60%);
            border-radius: 10px;
            color: white;
        }

        /* 360° section end */

        /* 3rd section start */
        .secound-bg {
            background-image: url(./img/s2-bg.jpg);
            background-size: cover;
            background-position: center;
            scroll-behavior: smooth;
            height: 100vh;
            width: 100%;
            z-index: -1;
        }

        .card-img-top {
            border-radius: 5%;
        }

        .thum {
            display: flex;
            width: 75%;
            margin: auto;
            padding-top: 15%;
        }

        .card {
            padding: 13px;
            background: transparent;
            border: transparent;
            transition: transform .2s;
            z-index: 1;
        }

        .card:hover {
            transform: scale(1.5);
            z-index: 2;
        }

        .pn {
            margin-top: 0;
            margin-bottom: -1rem;
            margin-right: auto;
            margin-left: auto;
            color: black;
            font-family: monospace;
            font-size: 20px;
        }

        /* 3rd section end */

        /* section 4 start */
        .mygallery {
            height: 100vh;
            width: 100%;
            background: url("./img/th-11.jpg");
        }


        .card-1 {
            padding: 15px;
            background: white;
        }

        .glry-1 {
            padding-top: 29%;
            margin-left: 10%;
            height: 5%;
            width: 15%;
        }

        .glry-2 {
            margin-top: -17%;
            margin-left: 19%;
            height: 5%;
            width: 20%;
        }

        .glry-3 {
            margin-top: -12%;
            margin-left: 33%;
            height: 5%;
            width: 15%;
        }

        .glrybox {
            position: absolute;
            left: 61%;
            height: 490px;
            width: 400px;
            padding: 40px;
            background: rgb(0 0 0 / 65%);
            box-sizing: border-box;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            color: white;
            margin-top: 4%;
        }

        /* section 4 end */

        /* footer start */
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

        /* footer end */
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
                            <a class="nav-link active hvr" href="#home">Home</a>
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
                            <a class="nav-link active hvr" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dactive" style="color: white;">
                                <?php $username = $_SESSION['username'];
                                echo "Welcome, $username"; ?>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2 " type="text" id="q" placeholder="Search">
                        <button class="btn btn-outline-success hovbutton" type="button"
                            onclick="updateLink();ShowAndHide()">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <section id="searchSection" style="display: none; ">
            <iframe style="width: 100%; height: 100vh;" src="https://www.google.com/search?igu=1" id="searchq"
                onchange="updateLink()"></iframe>
        </section>

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

        <div class="bg1"></div>
    </section>
    <!-- 1st section end -->

    <section id="websiteSection" style="display: block;">

        <!-- 2nd section start -->
        <section class="photo">
            <div class="photo-glry">
            </div>
        </section>
        <!-- 2nd section end  -->

        <!-- 360° section start -->
        <section class="s-o-unity">
            <div class="firsthalf" style="width: 50%;">
                <iframe style="z-index: 1;height: 98vh; width: 100%;"
                    src="https://sketchfab.com/models/bd0590f71e214fc98312fab918e53ca7/embed?autostart=1"></iframe>
            </div>
            <div class="secoundhalf" style="width: 50%;display: flex; justify-content: center;">
                <div class="glrybox-sou">
                    <center>
                        <h2 style="font-family: cursive; margin-bottom: 20px;">Statue of Unity</h2>
                    </center>
                    <p>The Statue of Unity is the world's tallest statue, with a height of 182 metres (597 feet),
                        located near Kevadia in the state of Gujarat, India. It depicts Indian statesman and
                        independence activist Vallabhbhai Patel (1875-1950), who was the first deputy prime minister and
                        home minister of independent India and an adherent of Mahatma Gandhi. Patel is highly respected
                        for his leadership in uniting 562 princely states of India to form the single Union of India.
                        The statue is located in Gujarat on the Narmada River in the Kevadiya colony, facing the Sardar
                        Sarovar Dam 100 kilometres (62 mi) southeast of the city of Vadodara.</p>
                </div>
            </div>
        </section>
        <!-- 360° section end  -->

        <!-- 3rd section start  -->
        <section class="secound-bg">
            <div class="thum">
                <div class="card"><a href="https://www.gujarattourism.com/experiences.html?cid=7" target="_blank">
                        <img src="./img/th-1.jpg" class="card-img-top"></a>
                    <p class="pn">Flora - Fauna</p>
                </div>
                <div class="card"><a href="https://www.gujarattourism.com/experiences.html?cid=3" target="_blank">
                        <img src="./img/th-2.jpg" class="card-img-top"></a>
                    <p class="pn">Religious Sites</p>
                </div>
                <div class="card"><a href="https://www.gujarattourism.com/experiences.html?cid=4" target="_blank">
                        <img src="./img/th-3.jpg" class="card-img-top"></a>
                    <p class="pn">Bird Site</p>
                </div>
                <div class="card"><a href="https://www.gujarattourism.com/experiences.html?cid=9" target="_blank">
                        <img src="./img/th-4.jpg" class="card-img-top"></a>
                    <p class="pn">Beaches</p>
                </div>
                <div class="card"><a href="https://www.gujarattourism.com/experiences.html?cid=6" target="_blank">
                        <img src="./img/th-5.jpg" class="card-img-top"></a>
                    <p class="pn">Gandhi Circuit</p>
                </div>
            </div>
        </section>
        <!-- 3rd section end  -->

        <!-- 4th section start  -->
        <section class="mygallery">
            <div class="glry-1">
                <div class="card card-1"><a href="https://www.gujarattourism.com/experiences.html?cid=12" target="_blank">
                        <img src="./img/th-8.jpg" style="height: auto; width: 100%;"></a>
                </div>
            </div>
            <div class="glry-2">
                <div class="card card-1"><a href="https://www.gujarattourism.com/experiences.html?cid=2" target="_blank">
                        <img src="./img/th-9.jpg" style="height: auto; width: 100%;"></a>
                </div>
            </div>
            <div class="glry-3">
                <div class="card card-1"><a href="https://www.gujarattourism.com/fair-and-festival/rann-utsav.html" target="_blank">
                        <img src="./img/th-10.jpg" style="height: auto; width: 100%;"></a>
                </div>
            </div>

            <div class="glrybox">
                <center>
                    <h2 style="font-family: cursive; margin-bottom: 20px;">Gujarat Tourisum</h2>
                </center>
                <p>Gujarat offers scenic beauty from Great Rann of Kutch to the hills of Saputara. Gujarat is the one
                    and
                    only place to view pure Asiatic lions in the world. During the Sultanate reign, Hindu craftsmanship
                    mixed with Islamic architecture, giving rise to the Indo-Saracenic style. Many structures in the
                    state
                    are built in this fashion. It is also the birthplace of Shrimad Rajchandra, Mahatma Gandhi and
                    Sardar
                    Vallabhbhai Patel, iconic figures of India's independence movement. In recent years Statue Of Unity
                    has
                    emerged as the major tourist spot of Gujarat. It is the tallest statue in the world.</p>
            </div>
        </section>


        <!-- 4th section end  -->
    </section>

    <!-- footer start  -->
    <footer class="bg-dark text-center text-white">
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
    </footer>
    <footer class="bg-dark text-white text-center text-lg-start">
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

    <script>
        function updateLink() {
            value = document.getElementById('q').value;
            document.getElementById('searchq').src = "https://www.google.com/search?igu=1&q=" + value;
        }

        function ShowAndHide() {
            var x = document.getElementById('searchSection');
            var y = document.getElementById('websiteSection');
            if (x.style.display == 'none') {
                x.style.display = 'block';
                y.style.display = 'none';
            }
        }
    </script>

    <?php
    // <<<<------- users count -------->>>>
    
    $find_count = mysqli_query($conn, "SELECT * FROM visitor_counter");
    while ($row = mysqli_fetch_assoc($find_count)) {
        $current_count = $row['count'];
        $new_count = $current_count + 1;
        try {
            $sql = "UPDATE visitor_counter SET count = '$new_count' where id=1";
            $update_count = mysqli_query($conn, $sql);
            // echo $new_count;
        } catch (Exception $e) {
            // echo 'error;' . $e->getMessage();
        }
    }

    // Close database connection
    $conn->close();
    ?>

</body>

</html>