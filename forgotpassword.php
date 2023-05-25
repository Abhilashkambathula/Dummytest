


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #ffcc41;
        }

        /***** For Smartphones *******/
        .container-center {
            position: absolute;
            left: 50%;
            width: 85%;
            height: auto;
            background-color: transparent;
            -webkit-transition: all 0.1s;
            transition: all 0.1s;
            bottom: 50%;
            -webkit-transform: translateX(-50%) translateY(50%);
            transform: translateX(-50%) translateY(50%);
        }

        h2,
        img {
            text-align: center;
            color: white;
            font-weight: 10;
            text-shadow: 0px 1px rgba(0, 0, 0, 0.3);
        }

        h4 {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            color: red;
            font-size: 1.1em;
            font-style: normal;
            line-height: 130%;
            opacity: .6;
        }

        form {
            width: 100%;
            overflow: hidden;
            background-color: #FEFEFE;
            padding: 21px 13px;
            border-radius: 21px;
            -webkit-box-shadow: 0px 5px 34px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 34px rgba(0, 0, 0, 0.1);
        }

        formgroup {
            position: relative;
            width: 100%;
            display: block;
            margin: 1em 0;
            font-size: 1em;
        }

        formgroup input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #888888;
            padding: 8px 0;
            font-size: inherit !important;
            margin-bottom: 13px;
            outline: none;
            opacity: 0.7;
            font-weight: 600;
        }

        formgroup input:focus {
            opacity: 1;
            border-bottom: 2px solid #F71442;
            color: #F71442;
        }

        formgroup label {
            position: absolute;
            font-size: 0.8em;
            top: -1em;
            left: 0;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            opacity: 0.7;
            color: #888888;
            text-transform: uppercase;
        }

        formgroup span {
            position: absolute;
            top: -1em;
            left: -500px;
            opacity: 0;
            color: #333333;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8em;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        formgroup input:focus+label {
            left: 500px;
            opacity: 0;
        }

        formgroup input:focus~span {
            left: 0;
            opacity: 1;
        }

        .forgot {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 1em;
            font-weight: bold;
            margin-top: 21px;
            opacity: 0.8;
        }

        #login-btn {
            border: none;
            color: #FEFEFE;
            padding: 0.8em 0;
            font-size: 1em;
            font-weight: 300;
            width: 100%;
            border-radius: 55px;
            -webkit-box-shadow: 0px 3px 21px rgba(255, 100, 0, 0.7);
            box-shadow: 0px 3px 21px rgba(255, 100, 0, 0.7);
            background: webkit-gradient(linear, left top, right top, from(#F98340), to(#F71442));
            background: linear-gradient(to right, #F98340, #F71442);
            background-size: 100%;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .social {
            margin-top: 1.8em;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .social button {
            width: 50%;
            margin: 0 8px;
            padding: 10px 0;
            font-size: 0.9em;
            border: none;
            border-radius: 34px;
            -webkit-box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.2);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .social #facebook {
            background: #1F4788;
            background: webkit-gradient(linear, left top, right top, from(#4B77BE), to(#1F4788));
            background: linear-gradient(to right, #4B77BE, #1F4788);
            background-size: 100%;
        }

        .social #google {
            background: #FEFEFE;
            background: webkit-gradient(linear, left top, right top, from(#FEFEFE), to(#f1f1f1));
            background: linear-gradient(to right, #FEFEFE, #f1f1f1);
            background-size: 100%;
            color: #F71442;
        }

        p {
            color: white;
            text-align: center;
        }

        p a {
            color: inherit;
            text-decoration: none;
            font-weight: bold;
        }

        /***** For Tablets *******/
        @media screen and (min-width: 480px) {
            .container-center {
                width: 70%;
            }

            #login-btn {
                padding: 0.8em 0;
                font-size: 1.2em;
            }
        }

        /***** For Desktop Monitors *******/
        @media screen and (min-width: 768px) {
            .container-center {
                width: 500px;
            }
        }
    </style>
</head>

<body>

        <div class="container-center">
            <center>
                <img src="./icon2.png" width="40%" style="border-radius: 10px;">
            </center>
            <h2>Don't Worry!</h2>
            <form action="">
                <h4>
                    Just provide your Email<br>
                    and we can do the rest
                </h4>
                <formgroup>
                    <input type="mail" name="email" />
                    <label for="email"><br>Email</label>
                    <span>enter your Email</span>
                </formgroup>
                <button name="send" id="login-btn">Send OTP</button>
            </form>

            <p>Did you remember? <a href="registration.php">Sign In</a></p>
        </div>
</body>

</html>

<?php
session_start();
$otp = $_SESSION["OTP"];
if (isset($_SESSION["logged-in"])) {
    header("Location:registration.php");
}
$username = "sign up";
$login_btn = "Login";
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $login_btn = "Logout";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect(
        'localhost',
        'root',
        'Tquanta@123',
        'foodapp'
    );

    // if (!$con)
    //     echo ("failed to connect to database");
    // $username1 = $_POST['username'];
    // $prefix = "_";
    // $username = $prefix . $username1;
    // $password = $_POST['Password'];
    // $repassword = $_POST['RePassword'];
    // $email1 = $_POST['Email'];
    // $email = strval($email1);
    // if ($password != $repassword) {
    //     echo ("<script>alert('password not matches')</script>");
    // } else {
    //     if (strlen($password) < 8) {
    //         echo ("<script>alert('password length must be atleast 8')</script>");
    //     } else {
    //         $query = "insert into 1_user(username,email,password)
	// 					values('$username','$email','$password')";

            $sql = "SELECT email,password FROM registartion";
            $result = $con->query($sql);
            $email_already_exist = false;
            $password_already_exist = false;

            // Checking if user already exist
            if (($result->num_rows) > 0) {
                while ($row = $result->fetch_assoc()) {

                    // echo "<br> id: " . $row["id"] .
                    " - email= " . $row["email"] .
                        " password= " . $row["password"] . "<br>";

                    if ($row["email"] == $username) {
                        $username_already_exist = true;
                        break;
                    }
                    if ($row["password"] == $email) {
                        $email_already_exist = true;
                        break;
                    }
                }
            }

            // echo($ok);
            if ($username_already_exist == false) {

                // This is my hosting mail
                $from = "support@libraryatcoer.tk";
                $to = $email;
                $subject = "verify-account-otp";

                // Generating otp with php rand variable
                $otp = rand(100000, 999999);
                $message = strval($otp);
                $headers = "From:" . $from;
                if (mail($to, $subject, $message, $headers)) {
                    $_SESSION["username"] = $username;
                    $_SESSION["OTP"] = $otp;
                    $_SESSION["Email"] = $email;
                    $_SESSION["Password"] = $password;
                    $_SESSION["registration-going-on"] = "1";
                    header("Location:verify-otp.php");
                } else
                    echo ("mail send faild");
            } else {
                echo ("<script>alert('username already taken')</script>");
            }
        }
    // }
// }
?>