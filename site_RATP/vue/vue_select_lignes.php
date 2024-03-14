<h3> Liste des lignes </h3>

<table border="1">
    <tr>
        <td> ID ligne </td>
        <td> Description </td>
        <td> Station Début </td>
        <td> Station Fin </td>
        <td> Nb Stations </td>
        <td> Opérations </td>
    </tr>
    <?php

    foreach($leslignes as $uneligne){
        echo"<tr>";
        echo"<td>".$uneligne['idligne']."</td>";
        echo"<td>".$uneligne['description']."</td>";
        echo"<td>".$uneligne['stationDebut']."</td>";
        echo"<td>".$uneligne['stationFin']."</td>";
        echo"<td>".$uneligne['nbStations']."</td>";
        echo"<td>";
        echo"<a 
            href='index.php?page=2&action=supprimer&idligne=".
            $uneligne['idligne']."'> <img src='images/supprimer.png' heigth='50' width='50'> </a>";

            echo"<a 
            href='index.php?page=2&action=editer&idligne=".
            $uneligne['idligne']."'> <img src='images/Editer.png' heigth='50' width='50'> </a>";

        echo"</td>";
        echo"</tr>";
    }
?>

</table>
