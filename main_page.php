<!DOCTYPE html>
<html>

<head>
    <title>Food Delivery App</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fffbbd;
            margin: 0;
            padding: 0;
        }

        #header {
            position: fixed;
            width: 100%;
            background-color: #ffcc41;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        #main-content {
            
            max-width: 900px;
            margin: 60px auto;
            background-color: #ffff;
            padding: 60px 60px 60px 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .restaurant-card {
            background-color: #ffebeb;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .restaurant-card h2 {
            margin-top: 0;
        }

        .restaurant-card p {
            margin-bottom: 10px;
        }

        .restaurant-card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .menu-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6600;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .menu-button:hover {
            background-color: #ff8000;
        }

        .container {
            min-width: 100%;
            min-height: 100%;
            display: block;
            position: relative;
        }

        .menu {
            width: 40px;
            height: 40px;
            display: block;
            position: relative;
        }

        .list,
        .intro {
            height: 100%;
            top: 0;
            z-index: -1;
            display: flex;
            position: fixed;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            transition: all 0.75s ease;
        }

        .list {
            background: #ffcc41;
            width: 120px;
            left: -120px;
            opacity: 0;
        }

        .list span {
            background: #FF4B2B;
            border-radius: 40px;
            width: 100px;
            margin: 5px 0;
            padding: 10px 0;
            text-align: center;
            border-radius: 4px;
        }

        .intro {
            width: 100%;
            padding: 0 8px;
            left: 0;
            text-align: center;
        }

        .btn {
            background: #000;
            width: 40px;
            height: 40px;
            top: 10px;
            left: 10px;
            display: block;
            position: absolute;
            border-radius: 50%;
        }

        .btn::before,
        .btn::after {
            background: #fff;
            width: 20px;
            height: 2px;
            left: 10px;
            display: block;
            position: absolute;
            transition: all 0.75s ease;
            content: "";
        }

        .btn::before {
            top: 16px;
        }

        .btn::after {
            bottom: 16px;
        }

        .menu:focus-within .list {
            left: 0;
            opacity: 1;
        }

        .menu:focus-within .intro {
            width: calc(100% - 120px);
            left: 120px;
        }

        .menu:focus-within .btn::before {
            transform: rotate(45deg) translate(2px, 2px);
        }

        .menu:focus-within .btn::after {
            transform: rotate(-45deg) translate(2px, -2px);
        }
        span{
            font-family: cursive;
        }

        @media only screen and (min-width: 360px) {
            #main-content {
                width:600px;

            }
        }

        @media only screen and (max-width:1280px) {
            #main-content {
                width:800px;
            }
        }
       
    </style>
</head>

<body>
    <div id="header">
        <h1><span>#HashStag</span> Food Delivery App</h1>
    </div>

    <div class="menu_container">
        <div class="container">
            <div class="menu" tabindex="1">
                <div class="list">
                    <span>Home</span><span>Profile</span><span>Contact Us</span><span>LogOut</span>
                </div>
            </div>
        </div>


        <div id="main-content">
            <h1>Popular Restaurants</h1>

            <div class="restaurant-card">
                <img src="./Paradise-Restaurant_hydinfo.jpg" alt="Restaurant 1">
                <h2>Paradise</h2>
                <p>Address: 123 Main St, City</p>
                <p>Phone: 123-456-7890</p>
                <p>Cuisine: Italian</p>
                <a href="restaurant1-menu.html" class="menu-button">View Menu</a>
            </div>

            <div class="restaurant-card">
                <img src="./pista-house-banquet-hall-kukatpally-hyderabad.jpg" alt="Restaurant 2">
                <h2>Pista House</h2>
                <p>Address: 456 Elm St, City</p>
                <p>Phone: 987-654-3210</p>
                <p>Cuisine: Mexican</p>
                <a href="restaurant2-menu.html" class="menu-button">View Menu</a>
            </div>


            <div class="restaurant-card">
                <img src="./925066477s.png" alt="Restaurant 2">
                <h2>Bawarchi</h2>
                <p>Address: 456 Elm St, City</p>
                <p>Phone: 987-654-3210</p>
                <p>Cuisine: Mexican</p>
                <a href="restaurant2-menu.html" class="menu-button">View Menu</a>
            </div>

            <!-- Add more restaurant cards here -->

        </div>
    </div>
</body>

</html>