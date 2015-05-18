<?php
session_start();
include_once 'connect.php';
$user = isset ($_POST['uname']) ? mysql_real_escape_string($_POST['uname']):"";
$pass = isset ($_POST['upass']) ? mysql_real_escape_string($_POST['upass']):"";

$Query = mysql_query("SELECT * FROM `userdata` WHERE `username`='$user' && `password`='$pass';");
if(mysql_num_rows($Query)>0){
    $user_detail = mysql_fetch_assoc($Query);
   $_SESSION['isLoggedin']= TRUE;
   header('location:register-package.php');
   
}else{
    $_SESSION['message'] = 'Email id or password not matched.';
    header('location:index.php?msg=not-match');
}