<?php
include 'connect.php';
if(isset($_POST['submit'])){
$nam=$_POST['nam'];
$ema = $_POST['ema'];
$ab = $_POST['a'];
$sugg = $_POST['sugg'];
$sql="insert into feedb values('$nam','$ema','$ab','$sugg')";
$res=mysqli_query($con,$sql);
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
      echo "<p style='color:green;'><br>Thank you...<span style='color:red'>$nam</span><br>Your feedback successfully submitted</p><br>";
      echo "<button id='m2m' onclick='go()'>OK</button>";?></div><?php
    }
  }
mysqli_close($con);
?>
  <html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bld.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="common.css">
    <script src="common.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
      #error-message{
        padding:30px;
        text-align:center;
        width:300px;
        height:max-content;
        display:none;
        justify-content: center;
        font-size: 18px;
        position: fixed;
        top:40%;
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
        #l
          {
            margin-left:-10px;
          }
    </style>
    <script>
        function go(){
            window.location.href="welcome.php";
        }
    </script>
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
            <center><br>
            <h2><strong>Thank You Visit Again</strong></h2>
            <form action="feed.php" method="post">       
            <div id="p"><br>
                <h2 style="color:blue">Give Your Feedback</h2><hr><br>
                <h3>Enter Your Full Name  <b>*</b></h3> 
                <input type="text" id="m1" required name="nam">
                <h3>Your Email address  <b>*</b> </h3> 
                <input type="text" id="m2" required name="ema">
                <h3>Rate your experience</h3>
            
                <input type="radio"  name="a" value="good">good<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="a" value="average">average<br>
          <input type="radio" id="l" name="a" value="bad">bad
                <h3>Give Suggestions <b>*</b></h3><br>
                <textarea rows="6" cols="25" required resize="none" name="sugg"></textarea><br><br>
                <input type="reset" class="sp1">&nbsp;
                <button class="sp1" name="submit">Submit</button>
                <br><br>
                <a href="userc.php" class="view">View others feedback</a>      
         </div>
            </form>
            </center>
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
            <br><br><footer>Copyrights&copy; 2024 Blood For Life</footer></div>
    </body>
</html>