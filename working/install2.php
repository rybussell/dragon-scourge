<?php

//	Dragon Scourge
//
//	Program authors: Jamin Blount
//	Copyright (C) 2007 by renderse7en
//	Script Version 1.0 Beta 5 Build 20

//	You may not distribute this program in any manner, modified or
//	otherwise, without the express, written consent from
//	renderse7en.
//
//	You may make modifications, but only for your own use and
//	within the confines of the Dragon Scourge License Agreement
//	(see our website for that).

include('config.php');


    if (is_writable("images/botcheck")){
        $botcheck = 1;
        
    } else {
        $botcheck = 0;
        
    }
   
    if (is_writable("images/users")){
        $users = 1;
    } else {
         $users = 0;
    }
    
    // Display status.
    if ($botcheck) { $botcheck = "<span style=\"color: Green;\">Pass</span>";$count++; } else { $botcheck = "<span style=\"color: red;\">Fail</span>"; }
    if ($users) { $users = "<span style=\"color: Green;\">Pass</span>";$count++; } else { $users = "<span style=\"color: red;\">Fail</span>"; }
    if (MYSQLRESULT) { $mysqlresult = "<span style=\"color: Green;\">Pass</span>";$count++; } else { $mysqlresult = "<span style=\"color: red;\">Fail</span>"; }
    if (DBRESULT) { $dbresult = "<span style=\"color: Green;\">Pass</span>";$count++; } else { $dbresult = "<span style=\"color: red;\">Fail</span>"; }

$page = "
<html>
    <head>
        <title>Dragon Scourge :: Installation (Step 1)</title>
        <style type=\"text/css\">
            body, table, td, div { font: 14px Verdana; }
            body { background-image: url(images/background.png); }
            h3 { margin-top: 0px; }
            td { vertical-align: top; }
            .main { background-color: #ddd; font-size:14px; border: solid 1px black; text-align: left; padding: 10px; }
        </style>
    </head>
    <body><center>
        <div class=\"main\" style=\"width: 85%;\">
        
            <center><h3>Dragon Scourge :: Installation (Step 1)</h3>
            
                <li><b>1. Verify Settings</b></li>
                <li>2. Install Database</li>
                <li>3. Primary Game Settings</li>
                <li>4. Create Admin User</li>
            
            
            <table border=\"1\">
                <tr><th colspan=\"2\">Verify Settings</th></tr>
                <tr><td>MySQL Connection</td><td>$mysqlresult</td></tr>
                <tr><td>MySQL Database</td><td>$dbresult</td></tr>
                <tr><td>File Permissions: /images/users/</td><td>$users</td></tr>
                <tr><td>File Permissions: /images/botcheck/</td><td>$botcheck</td></tr>
            </table><br /><br /></center>
            
            If any of the above settings display <span style=\"color: red;\">Fail</span>, please go back and make sure everything is correct.<br /><br />
            For failures on either MySQL Connection or MySQL Database, please ensure that you have inserted the correct values for your server configuration into config.php, and make sure that the database to which you will be installing Dragon Scourge already exists on your server.<br /><br />
            For failures on either of the two File Permissions settings, make sure that the appropriate folders have been CHMODed to 0777 (on Unix/Linux servers), or are not set to read-only (on Windows servers). If you need help with this, <a href=\"http://www.stadtaus.com/en/tutorials/chmod-ftp-file-permissions.php\" target=\"_new\">click here</a> for tutorials on how to do this in several major FTP clients.<br /><br />
            Once you have checked all the appropriate settings, <a href=\"javascript:location.reload();\">reload</a> this page and make sure that all four tests indicate <span style=\"color: green;\">Pass</span> before continuing.<br /><br />
            Once all tests pass, click the link below to continue to step two. If any failed, the link will be unavailable.<br /><br />
            "; 
    if($count==4){
        $page .= "<a href=\"install2b.php\">Continue to Step Two: Install Database</a><br />
            Installing the database may take several seconds. Please click the link only once.";
}

$page .= "    
        </div>
    </center></body>
</html>";
echo $page;


?>
