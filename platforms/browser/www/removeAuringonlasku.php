<?php
	$db = new PDO('sqlite:Auringonlasku.sqlite');
	$Auringonlasku_id = $_REQUEST['id'];
	$db->exec("DELETE FROM Auringonlaskut WHERE auringonlasku_id = $Auringonlasku_id");	
	$db=null;
?> 