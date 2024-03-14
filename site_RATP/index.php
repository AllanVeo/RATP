<?php
    require_once("modele/modele.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Site RATP </title>
    </head>
    <body>
    <center>
        <h1> Gestion des affectations de Bus à la RATP </h1>
        <a href="index.php?page=1">
            <img src="images/Ratp.png" height="100" width="100"></a>
        <a href="index.php?page=2">
            <img src="images/Ligne.png" height="100" width="100"></a>
        <a href="index.php?page=4">
            <img src="images/chauffeur.png" height="100" width="100"></a>
        <a href="index.php?page=3">
            <img src="images/bus.png" height="100" width="100"></a>
        <a href="index.php?page=5">
            <img src="images/Affectation.png" height="100" width="100"></a>
        <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        switch ($page){
            case 1 : require_once ("controleur/home.php"); break;
            case 2 : require_once ("controleur/gestion_lignes.php"); break;
            case 3 : require_once ("controleur/gestion_bus.php"); break;
            case 4 : require_once ("controleur/gestion_chauffeurs.php"); break;
            case 5 : require_once ("controleur/gestion_affectations.php"); break;
        }
        ?>
    </center>
    </body>
</html>