<?php
 include 'connect.php';
     // Check connection
     if(isset($_POST['sub'])){
     // Create table if not exists
     $sql = "CREATE TABLE IF NOT EXISTS donors (
         id int,
         full_name VARCHAR(100) NOT NULL,
         email VARCHAR(100) PRIMARY KEY,
         father_name VARCHAR(100) NOT NULL,
         mother_name VARCHAR(100) NOT NULL,
         password VARCHAR(255) NOT NULL,
         blood_group VARCHAR(10) NOT NULL,
         age INT NOT NULL,
         city VARCHAR(100) NOT NULL,
         gender VARCHAR(10) NOT NULL,
         district VARCHAR(100) NOT NULL,
         phone_number TEXT NOT NULL,
         state VARCHAR(100) NOT NULL,
         address TEXT NOT NULL
     )";
     
     if ($con->query($sql) !== TRUE) {
         echo "Error creating table: " . $con->error . "<br>";
     }
         $full_name = $_POST['full_name'];
         $email = $_POST['email'];
         $father_name = $_POST['father_name'];
         $mother_name = $_POST['mother_name'];
         $password = $_POST['password'];
         $blood_group =$_POST['blood'];
         $age = $_POST['age'];
         $city = $_POST['city'];
         $gender = $_POST['gender'];
         $district = $_POST['district'];
         $phone_number = $_POST['phone_number'];
         $state ='Andhra Pradesh';
         $address = $_POST['address'];
         $v='';
         $checkEmail = "select * from donors where email = '$email'";
        $result = mysqli_query($con,$checkEmail);
        $count=mysqli_num_rows($result);
        if ($count>0){
           echo '<div id="error-message">';
            echo '<script>
       function dis(){
            document.getElementById("error-message").style.display="grid";
       }
       dis();
     </script>';
    echo '<style>
        #gg{
        filter: blur(5px);    
        }
     </style>';
              echo "<p style='color:green;'>You have already provided your details<br>Thank you...<span style='color:red'>$full_name</span></p><br>";
              echo "<button id='m2m' onclick='go()'>OK</button>";
              ?></div><?php
        }
        else{
            if($blood_group=="O+ve")
            {
                $v=1;
            }
                elseif($blood_group=="O-ve"){
                    $v=2;
                    }
                elseif($blood_group=="A+ve"){
                        $v=3;
                        }
                    elseif($blood_group=="A-ve"){
                            $v=4;
                            }
                        elseif($blood_group=="B+ve"){
                                $v=5;
                                }
                            elseif($blood_group=="B-ve"){
                                    $v=6;
                                    }
                                    elseif($blood_group=="AB+ve"){
                                        $v=7;
                                        }
                                        else{
                                            if($blood_group=="AB-ve"){
                                            $v=8;
                                            }
                                        }
         // Insert data into table
         $sql = "insert into donors (id,full_name, email, father_name, mother_name, password, blood_group, age, city, gender, district, phone_number, state, address)
                 values($v,'$full_name', '$email', '$father_name', '$mother_name', '$password', '$blood_group', $age, '$city', '$gender', '$district', '$phone_number', '$state', '$address')";
        $res= mysqli_query($con,$sql);
         if ($res) {
            ?><div id="error-message">
            <script>
       function dis(){
            document.getElementById("error-message").style.display="grid";
       }
       dis();
     </script><?php
     echo"<style>
        #gg{
            filter:blur(5px);
        }
     </style>";
              echo "<p style='color:green;'><br>Thank you...<span style='color:red'>$full_name</span><br>Your details successfully uploaded </p><br>";
              echo "<button id='m2m' onclick='go()'>OK</button>";?></div><?php
            }
         }
    }
     $con->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <script src="common.js"></script>
    <title>Donor Registration</title>
    <style>
        .container {
            width:max-content;
            margin: 50px auto;
        }

        fieldset {
            padding-top:20px;
            padding-left:50px ;
            border: 3px solid;
            margin-top:50px;
            border-radius: 15px;
        }

        .p {
            background-color:red;
            border-radius: 5px;
            font-size: 20px;
            color:white;
            width:80px;
            height:max-content;
        }
        .leg {
            font-size: 20px;
            color: red;
        }
        input,select,textarea{
            margin-top:10px;
            margin-left:5px;
        }
        label {
            font-size:20px;
            margin-top:10px;
        }
        /* Hide the number input's arrows */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appeara: textfield;
        }
    #error-message{
        padding:30px;
        text-align:center;
        width:300px;
        height:max-content;
        display:none;
        justify-content: center;
        font-size: 18px;
        position: fixed;
        top:30%;
        left:40%;
        z-index: 1;
        font-weight: 600;
        background-color:aliceblue;
        border-radius: 10px 5px 10px 5px;
        box-shadow: 2px 2px 10px black;
    }
    #error-message:hover{
  box-shadow: 2px 2px 30px red;
    }
  #m2m{
      width:150px;
      height:40px;
      margin-left:30%;
      background-color:green;
      color:white;
      border-radius: 10px 5px 10px 5px;
    }
    #m2m:hover{
      box-shadow: 2px 2px 10px green;
    }
    </style>
    <script>
        function go(){
            window.location.href="welcome.php";
        }
        
    </script>
    <script src="password.js"></script>
    <link rel="stylesheet" href="password.css">
</head>
<body><div id="gg"><header>
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
        <fieldset>
            <legend class="leg"><b>DONOR DETAILS</b></legend>
            <form method="POST" action="don.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                <table><tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label>Full Name</label></td>
                        <td><input type="text" name="full_name" required></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>Email</label></td>
                        <td><input type="email" name="email" required></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>Father Name</label></td>
                        <td><input type="text" name="father_name" required></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>Password</label></td>
                        <td><div class="input-group">
                        <div class="password-container">
                        <input type="password" id="password" class="password-input password" placeholder="Enter your password" style="height:25px" name="password" required minlength="4" maxlength="8">
                        <span class="eye-icon toggle-password" style="position: absolute;top:55%;right:5%;">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                        </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label>MotherName</label></td>
                        <td><input type="text" name="mother_name" required></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>Blood Group</label></td>
                        <td><select name="blood" required>
                            <option value="">--Select Blood Group--</option>
                            <option value="A+ve">A+ve</option>
                            <option value="A-ve">A-ve</option>
                            <option value="B+ve">B+ve</option>
                            <option value="B-ve">B-ve</option>
                            <option value="O+ve">O+ve</option>
                            <option value="O-ve">O-ve</option>
                            <option value="AB+ve">AB+ve</option>
                            <option value="AB-ve">AB-ve</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>Age</label></td>
                        <td><input type="number" name="age" id="age" pattern="\d*" inputmode="numeric" required maxlength="2" min="18" max="65"></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>City</label></td>
                        <td><input type="text" name="city" required></td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                        <td><select name="gender" required>
                            <option value="">--Select Gender--</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>District</label></td>
                        <td>
                            <select name="district" required>
                                <option value="">--Select District--</option>
                                <option value="Anantapur">Anantapur</option>
                                <option value="Chittoor">Chittoor</option>
                                <option value="East Godavari">East Godavari</option>
                                <option value="Guntur">Guntur</option>
                                <option value="Krishna">Krishna</option>
                                <option value="Kurnool">Kurnool</option>
                                <option value="Nellore">Nellore</option>
                                <option value="Prakasam">Prakasam</option>
                                <option value="Srikakulam">Srikakulam</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Vizianagaram">Vizianagaram</option>
                                <option value="West Godavari">West Godavari</option>
                                <option value="Y.S.R. Kadapa">Y.S.R. Kadapa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mobile No</label></td>
                        <td><input type="text" name="phone_number" id="mobile_number" minlength="10" maxlength="10" required ></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label>State</label></td>
                        <td>
                            <select name="state" required disabled>
                                <option selected>Andhra Pradesh</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Address</label></td>
                        <td><textarea name="address" rows="6" cols="25" required></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="8">
                            <center>
                                <input class="p" type="reset">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="p" type="submit" name="sub">
                            </center>
                        </td>
                    </tr>
                </table>
            </form><br>
        </fieldset>
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
<br><br><br><br><footer>Copyrights&copy; 2024 Blood for life</footer></div>
</body>
</html>