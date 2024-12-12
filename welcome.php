<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
    <script src="common.js"></script>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #user{
            position:fixed;
            right:20px;
            top:90px;
            font-size:20px;
            animation: example 10s infinite;
        }
    </style>
</head>
<body><header>
    <nav id="navbar">
        <ul>
            <li class="front">
                <button id="menu" onclick="f2()"><img src="icons8-menu-64.png"></button>
                <h3 style="color: #fff;">BLOOD For Life</h3>
                </li>
            <li>
                <a href="index.php"><button class="menu2" onmouseenter="ex()"><img src="icons8-home-24.png" >HOME</button></a>
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
    <br><br>
       <center><h3><strong style="color:blue;">Click On Which Blood Group Donars You Want To View</strong></h3></center>
        <div class="bl">
    <form action="bld.php" method="post">
    <input type="hidden" value="1" name="bld">
    <button class="xy1" id="bgc"><p><b>o</b><sup>+ve</sup></p></button>
    </form>
    <form action="bld.php" method="post">
    <input type="hidden" value="2" name="bld">
    <button class="xy1" id="bgc1"><p><b>o</b><sup>-ve</sup></p></button>
    </form> 
     <form action="bld.php" method="post">
        <input type="hidden" value="3" name="bld">
        <button class="xy1"><p><b>A</b><sup>+ve</sup></p></button>
    </form> 
     <form action="bld.php" method="post">
        <input type="hidden" value="4" name="bld">
        <button class="xy1"><p><b>A</b><sup>-ve</sup></p></button>
    </form>       
            <style>
                .xy1{
                    background-color: transparent;
                    border:none;
                }
            </style>
        </div>
        <div class="bl1">

        <form action="bld.php" method="post">
            <input type="hidden" name="bld" value="5">
            <button class="xy1"><p><b>B</b><sup>+ve</sup></p></button>
        </form>
        
        <form action="bld.php" method="post">
            <input type="hidden" name="bld" value="6">
            <button class="xy1"><p><b>B</b><sup>-ve</sup></p></button>
        </form>
        <form action="bld.php" method="post">
            <input type="hidden" name="bld" value="7">
            <button class="xy1"><p><b>AB</b><sup>+ve</sup></p></button>
        </form>
        <form action="bld.php" method="post">
            <input type="hidden" name="bld" value="8">
            <button class="xy1"><p><b>AB</b><sup>-ve</sup></p></button>
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
        </div>
        <h3 id="user"><?php 
    if(isset($_COOKIE['u']))
        {
        echo "Welcome...".$_COOKIE['u']."!!";
        }
    ?></h3>
<br><br><br><br><br><footer>Copyrights&copy; 2024 Blood For Life</footer>
    </body>
    </html>