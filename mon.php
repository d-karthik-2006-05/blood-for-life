<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to Our Blood Bank</title>
    <link rel="stylesheet" href="common.css">   
    <style>
 .container {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 2px 2px 10px #000;
    width: 300px;
    text-align: left;
}
form {
    display: flex;
    flex-direction: column;
}
label {
    margin: 10px 0 5px;
}
#btn1{
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    color: white;
    border-radius: 3px;
    cursor: pointer;
}
.amount{
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}
#btn1:hover {
    background-color: #4cae4c;
}
</style>
<script src="common.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body> <header>
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
</header><main>
    <center>
          <br> <h3 style="color:#4cae4c">Support Our Blood Bank - Make a Difference Today!</h3><br>
           <b><h4>Your donation helps us to save lives by supporting our blood bank operations.</h4></b> <br>
        <div class="container">
            <h2 style="color:red;text-align: center;">Donate Money</h2>
            <form action="pay.php" method="post">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="amount" required>
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="amount" required>
                <label for="phone">Phone Number (optional):</label>
                <input type="text" class="amount" name="phone" minlength="10" maxlength="10">
                <label for="amount">Donation Amount:</label>
                <input type="number" class="amount" name="amount" required><br>
                <button type="submit" id="btn1" name="k2">Proceed to Payment</button>
            </form>
        </div>
        <div id="main">
            <center>
                <button id="close1" onclick="f1()" ><img src="icons8-close-32.png" id="close"></button>
                <a href="bldin.html"><button id="men1">Blood Groups Info</button></a><br>
                <a href="tips.html"><button id="men2">To Donate Blood</button></a><br>
                <a href="req.php"><button id="men3">To Request Blood</button></a><br>
                <a href="mon.php"><button id="men4">To Donate Money</button></a><br>
                <a href="feed.php"><button id="men5">Feedback</button></a><br>
            </center>
        </div></main>
        <br><br>
    <footer>Copyrights&copy; 2024 Blood for life</footer>
</center>
</body>
</html>