
<head>

  

  <title>Register Your Product</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/stylo.css"> 
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/datepick.js"></script>
   
</head>


  <body>

    <div class="container ">

     <div class="register-form">
      
                <form class="" action="register-team.php" method="post" onsubmit="return  checkForm();">
                    <table cellpadding="5" cellspacing="5">
                        
                        <tr id="pass_error" class="error">
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name" class="txt_reg">Product Name :</label></td>
                            <td><input Required type="text" autocomplete="off" name="product" id="name" class="txt_field" placeholder="Product name"/></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="email" class="txt_reg"> Destination Address :</label></td>
                            <td><input Required type="text" autocomplete="off" name="dadd" id="email" autocomplete="off" class="txt_field" placeholder="Destination"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                         <tr>
                            <td><label for="email" class="txt_reg"> Pick up Address :</label></td>
                            <td><input Required type="text" autocomplete="off" name="padd" id="email" autocomplete="off" class="txt_field" placeholder="Pick up"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                         <tr>
                            <td><label for="email" class="txt_reg"> Product Description :</label></td>
                            <td><input Required type="text" autocomplete="off" name="pdes" id="email" autocomplete="off" class="txt_field" placeholder="Description"/></td>
                            <td><img src="images/ajax-loader.gif" id="email_img" style="display: none;"/></td>
                        </tr>
                         
                        
                       
                            <td>&nbsp;</td>
                            <td><input type="submit" name="register" id="register" value="Submit" class="btn wobble-horizontal" /></td>
                        </tr>
                    </table>
                </form>
            </div>


    </div>

<?php include 'navigation.php'; ?>

</body>