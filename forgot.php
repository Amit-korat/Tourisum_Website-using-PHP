<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- fevicon logo-->
    <link rel="icon" href="./img/logo.png">

    <!-- bootstrap ni css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



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
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

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

        .login-box .user-box select {
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

        .login-box #submit span {
            position: absolute;
            display: block;
        }

        .fp1 span {
            color: white;
        }

        .fp1 a {
            color: #03e9f4;
        }

        .fp1 a:hover {
            color: white;
        }

        /* .er {
            color: #03e9f4;
        } */
    </style>
</head>

<body>
    <div id="bg">
        <div class="login-box">
            <h2>Forgot Password</h2>
            <form method="post">
                <div class="user-box">
                    <input type="email" name="username" required />
                    <label>Username/Email ID</label>
                </div>
                <div class="user-box">
                    <select name="question" required>
                        <option disabled selected>Select Questions For Security Perpose</option>
                        <option>What is your fevorite color?</option>
                        <option>In what city were you born?</option>
                        <option>What is your mother's maiden name?</option>
                        <option>What is your fevorite car?</option>
                        <option>What was your childhood nickname?</option>
                        <option>What is your fevorite person?</option>
                        <option>What is your favorite sport?</option>
                    </select>
                </div>
                <div class="user-box">
                    <input type="text" name="answer" required />
                    <label>Answer</label>
                </div>
                <div class="user-box">
                    <input type="password" name="newpass" required />
                    <label>New Password</label>
                </div>
                <div class="user-box">
                    <input type="text" name="conpass" required />
                    <label>Confirm Password</label>
                </div>
                <div class="fp1">
                    <span>Back to</span><a href="login.php"> Log in</a>
                </div>
                <a style="display: flex; justify-content: center;">
                    <button id="submit" type="submit">Change Password</button>
                </a>
            </form>

            <!-- Database connection -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                include 'database/dbconnect.php';

                $username = $_POST["username"];
                $question = $_POST["question"];
                $answer = $_POST["answer"];
                $newpass = $_POST["newpass"];
                $conpass = $_POST["conpass"];

                $sql = "SELECT * FROM MyGuests WHERE username = '$username' AND question = '$question' AND answer = '$answer'";

                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if ($num == 1) {
                    if ($newpass == $conpass) {

                        $sql = "UPDATE `MyGuests` SET `cpassword` = '$newpass' WHERE `username` = '$username';";
                        $result = mysqli_query($conn, $sql);

                        echo "<script>";
                        echo "location.replace('login.php')";
                        echo "</script>";
                    } else {
                        echo "<script>alert('New password and confirm password do not match.')</script>";
                    }

                } else {
                    echo "<script>alert('Answer of the question is not correct.')</script>";
                }
            }
            // Close database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>