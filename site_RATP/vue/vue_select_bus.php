<h3> Liste des bus </h3>

<table border="1">
    <tr>
        <td> ID Bus </td>
        <td> Matricule</td>
        <td> Marque </td>
        <td> Capacité </td>
        <td> Energie </td>
    </tr>
    <?php
    foreach($lesbus as $unbus){
        echo"<tr>";
        echo"<td>".$unbus['idbus']."</td>";
        echo"<td>".$unbus['matricule']."</td>";
        echo"<td>".$unbus['marque']."</td>";
        echo"<td>".$unbus['capacite']."</td>";
        echo"<td>".$unbus['energie']."</td>";
        echo"</tr>";
    }
?>
</table>
