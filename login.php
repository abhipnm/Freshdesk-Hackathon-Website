<?php

session_start();

$con =mysqli_connect("mysql.hostinger.in","u676267388_user","Rajat1","u676267388_andlg");



$uid=$_POST["uid"];
$pass=$_POST["pass"];
$sql= " SELECT  userid, email from register where  userid='$uid'  AND password='$pass'";
$result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['uname']=$uid;
       
     header("location:kart/front-login.html");
    }
   else
   {
                $_SESSION['message']="Username and Password combiation incorrect";
    }






?>