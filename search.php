<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="common.js"></script>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
</head>
<body><header>
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
       <form action="search.php" method="post">
       <center>
       <br><br><h2 style="color:blue;">View Donors Details</h2><br>
    <div class="dropdown">
        <strong>Select district wise...</strong><br><br>        
        <?php
        $val = $_POST['bld'];
        ?>
        <input type="hidden" name="bld" value="<?php echo $val; ?>">
        <input type="text" id="searchInput" onkeyup="filterFunction()" placeholder="Search..." name="state">
        <input type="submit" id="searchButton" value="Search">
        <select id="mySelect" size="5" required>
                                <option value="All Districts">All Districts</option>
                                <option value="Anantapur">Anantapuram</option>
                                <option value="Chittoor">Chittoor</option>
                                <option value="East Godavari">East Godavari</option>
                                <option value="Guntur">Guntur</option>
                                <option value="Krishna">Krishna</option>
                                <option value="Kurnool">Kurnool</option>
                                <option value="Nellore">Nellore</option>
                                <option value="Prakasam">Prakasam</option>
                                <option value="Srikakulam">Srikakulam</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Vijayanagaram">Vijayanagaram</option>
                                <option value="West Godavari">West Godavari</option>
                                <option value="Y.S.R. Kadapa">Y.S.R. Kadapa</option>
            </select></center>
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
<?php
include 'connect.php';
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
    $id=$_POST['bld'];
    $dis=$_POST['state'];
    if($dis=='All Districts')
    {
        $sql ="SELECT * FROM donors where id='$id'";
        $result = mysqli_query($con, $sql);
    }
    else{
        $sql = "SELECT * FROM donors where id='$id' and district='$dis' ";
        $result = mysqli_query($con, $sql);
    }
    $count=mysqli_num_rows($result);
    if($count<=0){
     $err="No Donors available...";
    }
mysqli_close($con);
?>
    <section class="container">
        <table class="donor-table">
            <thead>
                <tr>
                    <th>Blood Group</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>City</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody><?php if(isset($err)){?>
            <tr>
                <td colspan="10" style="text-align:center;color:red;"><h3><?php echo $err ;?></h3></td>
            </tr>
            <?php
            }?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['blood_group']; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email']; ?></td></a>
                    <td><a href="tel:<?php echo $row['phone_number'];?>"><?php echo $row['phone_number']; ?></td></a>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <?php 
                }?>
            </tbody>
        </table>
        <script>
            filterFunction();
        </script>
    </section>
<footer>Copyrights&copy; 2024 &nbsp;&nbsp;Blood For Life</footer>
    </body>
    </html>

