<?php
    /*
    Dans ce fichier, on réalise toutes les fonctions de connexion à la BDD, deconnexion de la BDD et éxecution de l'ensemble des requêtes sur les tables de la BDD: insert, delete, update, select.
    */
    function connexion(){
        $connexion = mysqli_connect("localhost","root","","ratp_284");
        if ($connexion == null){
            echo "Erreur de connexion au serveur Mysql.";
        }
        return $connexion;
    }
    function deconnexion ($connexion){
        mysqli_close($connexion);
    }
    /** Gestion des lignes **/
    function insertLigne ($tab){
        $requete = "insert into ligne values (null, '"
        .$tab['description']."', '"
        .$tab['statdebut']."', '"
        .$tab['statfin']."', '"
        .$tab['nbStations']."') ; ";

        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete
        deconnexion($con); // deconnexion de la base de données

    }
    function selectAllLignes (){
        $requete = "select * from ligne; ";
        $con = connexion ();
        $leslignes = mysqli_query($con, $requete);
        deconnexion($con);
        return $leslignes;

    }

    function deleteLigne ($idligne){
        $requete ="delete from ligne where idligne=".$idligne;
        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function updateLigne ($tab){
        $requete="update ligne set description='"
        .$tab['description']        ."' , stationDebut='"
        .$tab['statdebut']       ."' , stationFin='"
        .$tab['statfin']         ."' , nbStations='"
        .$tab['nbStations']         ."'  where idligne="
        .$tab['idligne'];

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);

    }
    function selectWhereLigne ($idligne){
        $requete="select * from ligne where idligne=".$idligne;

        $con= connexion();
        $resultats=mysqli_query($con, $requete);
        $laligne = mysqli_fetch_assoc($resultats);
        deconnexion($con);
        return $laligne;

}
    

    /****** Gestion des bus ******/
    function insertBus ($tab){
        $requete = "insert into Bus values (null,'"
        .$tab['matricule']."', '"
        .$tab['marque']."', '"
        .$tab['capacité']."', '"
        .$tab['energie']."') ; ";

        $con = connexion (); 
        mysqli_query($con, $requete); 
        deconnexion ($con);
    }
    function selectAllBus(){
        $requete = "select * from bus; ";
        $con = connexion ();
        $lesbus = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesbus;
    }

    /****** Gestion des chauffeurs ******/ 
    function insertchauffeur ($tab){
        $requete = "insert into chauffeur values (null,'"
        .$tab['nom']."', '"
        .$tab['prenom']."', '"
        .$tab['email']."', '"
        .$tab['mdp']."', '"
        .$tab['adresse']."') ; ";

        $con = connexion (); 
        mysqli_query($con, $requete); 
        deconnexion ($con);
    } 
    
    /****** Gestion des affectations ******/ 
    function insertaffectation ($tab){
        $requete = "insert into affectation values (null,'"
        .$tab['description']."', '"
        .$tab['date affectation']."', '"
        .$tab['ligne']."', '"
        .$tab['bus']."', '"
        .$tab['chauffeur']."') ; ";

        $con = connexion (); 
        mysqli_query($con, $requete); 
        deconnexion ($con);
    }


?>