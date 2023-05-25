<?php

if (isset($_POST['button'])) {

    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $conn = new mysqli('localhost', 'root', 'Tquanta@123', 'foodapp');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    }

    $query = "INSERT INTO `registration`(`Name`, `email`, `password`, `confim_password`) VALUES ('$name','$phonenumber','$password','$confirm_password')";

    if ($conn->query($query)) {
        echo "Successful";
    }
    // else if(`email` == $phonenumber){
    //     echo "Already Registared";
    // }
    else {
        echo "Already Registared. Please sign in!!";
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #ffcc41;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            margin-top: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }



        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }



        @media screen and (min-width: 375px) {

            .overlay-panel {
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                text-align: center;
                top: 0;
                height: 100%;
                width: 50%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }

            .overlay {
                background: #ffcc41;
                background: -webkit-linear-gradient(to right, #FF4B2B, #eebc32, #FF4B2B);
                background: linear-gradient(to right, #FF4B2B, #ffcc41, #FF4B2B);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0 0;
                color: #FFFFFF;
                position: relative;
                left: -100%;
                height: 100%;
                width: 200%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }

            /* The width is 100%, when the viewport is 800px or smaller */
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;

        }

        .social-container img {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 100px;
            width: 100px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }

        #fire {
            display: flex;
            flex-direction: c;
            justify-content: center;

        }
    </style>
</head>

<body>

    <!-- Sign up Form -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1>Create Account</h1>

                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                <!-- <span>or use your phone number for registration</span> -->


                <input type="text" placeholder="Name" name="name" required />
                <input type="tel" placeholder="Phone Number" minlength="10" maxlength="10" name="phonenumber" required />

                <input type="mail" placeholder="Enter Email" required>
                <!-- <input placeholder="OTP">
                <button>verify</button> -->

                <input name="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" maxlength="20" name="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
                    if(this.checkValidity()) form.confirm_password.pattern = this.value;
                    " placeholder="Password" id="myInput" />

                <input name="confirm_password" title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" name="confirm_password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" placeholder="Confirm Password" maxlength="20" id="confirm_password">

                <!-- An element to toggle between password visibility -->
                <div id="fire" style="display:flex; justify-content:center;">
                    <input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;&nbsp;
                    <label>ShowPassword</label>
                </div>
                <button name="button">Sign Up</button>
            </form>
        </div>

        <!-- Signin Start -->
        <div class="form-container sign-in-container">
            <form action="signin.php" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <img src="./food-gif.gif">
                </div>

                <input type="phonenumber" placeholder="Phone Number" name="Email" required />
                <input type="password" placeholder="Password" name="Password" required />
                <a href="forgotpassword.php">Forgot your password?</a>
                <button name="mybutton">Sign In</button>
                <p name="wrong"></p>
            </form>
        </div>
        <!-- End of Signin -->

        <!-- Start Of Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
        <!-- End Of Overlay -->

    </div>


    <!-- Start Of Script -->
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });


        // show Password code //

        function myFunction() {
            var x = document.getElementById("myInput");
            var y = document.getElementById("confirm_password");
            if (x.type === "password" && y.type === "password") {
                x.type = "text";
                y.type = "text"
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>

    <!-- End Of Script -->
</body>

</html>