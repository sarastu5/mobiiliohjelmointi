<?php
try{	
	$db = new PDO('sqlite:Auringonlasku.sqlite');	
	$sql  = "SELECT Auringonlasku_id, Aika, Paikka, Lat, Lng, Arvio, Kuvaus FROM Auringonlaskut ORDER BY Aika DESC";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Ei toimi!" . $e);
}
$db=null;
?> 