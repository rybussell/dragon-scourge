<?php // config.php :: Low-level app/database variables.

//	Dragon Scourge
//
//	Program authors: Jamin Blount
//	Copyright (C) 2007 by renderse7en
//	Script Version 1.0 Beta 5 Build 19

//	You may not distribute this program in any manner, modified or
//	otherwise, without the express, written consent from
//	renderse7en.
//
//	You may make modifications, but only for your own use and
//	within the confines of the Dragon Scourge License Agreement
//	(see our website for that).

$prefix = "sx";            // Prefix for table names.
        
$dbhost = "localhost";   //sql server host name
$dbuser = "";             //database username
$dbpass = "";            //database password for user
$dbname = "";             //name of database for tables

$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        
?>
