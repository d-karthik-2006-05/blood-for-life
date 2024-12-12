<?php
include 'connect.php';
$name=$_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$btype = $_POST['blood-type'];
$unit=$_POST['unit'];
$hospital=$_POST['hospital'];
$address=$_POST['address'];
$rr="select * from req where phone='$phone'";
$res=mysqli_query($con,$rr);
$row=mysqli_fetch_assoc($res);
if(!$row){
$sql="insert into req values('$name','$age','$phone','$btype','$unit','$hospital','$address')";
mysqli_query($con,$sql);
}
mysqli_close($con);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <script src="common.js"></script>
    <style>
        .container {
            margin:50px;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s ease;    
            box-shadow: 2px 2px 10px #000;
            width:max-content;
            text-align: left;
        }
        form {
            display: flex;
            flex-direction: column;
            width:350px;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input, select, textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 0.9em;
        }
        #btnr{
            padding: 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #btnr:hover {
            background-color: #c0392b;
        }
        h2{
            color:red;
            text-align: center;
        }
        #result{
            width:420px;
            height:80px;
            position:fixed;
            background-color:aliceblue;
            top:50%;
            left:36%;
            box-shadow: 2px 2px 30px blue;
            font-weight: 600;
            display:none;
            border-radius: 10px 5px 10px 5px;
            justify-content: center;
        }
    </style>
</head>
<body><div id="gg">
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
    <center>
    <div class="container">
        <form action="req1.php" method="post" id="form">
            <h2>Blood Request Form</h2><br>
            <input type="hidden" name="access_key" value="057f0608-e350-45c9-8858-ebb4dedca090">
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $name;?>">

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="2" min="18" max="65" value="<?php echo $age;?>">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required maxlength="10" value="<?php echo $phone;?>">

            <label for="blood-type">Blood Type:</label>
            <select id="blood-type" name="blood-type" required>
                <option value="<?php echo $btype;?>"><?php echo $btype;?></option>
            </select>

            <label>Unit(in ml)</label>
            <input type="number" id="unit" name="unit" max="1000" required value="<?php echo $unit;?>"> 

            <label for="hospital">Hospital Name:</label>
            <input type="text" id="hospital" name="hospital" required value="<?php echo $hospital;?>">

            <label for="address">Hospital Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $address;?>">
            <button type="submit" id="btnr" name="sub">Submit Request</button>
        </form>
    </div></center>
    <div id="main">
        <center>
            <button id="close1" onclick="f1()" ><img src="icons8-close-32.png" id="close"></button>
           <br><br><br><a href="bldin.html"><button id="men1">Blood Groups Info</button></a><br>
            <a href="tips.html"><button id="men2">To Donate Blood</button></a><br>
            <a href="req.html"><button id="men3">To Request Blood</button></a><br>
            <a href="mon.php"><button id="men4">To Donate Money</button></a><br>
            <a href="feed.html"><button id="men5">Feedback</button></a><br>
        </center>
    </div>
<footer><div id="h"><span>Copyrights&copy; 2024 Blood Bank Management System</span></div></footer></div>
<div id="result" style="color:rgb(38, 240, 38);font-size: 20px;"><br><br><br><br></div>
</body>
<script>
            const form = document.getElementById('form');
            const result = document.getElementById('result');
            api();
           function api(){
              const formData = new FormData(form);
              const object = Object.fromEntries(formData);
              const json = JSON.stringify(object);
              document.getElementById("gg").style.filter="blur(10px)";
              document.getElementById("result").style.display="flex";
              result.innerHTML = "<br>Please wait...";
            
                fetch('https://api.web3forms.com/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: json
                    })
                    .then(async (response) => {
                        let json = await response.json();
                        if (response.status == 200) {
                            result.innerHTML ="<br>Your Request submitted successfully";
                        } else {
                            console.log(response);
                            result.innerHTML = json.message;
                        }
                    })
                    .catch(error => {
                        console.log(error);
                        result.innerHTML = "<br>Something went wrong!";
                    })
                    .then(function() {
                        setTimeout(() => {
                        window.location.href="welcome.php";
                        document.getElementById("gg").style.filter="none";
                        result.style.display = "none";
                        },5000);
                    });
            }
</script>
</html>
