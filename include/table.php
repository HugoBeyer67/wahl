<?php 
    include("class/table.class.php");
    $tableau= new table();
    //$table->affiche();
    $tableau->chargeDatabaseData();
    //var_dump($tableau->dataTable);
 ?>

<h2><a href="liste.php">Liste de substitution</a></h2>
<table summary="Tableau présentant les oeuvres de plusieurs réalisateurs de films, plusieurs oeuvres par réaliasateur sont possibles, accompagnés de leur date de réalisation, titre et genre filmique." id="megaTab">
      <caption>Liste non exhaustive de films</caption>
      <tbody>
        <tr>
          <th id="l1c1">Realisateur</th>
          <th id="l1c2">Titre du film</th>
          <th id="l1c3">Année de réalisation</th>
          <th id="l1c4">Genre</th>
        </tr>
        <tr>
          <th id="l2c1" headers="l1c1" rowspan="2">David Lynch</th>
          <th id="l2c2" headers="l1c2 l2c1">Lost Highway</th>
          <td id=1 headers="l1c3 l2c1 l2c2"><?php echo $tableau->dataTable[0]; ?></td>
          <td id=2 headers="l1c4 l2c1 l2c2"><?php echo $tableau->dataTable[1]; ?></td>
        </tr>
        <tr>
          <th id="l3c2" headers="l1c2 l2c1">Blue Velvet</th>
          <td id=3 headers="l1c3 l2c1 l3c2"><?php echo $tableau->dataTable[2]; ?></td>
          <td id=4 headers="l1c4 l2c1 l3c2"><?php echo $tableau->dataTable[3]; ?></td>
        </tr>
      </tbody>
    </table>
    <span id="after-tab"> </span>
