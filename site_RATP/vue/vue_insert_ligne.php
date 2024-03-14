<h3> Ajout d'une ligne </h3>

<form method="post">
    <table>
        <tr>
            <td> Description </td>
            <td> <input type="text" name="description" 
            value="<?= $laligne ['description'] ?>"></td>
        </tr>
        <tr>
            <td> Station Début </td>
            <td> <input type="text" name="statdebut"
            value="<?= $laligne ['stationDebut'] ?>"></td>
        </tr>
        <tr>
            <td> Station Fin </td>
            <td> <input type="text" name="statfin"
            value="<?= $laligne ['stationFin'] ?>"></td>
        </tr>
        <tr>
            <td> Nb Stations </td>
            <td> <input type="text" name="nbStations"
            value="<?= $laligne ['nbStations'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit"
            <?php if($laligne !=null){
                echo 'name = "Modifier" value="Modifier" ';
            }else {
                echo 'name="Valider" value="Valider"';
            }
            ?>
            ></td>
        </tr>
    </table>
    <?php
    if($laligne !=null){
        echo "<input type ='hidden' name='idligne' value='".$laligne ['idligne']."'>";
    }
    ?>
</form>