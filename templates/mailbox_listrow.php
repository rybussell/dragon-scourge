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
<tr>
<td width=\"40%\">{{new}}{{money}}<a href=\"index.php?do=mailview&id={{id}}\">{{title}}</a></td>
<td width=\"30%\">From: <a href=\"users.php?do=profile&uid={{senderid}}\">{{sendername}}</a></td>
<td width=\"30%\">{{fpostdate}}</td>
</tr>
";

?>
