<?php
if(!empty($_REQUEST["id"])){
	$Auringonlasku_id = $_REQUEST['id'];
	$Aika = $_REQUEST['Aika'];
	$Paikka = $_REQUEST['Paikka'];
	$Lat = $_REQUEST['Lat'];
	$Lng = $_REQUEST['Lng'];
	$Kuvaus = $_REQUEST['Kuvaus'];
	$Arvio = $_REQUEST['Arvio'];	
	$db = new PDO('sqlite:Auringonlasku.sqlite');
	$db->exec("INSERT INTO Auringonlaskut(Auringonlasku_id, Aika, Paikka, Lat, Lng, Arvio, Kuvaus) VALUES($Auringonlasku_id,'$Aika','$Paikka','$Lat','$Lng',$Arvio,'$Kuvaus');");	
	$db=null;
}		
?> 