<?php
if(!empty($_REQUEST["id"])){
	$db = new PDO('sqlite:Auringonlasku.sqlite');
	$sql  = "SELECT MAX(Auringonlasku_id) AS MaxID FROM Auringonlaskut;";
	$row = $db->query($sql)->fetch_assoc());
	$Auringonlasku_id = $row['MaxID'] + 1; 
	$Aika = $_REQUEST['Aika'];
	$Paikka = $_REQUEST['Paikka'];
	$Lat = $_REQUEST['Lat'];
	$Lng = $_REQUEST['Lng'];
	$Kuvaus = $_REQUEST['Kuvaus'];
	$Arvio = $_REQUEST['Arvio'];	
	$db->exec("INSERT INTO Auringonlaskut(Auringonlasku_id, Aika, Paikka, Lat, Lng, Arvio, Kuvaus) VALUES($Auringonlasku_id,'$Aika','$Paikka','$Lat','$Lng',$Arvio,'$Kuvaus');");	
	$db=null;
}		
?> 