<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .feedback-container {
            background: #fff;
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
        }

        .feedback-container img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .feedback-content {
            max-width: 85%;
        }

        .feedback-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .feedback-header strong {
            font-size: 1.1em;
            margin-right: 10px;
        }

        .star-rating {
            font-size: 1.2em;
            color: #f5b301;
        }

        .star-rating .star {
            color: #f5b301;
            margin-right: 2px;
        }

        .feedback-container p {
            margin: 5px 0;
        }

        .feedback-suggestion {
            margin-top: 10px;
        }

        .back-button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
     <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="common.css">
    <script src="common.js"></script>
</head>
<body>
<header>
        <nav id="navbar">
            <ul>
                <li class="front">
                    <button id="menu" onclick="f2()"><img src="icons8-menu-64.png"></button>
                    <h3 style="color: #fff;">BLOOD For Life</h3>
                    </li>
                <li>
                    <a href="welcome.php"><button class="menu2" onmouseenter="ex()"><img src="icons8-home-24.png" >HOME</button></a>
                <li>
                    <a href="about.html"><button class="menu2" onmouseenter="ex()"><img src="icons8-about-24 (1).png">ABOUT US</button></a>
                </li>
                <li>
                    <a href="tel:8688765696"><button id="menu3" onmouseenter="ex()"><img src="icons8-call-24.png" >EMERGENCY</button></a>
                </li>
                <li>
                    <a href="logout.php"><button class="menu2" onmouseenter="ex()"><img src="icons8-logout-24.png" >LOGOUT</button></a> 
                </li>
            </ul>
        </nav>
    </header>
          
<div class="container">
    <?php
    include 'connect.php';
    if ($con) {
        // Connection successful
    }

    $sql = "SELECT * FROM feedb";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    echo "<p><br>Total comments: $count</p>";

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <div class="feedback-container">
                <img src="user.png" alt="User Icon">
                <div class="feedback-content">
                    <div class="feedback-header">
                        <strong><?php echo $row['email']; ?></strong>
                        <div class="star-rating">
                            <?php
                            $rating = $row['rate'];
                            $stars = 5;

                            if ($rating == "good") {
                                $stars = 5;
                            } elseif ($rating == "bad") {
                                $stars = 1;
                            } else {
                                $stars = 3;
                            }

                            for ($i = 1; $i <= 5; $i++) {
                                $selected = ($i <= $stars) ? "&#9733;" : "&#9734;";
                                echo "<span class='star'>$selected</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <p class="feedback-suggestion"><?php echo $row['suggestions']; ?></p>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>

<center><a class="back-button" href="feed.php">Go Back to Feedback Form</a></center>
<div id="main">
                <center>
                    <button id="close1" onclick="f1()" ><img src="icons8-close-32.png" id="close"></button>
                   <br><br><br><a href="bldin.html"><button id="men1">Blood Groups Info</button></a><br>
                    <a href="tips.html"><button id="men2">To Donate Blood</button></a><br>
                    <a href="req.php"><button id="men3">To Request Blood</button></a><br>
                    <a href="mon.php"><button id="men4">To Donate Money</button></a><br>
                    <a href="feed.php"><button id="men5">Feedback</button></a><br>
                </center>
            </div>
              <br><br><footer>Copyrights&copy; 2024 Blood for life</footer>

</body>
</html>
