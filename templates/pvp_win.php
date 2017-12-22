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
{{avatar}}<br />
You are fighting <b>{{monstername}}</b>.<br /><br />
{{message}}
You attack {{monstername}} for (<span style=\"color: black; font-weight: bold;\">{{playerphysdamage}}</span>|<span style=\"color: green; font-weight: bold;\">{{playermagicdamage}}</span>|<span style=\"color: red; font-weight: bold;\">{{playerfiredamage}}</span>|<span style=\"color: blue; font-weight: bold;\">{{playerlightdamage}}</span>) damage.<br /><br />
You have defeated <b>{{monstername}}</b>.<br />
You may now <a href=\"index.php\">return to the game</a>.
";

?>
