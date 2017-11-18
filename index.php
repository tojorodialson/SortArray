<?php
    // indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
    $json = file_get_contents("data.json");
    $data = json_decode($json);
    $result = $data->{'operations'};

    asort($result, SORT_ASC);

?>
<table width="100%" border="1">
    <tr>
        <td>RIB</td>
        <td>Date</td>
        <td>Libelle</td>
        <td>Montant</td>
    </tr>
    <?php
        foreach ($result as $key => $row){
            $date = $row->Date ;
            $rib = $row->RIB;
            $libelle = $row->Libelle;
            $montant = $row->Montant;
    ?>
    <tr>
        <td><?php echo $rib ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $libelle ?></td>
        <td><?php echo $montant ?></td>
    </tr>
    <?php } ?>
</table>
