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
You are fighting a <b>{{monstername}}</b>.<br />
Monster's HP: {{monsterhp}}<br /><br />
{{message}}
The monster attacks you for (<span style=\"color: black; font-weight: bold;\">{{monsterphysdamage}}</span>|<span style=\"color: green; font-weight: bold;\">{{monstermagicdamage}}</span>|<span style=\"color: red; font-weight: bold;\">{{monsterfiredamage}}</span>|<span style=\"color: blue; font-weight: bold;\">{{monsterlightdamage}}</span>) damage.<br /><br />
Command?
<form action=\"fight.php\" method=\"post\">
<input type=\"submit\" name=\"fight\" value=\"Fight\" /> <br />
{{spells}}<br />
<input type=\"submit\" name=\"run\" value=\"Run\" />
</form>
";

?>
