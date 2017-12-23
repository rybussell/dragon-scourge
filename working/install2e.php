<?php

include('config.php');

// Check for errors.
    $requires = array("username","password","emailaddress");
    $errors = "";
    foreach($requires as $a => $b) {
        if (!isset($_POST[$b]) || trim($_POST[$b])=="") { $errors .= "$b field is required.<br />"; }
    }
    if ($errors != "") { die("The following errors occurred. Please go back and correct these errors before continuing.<br /><br />$errors"); }
    
    // No errors, so set up the table.
    extract($_POST);
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
   
        $username=$_POST['username'];
        
        $emailaddress=$_POST['emailaddress'];
        $verifycode=1;
        $regdate=date("Y-m-d h:i:s");
        $regip=$_SERVER["REMOTE_ADDR"];
        $authlevel=255;
        $language="English";
        $characters=0;
        $activechar=0;
        $imageformat=".png";
        $minimap=1;
     

     $sql = "INSERT INTO `".$prefix."_accounts` (`id`, `username`, `password`, `emailaddress`, `verifycode`, `regdate`, `regip`, `authlevel`, `language`, `characters`, `activechar`, `imageformat`, `minimap`) VALUES ('1','$username','$password','$emailaddress','1','$regdate','$regip','$authlevel','$language','$characters','$activechar','$imageformat','1');";
     mysqli_query($link,$sql);
        
    // Done with the controlrow creator. Now show admin user creation form.'
$page = "
<html>
    <head>
        <title>Dragon Scourge :: Installation Complete</title>
        <style type=\"text/css\">
            body, table, td, div { font: 11px Verdana; }
            body { background-image: url(images/background.png); }
            h3 { margin-top: 0px; }
            td { vertical-align: top; }
            .grey { color: #888888; }
            .main { background-color: white; border: solid 1px black; text-align: left; padding: 10px; }
        </style>
    </head>
    <body><center>
        <div class=\"main\" style=\"width: 85%;\">
        
            <h3>Dragon Scourge :: Installation Complete</h3>
            Dragon Scourge Installation has now completed. Congratulations.<br /><br />
            For security reasons, <b>please delete install.php and install.sql from your game directory at this time!</b><br /><br />
            <a href=\"login.php?do=login\" target=\"_parent\">Click here</a> to log into your game for the first time. Once you log in, you will be asked to create your first Character.
            
        </div>
    </center></body>
</html>";
echo $page;




?>
