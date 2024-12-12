<?php
include 'connect.php';
    if(isset($_COOKIE['e']) and isset($_COOKIE['p']))
     {
        $e=$_COOKIE['e'];
        $p=$_COOKIE['p'];
        $u=$_COOKIE['u'];
        setcookie('e',$e,time()-3600*24*365);
        setcookie('p',$p,time()-3600*24*365);
        setcookie('u',$u,time()-3600*24*365);
    }
 echo"<script>window.location.href='index.php'</script>";
    mysqli_close($con);
?>