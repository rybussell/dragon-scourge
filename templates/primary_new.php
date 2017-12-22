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

$template = "
<head>
<title>{{gamename}} :: {{pagetitle}}</title>
<style type=\"text/css\">

/****** MAIN ELEMENTS ******/
body { font: 10px Verdana; background-image: url(images/{{background}}.jpg); padding: 0px; }
table { font: 10px Verdana; }
td { vertical-align: top; }
input { font: 10px Verdana; }
img { border-style: none; }
a { color: #996600; text-decoration: none; font-weight: bold; }
a:hover { color: #663300; }

/****** TYPOGRAPHY ******/
.grey { color: #999999; }
.red { color: #ff0000; }
.blue { color: #0000ff; }
.big { font: 11px Verdana; background-color: #dddddd; border: solid 1px #aaaaaa; padding: 2px; margin-bottom: 3px; }
.little { font: 10px Verdana; }
.babble1 { background-color: #eeeeee; font: 10px Verdana; margin: 0px; padding: 2px; }
.babble2 { background-color: #ffffff; font: 10px Verdana; margin: 0px; padding: 2px; }
</style>
</head>
<body><center>

<table width=\"750\" height=\"380\" cellspacing=\"0\" cellpadding=\"0\" style=\"border: solid 1px black; background-color: white;\">
<tr>
<td width=\"750\" height=\"60\" colspan=\"3\" style=\"border-bottom: solid 1px #cccccc; vertical-align: middle;\">
<table width=\"750\" height=\"60\" cellspacing=\"0\" cellpadding=\"0\"><tr>
<td width=\"350\"><img src=\"images/logo.gif\" /></td>
<td width=\"400\" style=\"vertical-align: middle; padding: 5px;\">{{topnav}}</td>
</tr></table>
</td>
</tr>
<tr>
<td width=\"140\" height=\"274\" rowspan=\"2\" style=\"border-right: solid 1px #cccccc;\"><div style=\"padding: 3px;\">
{{leftnav}}
</div></td>
<td width=\"450\" height=\"174\"><div style=\"padding: 3px;\">
<div style=\"width: 444px; height: 168px; overflow: auto;\">
<div class=\"big\"><b>{{pagetitle}}</b></div>
{{content}}
</div>
</div></td>
<td width=\"160\" height=\"274\" rowspan=\"2\" style=\"border-left: solid 1px #cccccc;\"><div style=\"padding: 3px;\">
{{rightnav}}
</div></td>
</tr>
<tr>
<td width=\"450\" height=\"106\" style=\"border-top: solid 1px #cccccc;\">{{middlenav}}</td>
</tr>
<tr>
<td width=\"750\" height=\"56\" colspan=\"3\" style=\"border-top: solid 1px #cccccc;\">
<div style=\"height: 48px; padding: 3px;\">
{{bottomnav}}
</div>
</td>
</tr>
</table>
<table width=\"750\" height=\"18\" cellspacing=\"0\" cellpadding=\"0\" style=\"border: solid 1px black; background-color: white; margin-top: 3px;\">
<tr>
<td width=\"50%\" style=\"vertical-align: middle; padding-left: 5px;\"><span class=\"little\">Version <a href=\"index.php?do=version\">{{version}}</a> / {{numqueries}} Queries / {{totaltime}} Seconds</span></td>
<td width=\"50%\" style=\"vertical-align: middle; text-align: right; padding-right: 5px;\"><span class=\"little\"><a href=\"http://www.dragonscourge.com\">Dragon Scourge</a> &copy; 2003-2005 by <a href=\"http://www.renderse7en.com\">renderse7en</a></span></td>
</tr>
</table>

</center></body>
</html>
";

?>
