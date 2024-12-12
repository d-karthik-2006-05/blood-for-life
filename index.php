<!-- login,register,forgot php code -->
<?php
include 'connect.php';
    if(isset($_COOKIE['e']) and isset($_COOKIE['p']) )
    {
    echo"<script>window.location.href='welcome.php'</script>";
    }
  else{
       if(isset($_POST['submit1']))
        {
        
           $e=$_POST['email'];
           $p=$_POST['pass'];
           $sql="select * from Signup where Email='$e' and Pass='$p'";
           $res=mysqli_query($con,$sql);
           $row=mysqli_fetch_assoc($res);
         if(isset($_POST['remember']))
         {
           if(!$row)
           {
            $error = "Invalid email or password.";
           }
           else{
               $u=$row['User'];
               setcookie('e',$e,time()+3600*24*365);
               setcookie('p',$p,time()+3600*24*365);
               setcookie('u',$u,time()+3600*24*365);
               echo"<script>window.location.href='welcome.php'</script>";
             }
          }
       else{
           if($row)
           {
            echo"<script>window.location.href='welcome.php'</script>";
           }
           else{
            $error = "Invalid email or password ! ";
           }
       }
    }
    // register php
  elseif(isset($_POST['submit2']))
    {
      $sql="select * from Signup";
      $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      $u=$_POST['user'];
      $p=$_POST['pass'];
      $rp=$_POST['repeat'];
      $x="";
      $success='';
      $e=$_POST['email'];
            if($count>0)
            {
              while($row=mysqli_fetch_assoc($res))
                {
     if(($row['Email']==$e))
          {
             $x=$e;
          }
                }
         if($x!=$e)
         {
          if($p==$rp)
          {
              $ins="insert into Signup values('$u','$e','$p')";
              mysqli_query($con,$ins);
              $success=true;
             }
             else{
                  $err="Password should be same ! ";
             }
          }
          else{
                $err="User Already Exist ! ";
          }
            }     
          else{
          if($p==$rp)
          {
           $ins1="insert into Signup values('$u','$e','$p')";
              mysqli_query($con,$ins1);
              $success=true;
              }
              else{
                  $err="Password should be same ! ";
              }
          }
    }  
            // forgot php
            elseif(isset($_POST['submit3']))
            {
                             $e=$_POST['e'];
                             $newp=$_POST['np'];
                             $sql="select * from Signup where Email='$e'";
                             $res=mysqli_query($con,$sql);
                            if($row=mysqli_fetch_assoc($res))
                            {
                              if($newp==$_POST['cp'])
                              {  
                               $sql1="update Signup set Pass='$newp' where Email='$e'";
                               mysqli_query($con,$sql1);
                               $ss="Password Successfully Reset !";
                              }
                             else{
                                  $errr="Password should be same ";
                                }
                            }
                            else{
                                  $errr="Invalid Email ID ! ";
                               }
             }
      }
    mysqli_close($con);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="password.css">
    <title>Document</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <script src="password.js"></script>
</head>
<body><div id="gg">
<header>
    <nav>
        <ul>
        <li class="front">
                    <button id="menu" onclick="fun()"><img src="icons8-menu-64.png"></button>
                    <h3 style="color: #fff;">BLOOD For Life</h3>
        </li>
            <li>
    <a href="index.php"><button class="menu2" onmouseenter="ex()"><img src="icons8-home-24.png">HOME</button></a>
            <li>
            <button class="menu2" onclick="reg1()" onmouseenter="home()"><img src="icons8-registration-24.png">REGISTER</button>
            </li>
            <li>
                <button class="menu2" onclick="log1()" onmouseenter="home()"><img src="icons8-login-24.png">LOGIN</button>

            </li>
            <li>
            <a href="tel:8688765696"><button id="menu3" onmouseenter="ex()"><img src="icons8-call-24.png">EMERGENCY</button></a>
            </li>
        </ul>
    </nav>
</header>
    <center>   
       <div class="scroll">
            <img src="img.jpg" class="s">
            <img src="im.jpg"  class="s">
            <img src="im1.jpg" class="s">
            <img src="im2.jpg" class="s">
            <img src="im3.jpg" class="s">
            <img src="im4.jpg" class="s">
            <img src="im5.jpg" class="s">
            <img src="im6.jpg" class="s">
            <img src="im7.jpg" class="s">
            <img src="im8.jpg" class="s">
        </div></div>
        <div id="regcon">
          <form action="index.php" method="post">
            <div id="retb" onclick="ret1()"><img src="icons8-close-32.png" class="ret"></div>
            <h2><img src="icons8-registration-32.png">Register</h2>
            <input type="text" required placeholder="Username" name="user">
            <input type="email" required placeholder="Email ID" name="email">
            <div class="input-group">
                    <div class="password-container">
                        <input type="password" id="password" class="password-input password" placeholder="Enter your password" minlength="4" maxlength="8" name="pass">
                        <span class="eye-icon toggle-password">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>           
                <div class="input-group">
                    <div class="password-container">
                        <input type="password" id="password" class="password-input password" placeholder="Confirm password" minlength="4" maxlength="8" name="repeat">
                        <span class="eye-icon toggle-password">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </div> <br>
            <input type="submit" value="Register" name="submit2"><br><br>
            <div>Already have an account? <button class="y" onclick="log1()">Login</button></div>
            <br><br>
            <style>
              .y{
                z-index: 67;
              }
            </style>
          </form>
        </div>
        <div id="logcon">
          <form action="index.php" method="post">
            <div id="retb" onclick="ret()"><img src="icons8-close-32.png" class="ret"></div>
            <h2><img src="icons8-login-48.png">Login</h2>
            <input type="email" required placeholder="Email ID" name="email">

            <div class="input-group">
                    <div class="password-container">
                        <input type="password" id="password" class="password-input password" placeholder="Enter your password" minlength="4" maxlength="8" name="pass">
                        <span class="eye-icon toggle-password">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </div><br>
            <input type="checkbox" name="remember">Remember me<br><br>
            <button class="y" onclick="for1()">Forgot Password?</button><br><br>
            <input type="submit" value="Login" name="submit1"><br><br>
            <div> Not a Member? <button class="y" onclick="reg1()">SignUp</button></div>
          </form>
      </div>
      <div id="forcon">
        <form action="index.php" method="post">
          <div id="retb" onclick="ret2()"><img src="icons8-close-32.png" class="ret"></div>
          <h2>Forgot Password?</h2>
          <input type="email" required placeholder="Email ID" name="e">
          <div class="input-group">
                    <div class="password-container">
                        <input type="password" id="password" class="password-input" placeholder="New password" minlength="4" maxlength="8" name="np">
                        <span class="eye-icon toggle-password">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>  
                <div class="input-group">
                    <div class="password-container">
                        <input type="password" id="password" class="password-input" placeholder="Confirm password" minlength="4" maxlength="8" name="cp">
                        <span class="eye-icon toggle-password">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>   
          <br>
         <input type="submit" id="m" value="Reset Password" name="submit3"><br><br>
         </form>
        </div>
    </center><br><br><br>
    <div id="gg1">
    <div id="main" style="position:fixed;top:70px;">
    <center>
        <button id="close1" onclick="fun2()" style="margin-left:50%;"><img src="icons8-close-32.png" id="close"></button>
        <button id="men1" onclick="reg1()">Register</button><br>
        <button id="men2" onclick="for1()">Forgot Password</button><br>
        <a href="logout.php"><button id="men3">LogOut</button></a>
    </center>
    </div>
  <br><br><footer>Copyrights&copy; 2024 Blood For Life</footer>
  </div>
  <div id="msg">
    <div id="retb" onclick="wrong()"><img src="icons8-close-32.png" class="ret" style="margin-top:-30px;margin-left:310px;"></div>
      <?php
      //login
            if (!empty($error))
             {?>
             <script>
        function dis(){
              document.getElementById("msg").style.display="grid";
              document.getElementById("gg").style.filter='blur(5px)';
              document.getElementById("gg1").style.filter='blur(5px)';
        }
        dis();
      </script><?php
               echo "<p style='color: red;'>$error</p><br>";
               echo "<button id='b2b' onclick='log1()'>Please try again</button>";
              }
        //forgot
        if (!empty($errr))
         { ?>
          <script>
     function dis(){
           document.getElementById("msg").style.display="grid";
           document.getElementById("gg").style.filter='blur(5px)';
           document.getElementById("gg1").style.filter='blur(5px)';
     }
     dis();
   </script><?php
          echo "<p style='color: red;'>$errr</p><br>";
          echo "<button id='b2b' onclick='for1()'>Please try again</button>";
          }
    else{
       if(isset($ss))
            {?>
              <script>
         function dis(){
               document.getElementById("msg").style.display="grid";
               document.getElementById("gg").style.filter='blur(5px)';
               document.getElementById("gg1").style.filter='blur(5px)';
         }
         dis();
       </script><?php
             echo "<p style='color:green;'>$ss</p><br>";
             echo "<button id='b2b' onclick='wrong()'>OK</button>";
            }
          }
          //register
            if (!empty($err)) 
              {?>
                <script>
           function dis(){
                 document.getElementById("msg").style.display="grid";
                 document.getElementById("gg").style.filter='blur(5px)';
                 document.getElementById("gg1").style.filter='blur(5px)';
           }
           dis();
         </script><?php
                echo "<p style='color: red;'>$err</p><br>";
                echo "<button id='b2b' onclick='reg1()'>Please try again</button>";
              }
          else{
              if(isset($success))
              {?>
                <script>
           function dis(){
                 document.getElementById("msg").style.display="grid";
                 document.getElementById("gg").style.filter='blur(5px)';
                 document.getElementById("gg1").style.filter='blur(5px)';
           }
           dis();
         </script><?php
               echo "<p style='color:green;'>We Have Registered Successfully !</p><br>";
               echo "<button id='b2b' onclick='wrong()'>OK</button>";
              }
           }
      ?>
      </div>
  <style>
  #msg{
  padding:30px;
  text-align:center;
  width:300px;
  height:max-content;
  display:none;
  justify-content: center;
  position: fixed;
  top:40%;
  left:40%;
  font-weight: 600;
  background-color:aliceblue;
  border-radius: 10px 5px 10px 5px;
  box-shadow: 2px 2px 10px black;
    }
    #msg:hover{
  box-shadow: 2px 2px 30px red;
    }
  #b2b{
      width:150px;
      height:40px;
      margin-left:30%;
      background-color:green;
      color:white;
      border-radius: 10px 5px 10px 5px;
    }
    #b2b:hover{
      box-shadow: 2px 2px 10px green;
    }
  </style>
<script src="password.js"></script>
</body>
</html>