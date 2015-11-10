<?php 
    include("class/table.class.php");
    $tableau= new table();
    $tableau->chargeDatabaseData();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Liste de films</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
	<?php include("include/device_script.php"); ?>  
	<script src="js/main.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>
<div class="contenu" role="main">
    <div id="main">
			<h2>Liste de films</a></h2>
				<ul class="alternate_list">
						<li>Realisateur : David Lynch
								<ul>
										<li>Titre du film : Lost Highway</li>
										<li>Année de réalisation : <?php echo $tableau->dataTable[0]; ?></li>
										<li>Genre : <?php echo $tableau->dataTable[1]; ?></li>
								</ul>
								<br>
								<ul>
										<li>Titre du film : Blue Velvet</li>
										<li>Année de réalisation : <?php echo $tableau->dataTable[2]; ?></li>
										<li>Genre : <?php echo $tableau->dataTable[3]; ?></li>
								</ul>
						</li>
				</ul>
		<a href="table_page.php#after-tab">Retour apres le tableau de films</a>
    </div> 
</div>
    
    <?php include("include/footer.php"); ?> 
</body>
</html>
