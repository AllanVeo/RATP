<h2> Gestion des chauffeurs </h2>

<?php
    require_once ("vue/vue_insert_chauffeur.php");
    if (isset($_POST['Valider'])){
        //insertion des chauffeurs dans la table des chauffeurs
        insertchauffeur ($_POST);
        echo "<br> Insertion réussie des chauffeurs.";
        }
    $leschauffeurs = selectAll();
    require_once ("vue/vue_select_chauffeurs.php");
?>