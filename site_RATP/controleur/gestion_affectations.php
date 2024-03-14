<h2> Gestion des affectations </h2>

<?php
    require_once ("vue/vue_insert_affectation.php");
    if(isset($_POST['Valider'])){
        //insertion des affections dans la table des affectations
        insertaffectation ($_POST);
        echo "<br> Insertion réussie des affectations.";
        }
    require_once ("vue/vue_select_affectations.php");
?>