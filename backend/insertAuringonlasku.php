<?php
if(!empty($_REQUEST["aika"])){
	$db = new PDO('sqlite:Auringonlasku.sqlite');
	$sql  = "SELECT MAX(Auringonlasku_id) AS MaxID FROM Auringonlaskut;";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	$Auringonlasku_id = $array[0]['MaxID'] + 1; 
	$Aika = $_REQUEST['aika'];
	$Paikka = $_REQUEST['paikka'];
	$Lat = $_REQUEST['lat'];
	$Lng = $_REQUEST['lng'];
	$Kuvaus = $_REQUEST['kuvaus'];
	$Arvio = $_REQUEST['arvio'];	
	$db->exec("INSERT INTO Auringonlaskut(Auringonlasku_id, Aika, Paikka, Lat, Lng, Arvio, Kuvaus) VALUES($Auringonlasku_id,'$Aika','$Paikka','$Lat','$Lng',$Arvio,'$Kuvaus');");	
	$db=null;
}		
?> 