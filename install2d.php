<?php

include('config.php'); 

// Check for errors.
    //$requires = array("gamename","gamepath","gameurl","avatarpath","avatarurl","avatarmaxsize","adminemail","botcheck","pvprefresh","pvptimeout","guildstartup","guildstartlvl","guildjoinlvl","guildupdate");
    $numerics = array("avatarmaxsize","botcheck","pvprefresh","pvptimeout","guildstartup","guildstartlvl","guildjoinlvl","guildupdate");
    $toggles = array("showshout","showonline","showsigbot","verifyemail","compression","debug");
    //$errors = "";
    foreach($requires as $a => $b) {
        if (!isset($_POST[$b]) || trim($_POST[$b])=="") { $errors .= "$b field is required.<br />"; }
    }
    foreach($numerics as $a => $b) {
        if (!is_numeric($_POST[$b])) { $errors .= "$b field must contain numbers only.<br />";
        }
        
    }
    if ($errors != "") { die("The following errors occurred. Please <a href='install2c.php'>go back</a> and correct these errors before continuing.<br /><br />$errors"); }
    
    // Check toggles.
    foreach($toggles as $a => $b) {
        if (!isset($_POST[$b])) { $_POST[$b] = "0"; }
    }

    extract($_POST);
    
    // No errors, so set up the table.
    



$sql = "INSERT INTO `".$prefix."_controls` (`id`,`gamename`, `gameopen`, `gamepath`, `gameurl`, `forumurl`, `avatarpath`, `avatarurl`, `avatarmaxsize`,`cookiename`, `cookiedomain`, `showshout`,`showonline`,`showitemimages`,`showmonsterimages`,`showsigbot`,`adminemail`,`verifyemail`,`compression`,`debug`,`botcheck`,`pvprefresh`,`pvptimeout`,`guildstartup`,`guildstartlvl`,`guildjoinlvl`,`guildupdate`) VALUES ('1','$gamename','1','$gamepath','$gameurl','$forumurl','$avatarpath','$avatarurl','$avatarmaxsize','scourge2','','$showshout','$showonline','1','0','$showsigbot','$adminemail','$verifyemail','$compression','$debug','$botcheck','$pvprefresh','$pvptimeout','$guildstartup','$guildstartlvl','$guildjoinlvl','$guildupdate');";


mysqli_query($link,$sql);


 
        
        
    // Done with the controlrow creator. Now show admin user creation form.'
$page = "
<html>
    <head>
        <title>Dragon Scourge :: Installation (Step 4)</title>
        <style type=\"text/css\">
            body, table, td, div { font: 11px Verdana; }
            body { background-image: url(images/background.png); }
            h3 { margin-top: 0px; }
            td { vertical-align: top; }
            .grey { color: #888888; }
            .main { background-color: #ddd; border: solid 1px black; text-align: left; padding: 10px; }
        </style>
    </head>
    <body><center>
        <div class=\"main\" style=\"width: 85%;\">
        
            <center><h3>Dragon Scourge :: Installation (Step 4)</h3>
            <li>1. Verify Settings></li>
                <li>2. Install Database</li>
                <li>3. Primary Game Settings</li>
                <li><b>4. Create Admin User</b></li><br /><br /><br />
            
            <form action=\"install2e.php\" method=\"post\">
            <table cellspacing=\"0\" cellpadding=\"5\" width=\"50%\">
            <tr><td width=\"25%\">Username</td><td><input type=\"text\" name=\"username\" size=\"20\" maxlength=\"30\" value=\"\" /><br /><br /></td></tr>
            <tr><td width=\"25%\">Password</td><td><input type=\"text\" name=\"password\" size=\"20\" maxlength=\"30\" value=\"\" /><br /><br /></td></tr>
            <tr><td width=\"25%\">Email Address</td><td><input type=\"text\" name=\"emailaddress\" size=\"40\" maxlength=\"200\" value=\"\" /><br /><br /></td></tr>
            <tr><td colspan=\"2\" style=\"border-top: solid 2px black;\"><center>
            <input type=\"submit\" name=\"submit\" value=\"Create Admin User and Complete Installation\" />
            </center></td></tr>
            </table>
            </form>
        
        </center></div>
    </center></body>
</html>";

echo $page;

?>
