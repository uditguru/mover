
<head>
    
    <title>HOME</title>
   
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="css/stylo.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
    <script src="curtain.js"></script>
    
</head>
<body>
<?php include 'navigation.php'; ?>
<div class="artview" >
 <div class="container ">

     <div class="register-form">
                <form class="" action="authenticate-user.php?id=" method="post" onsubmit="return  checkForm();">
                    <table cellpadding="5" cellspacing="5">
                        
                        <tr id="pass_error" class="error">
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name" class="txt_reg">Username</label></td>
                            <td><input Required type="text" autocomplete="off" name="uname" id="name" class="txt_field" placeholder="username"/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg">Password</label></td>
                            <td><input Required type="password" autocomplete="off" name="upass" id="email" autocomplete="off" class="txt_field" placeholder="password"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                          <td>&nbsp;</td>
                            <td><input type="submit" name="register" id="register" value="GO" class="btn wobble-horizontal" /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>
<h1 class="title" ></h1>
<img class="davv" >




</div>
<div class="credits">
 
</div>
<?php include 'footer.php'  ?>
</body>



