 <?php
 include 'connect.php';
 if(isset($_POST['check']))
 {
  // Create table if not exists
  $sql = "CREATE TABLE IF NOT EXISTS eligible(
    Name VARCHAR(100) NOT NULL,
    age VARCHAR(100) NOT NULL,
    weight VARCHAR(100) NOT NULL,
    Tattos VARCHAR(100) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    time VARCHAR(100) NOT NULL,
    surgeries VARCHAR(10) NOT NULL,
    email varchar(50) NOT NULL)";
    mysqli_query($con,$sql);
         $name=$_POST['name'];
         $age=$_POST['age'];
         $weight = $_POST['weight'];
         $tatto= $_POST['tatto'];
         $gender = $_POST['gen'];
         $time = $_POST['time'];
         $surgeries= $_POST['sur'];
         $email= $_POST['email'];
         $a='';
         $s='';
         $fet1="delete from eligible where email='$email'";
         $r=mysqli_query($con,$fet1);
         if($age=='65+'){
          $maxer="* '65+'  age grouped people are not eligible to donate blood.<br>";
          $a=1;
     }
         if($tatto=="Yes"){
            $tater="* 'Tattos'  on your body makes your blood poisonous so,you are not <br>&nbsp;&nbsp;&nbsp;&nbsp;eligible to blood donate.<br>";
          $a=1;
         }
         if($surgeries=="Yes")
         {
            $serr="* 'Surgeried people' are not eligible to donate blood.<br>";
          $a=1;
         }
         if($time=="Donated recently"){
          if($gender=="Female"){
               $terr="* According to NAMS you can donate blood after '120' days (or) '4'<br>&nbsp;&nbsp; months only because,you are recently doanted blood.<br>";
          }
          else{
               $terr="* According to NAMS you can donate blood after '90' days (or) '3'<br>&nbsp;&nbsp; months only because,you are recently doanted blood.<br>";
          }
          $a=1;
         }
         if($a!=1)
         {
            $sql1="INSERT INTO eligible(`Name`, `age`, `weight`, `Tattos`, `gender`, `time`, `surgeries`, `email`)
                VALUES ('$name','$age','$weight','$tatto','$gender','$time','$surgeries','$email')";
            mysqli_query($con,$sql1);
            $s=true;
        }
    }
    mysqli_close($con);
?><html>
<head>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <script src="common.js"></script>
    <title>Eligible or not eligible</title>
    <style>
        label {
            color: rgba(247, 9, 9, 0.979);
        }

        .container {
            width: 55%;
            margin: 40px auto;
            color:black;
       }
       td
       {
        font-size:20px;
       }
       select{
        font-size:15px;
       }
        fieldset {
            border: 3px solid;
            border-radius: 10px;
            margin-top:80px;
        }

        #r {
            background-color:red;
            border-radius: 5px;
            font-size: 20px;
            color: white;
            width:80px;
        }
        h2
        {
            color: red;
        }
        form{
            margin-left:50px;
        }
    </style>
</head>
<body><div id="frr">
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
        <fieldset>
            <center>
           <br><h2>ARE YOU ELIGIBLE TO DONATE BLOOD ?</h2>
            </center>
            <form action="are.php" method="post">
                <table><tr><td><label>*</label>Email ID</td>
                    <td>&nbsp;&nbsp;<input type="email" required name="email"></td></tr>
                    <tr>
                        <td><label>*</label>Full Name</td>
                        <td>&nbsp;&nbsp;<input type="text" required name="name"></td>
                        <td> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;<label>*</label>Any Tattos</td>
                        <td> &nbsp;&nbsp;&nbsp;<select name="tatto" required>
                                <option value="">--select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>*</label>Age</td>
                        &nbsp;&nbsp;&nbsp;<td>&nbsp;<input type="radio" name="age" value="18+" required>18+
                            <br>&nbsp;<input type="radio" name="age" value="65+" required>65+
                        </td>
                        <td> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;<label>*</label>Gender</td>
                        <td> &nbsp;&nbsp;&nbsp;<select name="gen" required>
                                <option value="">--select--</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                       
                    </tr>
                    <tr>
                        <td><label>*</label>Weight</td>
                        <td>&nbsp;<select name="weight" required>
                                <option value="">--select--</option>
                                <option>45+ kgs</option>
                                <option>50+ kgs</option>
                                <option>55+ kgs</option>
                                <option>60+ kgs</option>
                                <option>65+ kgs</option>
                                <option>70+ kgs</option>
                            </select></td>
                            <td><label>*</label>Last Time Blood Donated</td>
                            <td>&nbsp;&nbsp;&nbsp;<select name="time" required>
                                <option value="">--select--</option>
                                <option>Not donated ever</option>
                                <option>Donated recently</option>
                                <option>Donated before 3 months</option></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><br><label>*</label>Any surgeries done before?</td>
                    <tr >
                        <td>&nbsp;&nbsp;<input type="radio" name="sur" value="Yes" required>Yes&nbsp;&nbsp;<input type="radio" value="No" name="sur" required>No
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table><br>
                <center><input type="submit" value="check" id="r" name="check"><br></center>
                <br>
            </form>
        </fieldset>

    </div>
    </fieldset>
    </div>
    <div id="main">
        <center>
            <button id="close1" onclick="f1()" ><img src="icons8-close-32.png" id="close"></button><br><br><br>
            <a href="bldin.html"><button id="men1">Blood Groups Info</button></a><br>
            <a href="tips.html"><button id="men2">To Donate Blood</button></a><br>
            <a href="req.php"><button id="men3">To Request Blood</button></a><br>
            <a href="mon.php"><button id="men4">To Donate Money</button></a><br>
            <a href="feed.php"><button id="men5">Feedback</button></a><br>
        </center>
    </div>
  <br><br><br><br><br><footer><div id="h"><span>Copyrights&copy; 2024 Blood for life</footer>
    </div>
    <div id="error">
    <div id="clb" onclick="wrong1()"><img src="icons8-close-32.png" class="cl" ></div><br><br>
    <?php
    $b='';

                 if(!empty($maxer)){ ?>
                    <script>
                    function blur(){
                        document.getElementById("frr").style.filter='blur(5px)';
                        document.getElementById("error").style.display="grid";
                    }
                    blur();
                    </script>
                    <?php
                    echo $maxer;
                    $b=1;
                 }if(!empty($tater)){ ?>
                    <script>
                    function blur(){
                        document.getElementById("frr").style.filter='blur(5px)';
                        document.getElementById("error").style.display="grid";
                    }
                    blur();
                    </script>
                    <?php
                    $b=1;
                    echo $tater;
                 }if(!empty($serr)){ ?>
                    <script>
                    function blur(){
                        document.getElementById("frr").style.filter='blur(5px)';
                        document.getElementById("error").style.display="grid";
                    }
                    blur();
                    </script>
                    <?php
                    $b=1;
                    echo $serr;
                 }if(!empty($terr)){ ?>
                    <script>
                    function blur(){
                        document.getElementById("frr").style.filter='blur(5px)';
                        document.getElementById("error").style.display="grid";
                    }
                    blur();
                    </script>
                    <?php
                    $b=1;
                    echo $terr;
                }
                    if($b==1)
                    {
                    echo"<h4 style='color:red;font-size:25px;' id='mar'>Sorry... <span style='color:blue'>$name</span> !</h4>";
                    echo"<br><a href='welcome.php'><button class='cv'>Ok</button></a>";
                    }
                    if(isset($s) and $b!=1){ ?>
                                    <script>
                                    function blur(){
                                        document.getElementById("frr").style.filter='blur(5px)';
                                        document.getElementById("error").style.display="grid";
                                        document.getElementById("error").style.width="380px";
                                    }
                                    blur();
                                    </script>
                 <?php
                    echo"You Are Eligible,Click On Next To Donate Blood...<br>";
                    echo"<br><a href='don.php'><button class='cv1'>Next</button></a>";
                    }
                ?>
    <div>
</body>
</html>
<style>
#mar{
    position:absolute;
    top:5%;
    left:30%;
}
#error{
  width:500px;
  height:max-content;
  padding:20px;
  display:none;
  justify-content: center;
  position: fixed;
  top:40%;
  left:30%;
  font-weight: 600;
  background-color:aliceblue;
  border-radius: 10px 5px 10px 5px;
  box-shadow: 2px 2px 10px black;
    }
    #error:hover{
  box-shadow: 2px 2px 30px red;
    }
  .cv,.cv1{
      width:150px;
      height:40px;
      margin-left:40%;
      background-color:green;
      color:white;
      border-radius: 10px 5px 10px 5px;
    }
    .cv1{
      margin-left:30%;
    }
    .cv:hover,.cv1:hover{
      box-shadow: 2px 2px 10px green;
    }
    #clb{
    border: none;
    background-color: transparent;
   
  }
  .cl{
    height: 30px;
    width: 30px;
    background-color: #ff0000;
    border-radius: 20px;
    position:absolute;
    right:10px;
  }
  </style>
  <script>
function wrong1(){
    document.getElementById("error").style.display="none";
    document.getElementById("frr").style.filter="none"
}
  </script>