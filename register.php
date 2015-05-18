
<?php 
session_start();



//$token = $_SESSION['token'] = md5( session_id() . time(). rand() );

//if(!isset ($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] !== TRUE){
 //   $_SESSION['message'] = 'Please login first.';
  //  header('location:authenticate.php');
//}else{
//
   include_once 'connect.php';

   
//}

 
?>
<!DOCTYPE html>
<html>


<head>

  

  <title>Register</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/stylo.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/datepick.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function() {
        $( "#dob" ).datepicker();
        });
            </script>
    
</head>


  <body>

<?php 

                        
//$id=mysql_real_escape_string($_GET['id']);
//$result = mysql_query("SELECT * FROM team where `teamid`='$id'");

//while($row = mysql_fetch_array( $result )) {
        
                            
echo "<div class='container '>

     <div class='register-form'>
                <form class='' action='register-submit.php' method='post' >
                    <table cellpadding='5' cellspacing='5'>
                        
                        <tr id='pass_error' class='error'>
                            <td><input type='hidden' name='token' value=''</td>
                            <td></td>
                        </tr>
                         

                        <tr>
                            <td><label for='name' class='txt_reg'>Name</label></td>
                            <td><input Required type='text' autocomplete='off' name='name' id=name' class='txt_field' placeholder='Name'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        
                            <tr>
                            <td><label for='name' class='txt_reg'>D.O.B </label></td>
                            <td><input Required type='text' autocomplete='off' name='dob' id=dob' class='txt_field' placeholder='DD/MM/YYYY'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='email' class='txt_reg'>E-Mail</label></td>
                            <td><input Required type='email' autocomplete='off' name='email' id='email' autocomplete='off' class='txt_field' placeholder='email'/></td>
                            <td><img src='images/ajax-loader.gif' id='email_img' style='display: none;'/></td>
                        </tr>
                       
                        <tr>
                            <td><label for='mobile' class='txt_reg'>Mobile No</label></td>
                            <td><input Required type='text' autocomplete='off' pattern='[789][0-9]{9}' name='mobile' id='mobile' class='txt_field' placeholder='Mobile Number' autocomplete='off'/></td>
                            <td>&nbsp;</td>
                        </tr>
                       
                        
                       
                        
                        <tr>
                            <td><label for='course_name' class='txt_reg'>Address</label></td>
                            <td><input Required type='text' autocomplete='off' name='address' id='coursename' class='txt_field' placeholder='Address'/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for='course_name' class='txt_reg'>Enter Password</label></td>
                            <td><input Required type='password' autocomplete='off' name='password' id='coursename' class='txt_field' placeholder='password'/></td>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type='submit' name='register' id='register' value='Register' class='btn wobble-horizontal' /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>";



   //} 

?>

    
<!--
<?php include 'navigation.php'; ?> -->

</body>
</html>
