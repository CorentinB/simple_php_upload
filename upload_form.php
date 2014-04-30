<!DOCTYPE html>

<html lang="FR">

	<head>

		<meta charset="UTF-8" />
		<title>Formulaire d'upload !</title>
		<meta name="description" content="Zone de test." />
		<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>

		<div class="upload_form">

			<div class="page-header">
 				<h1>NoocoUpload <small>Service d'upload d'images</small></h1>
			</div>
			<form action="uploaded.php" method="post" enctype="multipart/form-data">
	    		<input type="file" name="monFichier" />
	    		<br><br>
	    		<input class="btn btn-success" type="submit" value="Envoyez le fichier !" />
	    		<br />
	    		<br />
	    		<h6 class="alert">Attention, seuls les fichiers jpg, jpeg, gif, bmp et png sont acceptés.</h6>
			</form>

		</div>
		
	</body>

</html>