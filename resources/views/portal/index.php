<?php
error_reporting ( E_ALL & ~ E_NOTICE );
require_once ('header.php');

if (isset ( $page )) {
	if ($page != home) {
		//require_once ('nav.php');
	}
	require_once ($page . '.php');
}
else
{
	require_once ('home.php');
}

require_once ('footer.php');
?>