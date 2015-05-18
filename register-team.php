<?php

if (isset($_POST['register'])) {

    # code...

include_once 'connect.php';

require('WriteHTML.php');


$name = isset($_POST['product'])?mysql_real_escape_string($_POST['product']):'';
$dob = isset($_POST['dadd'])?mysql_real_escape_string($_POST['dadd']):'';
$email = isset($_POST['padd'])?mysql_real_escape_string($_POST['padd']):'';
$mobile = isset($_POST['pdes'])?mysql_real_escape_string($_POST['pdes']):'';






$Query = mysql_query("INSERT INTO `productdetail`(`pname`,`destination`,`pickup`,`decribe`) VALUES('$name','$dob', '$email', '$mobile') ");
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
