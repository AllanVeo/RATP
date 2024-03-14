<h2> Gestion des lignes </h2>

<?php
$laligne = null;
    if (isset($_GET['action']) && isset($_GET['idligne']))
    {
        $action = $_GET['action'];
        $idligne = $_GET['idligne'];
        switch ($action){
            case "supprimer" : deleteLigne ($idligne); break;
            case "editer" : 
            $laligne = selectWhereLigne($idligne);
            
            break;
        }
    }
    require_once ("vue/vue_insert_ligne.php");
    if (isset($_POST['Valider'])){
        //insertion de la ligne dans la table de ligne
        insertLigne ($_POST);
        echo "<br> Insertion réussie de la ligne.";
    }

    if(isset($_POST['Modifier']))
    {
        updateLigne ($_POST);
        //recharger la page
    }
    //extraction des lignes
    $leslignes = selectAllLignes();
    require_once ("vue/vue_select_lignes.php");
?>