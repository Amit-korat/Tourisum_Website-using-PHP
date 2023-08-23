<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- fevicon logo-->
    <link rel="icon" href="./img/logo.png">


    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        #bg {
            background-image: url("./img/1.jpg");
            background-position: center;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            /* top: 0; */
            /* left: 0; */
            padding: 10px 0;
            /* font-size: 16px; */
            /* color: #fff; */
            pointer-events: none;
            transition: 0.5s;

            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        /* .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        } */

        .login-box form #submit {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            margin-top: 30px;
            letter-spacing: 4px;
            background: transparent;
            border: transparent;
        }

        .login-box #submit:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
                0 0 100px #03e9f4;
        }

        .login-box #submit span {
            position: absolute;
            display: block;
        }

        .fp2 {
            padding-top: 10px;
        }

        .fp1 a {
            color: #03e9f4;
            text-decoration: none;
        }

        .fp1 a:hover {
            color: white;
        }

        .fp2 span {
            color: white;
        }

        .fp2 a {
            color: #03e9f4;
        }

        .fp2 a:hover {
            color: white;
        }

        .er {
            color: #03e9f4;
        }
    </style>
</head>

<body>
    <div id="bg">
        <div class="login-box">
            <h2>Log in</h2>
            <?php
            if (isset($error)) {
                echo $error;
            }
            ?>
            <form method="post">
                <div class="user-box">
                    <input type="text" name="username" required value="<?php echo $_COOKIE["username"] ?>" />
                    <label>Username/Email ID</label>
                </div>
                <div class="user-box">
                    <input type="password" name="cpassword" required value="<?php echo $_COOKIE["password"] ?>" />
                    <label>Password</label>
                </div>
                <div class="fp1">
                    <a href="forgot.php">Forgot Password?</a>
                </div>
                <div class="fp2">
                    <span>Don't have an account?</span><a href="signup.php"> Sign up</a>
                </div>
                <div class="fp2">
                    <input type="checkbox" name="checkbox" /><span> Remember me</span>
                </div>

                <a style="display: flex; justify-content: center;">
                    <button id="submit" type="submit" name="submit">submit</button>
                </a>

                <!-- Database connection -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    include './database/dbconnect.php';

                    $username = $_POST["username"];
                    $password = $_POST["cpassword"];

                    if ($username == "admin" && $password == "admin") {

                        // set the session variable
                        $_SESSION['username'] = $username;
                        echo "<script>";
                        echo "window.location.replace('./admin/admin.php')";
                        echo "</script>";
                    } else {

                        $sql = "SELECT * FROM `MyGuests` WHERE username = '$username' AND cpassword = '$password';";

                        $result = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num == 1) {

                            if (isset($_POST['checkbox'])) {

                                setcookie("username", $username, time() + (3600), "/");
                                setcookie("password", $password, time() + (3600), "/");

                                // set the session variable
                                $_SESSION['username'] = $username;
                                echo "<script>";
                                echo "window.location.replace('index.php')";
                                echo "</script>";
                                // header("Location: index.php");
                
                            } else {
                                setcookie("username", "");
                                setcookie("password", "");

                                // set the session variable
                                $_SESSION['username'] = $username;
                                echo "<script>";
                                echo "window.location.replace('index.php')";
                                echo "</script>";
                                // header("Location: index.php");
                            }

                        } else {
                            echo "<p class='er'> Incorrect Details.</p>";
                            echo "<script>";
                            echo "window.location.replace('signup.php')";
                            echo "</script>";
                            // header("Location: signup.php");
                        }
                    }
                }
                // Close database connection
                $conn->close();
                ?>
            </form>
        </div>
    </div>
</body>

</html>