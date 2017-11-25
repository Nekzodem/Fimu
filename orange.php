<?php
try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=csv_db;charset=utf8', 'root', '');
		$bdd->query("SET NAMES 'utf8'");

	}

catch (Exception $e)
	{
		die('Erreur :' . $e->getMessage());
	}




    $requete1 = $bdd->query('SELECT * FROM DureePresence WHERE Date="2017-05-03"') OR "03/06/2017"; 
    $resultat1 = $requete1->fetchAll();
echo "<pre>";
    print_r($resultat1);
    echo "</pre>";

    $requete2 = $bdd->query('SELECT * FROM Programme_fimu_2017') OR "03/06/2017";
    $resultat2 = $requete2->fetchAll();


    $resultat = array($resultat1, $resultat2);
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
?>
    


    










