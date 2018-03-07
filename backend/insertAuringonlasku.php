<?php
	$db = new PDO('sqlite:Auringonlasku.sqlite');
	$sql  = "SELECT Aika, Paikka, Lat, Lng, Arvio, Kuvaus FROM Auringonlaskut ORDER BY Aika DESC LIMIT 50";
	$result = $db->query($sql);
	$db->exec("INSERT INTO Auringonlaskut(Aika, Paikka, Lat, Lng, Arvio, Kuvaus) VALUES('$Aika','$Paikka','$Lat','$Lng','$Arvio','$Kuvaus');");	
	$db=null;
	header('Location:index.php') ;
	}		
}

?> 