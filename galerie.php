<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Gallerie Photo</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
	<?php include("include/device_script.php"); ?>  
	<script src="js/main.js"></script>
	<script src="js/galerie.js"></script>
</head>
<body>
	<?php include("include/header.php"); ?>  

	<div class="contenu gallerie-content">
        <div id="main">
			<?php include("include/galerie-template.php"); ?>
		</div> 
        <?php include("include/actus.php"); ?>    
	</div>
	<?php include("include/footer.php"); ?>  
</body>
</html
