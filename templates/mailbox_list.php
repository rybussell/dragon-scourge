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
The Post Office is where you can send and receive Letters and Money Transfers.<br /><br />
{{messages}}
<span class=\"red\">*</span> = New Letter.<br />
<span class=\"blue\">$</span> = Letter contains a Money Transfer.<br /><br />
<hr />
<a href=\"index.php?do=mailnew\">New Letter</a> | <a href=\"index.php?do=mailbox\">Inbox</a> | <a href=\"index.php?do=mailsent\">Outbox</a><br /><br />
You may also return to <a href=\"index.php\">town</a>.
";

?>
