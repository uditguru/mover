<?php

if (isset($_POST['register'])) {

	# code...

include_once 'connect.php';

require('WriteHTML.php');


$name = isset($_POST['name'])?mysql_real_escape_string($_POST['name']):'';
$dob = isset($_POST['dob'])?mysql_real_escape_string($_POST['dob']):'';
$email = isset($_POST['email'])?mysql_real_escape_string($_POST['email']):'';
$mobile = isset($_POST['mobile'])?mysql_real_escape_string($_POST['mobile']):'';
$add = isset($_POST['address'])?mysql_real_escape_string($_POST['address']):'';
$pass = isset($_POST['password'])?mysql_real_escape_string($_POST['password']):'';





$Query = mysql_query("INSERT INTO `userdata`(`username`,`dob`,`email_id`,`mobile_no`,`address_user` , `password`) VALUES('$name','$dob', '$email', '$mobile', '$add','$pass') ");
if($Query){
echo "done";


header('refresh: 30; register-package.php ')    ;
exit;
}else{
    echo "There was some error getting your request done. !!";
    header('refresh:10; index.php');
}

}else{
	echo "please submit the form first";
}
