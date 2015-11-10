<?php 
    include("class/table.class.php");
    $tableau= new table();
    $tableau->chargeDatabaseData();
 ?>
<h1>Nos Films</h1>
<p>De par son status de A.T.F (Agence à Tout Faire), Bang a aussi décide de mettre en place un banque d'information concernant les films en tout genres et de toutes époques. Cette banque de donnée est bien sur modifiable par les visiteurs de notre site.</p>
<a tabindex="38" href="liste.php" id="alt-tab">Liste de substitution au tableau</a>
<p class="conseil" tabindex="39" role="contentinfo"><b>Conseil :</b> Vous pouvez modifier les valeurs des cases du tableau ci-dessous (hors entêtes) en double cliquant sur celles ci ou en appuyant sur MAJ une fois sélectionnée. Appuyez sur la touche entrée pour valider votre modification.</p>
<table summary="Tableau modifiable présentant les oeuvres de plusieurs réalisateurs de films, plusieurs oeuvres par réaliasateur sont possibles, accompagnés de leur date de réalisation, titre et genre filmique." id="megaTab">
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
          <td tabindex="40" id=1 headers="l1c3 l2c1 l2c2"><?php echo $tableau->dataTable[0]; ?></td>
          <td tabindex="50" id=2 headers="l1c4 l2c1 l2c2"><?php echo $tableau->dataTable[1]; ?></td>
        </tr>
        <tr>
          <th id="l3c2" headers="l1c2 l2c1">Blue Velvet</th>
          <td tabindex="60" id=3 headers="l1c3 l2c1 l3c2"><?php echo $tableau->dataTable[2]; ?></td>
          <td tabindex="70" id=4 headers="l1c4 l2c1 l3c2"><?php echo $tableau->dataTable[3]; ?></td>
        </tr>
      </tbody>
    </table>
    <span id="after-tab"> </span>
