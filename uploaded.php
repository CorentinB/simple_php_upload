<!DOCTYPE html>

<html lang="FR">

	<head>

		<meta charset="UTF-8" />
		<title>Image envoy&eacute; !</title>
		<meta name="description" content="Zone de test." />
		<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>

    	<div class="uploaded">

		<?php
			
			// On teste si le fichier a bien été envoyé et s'il n'y a pas d'erreur
			if (isset($_FILES['monFichier']) && $_FILES['monFichier']['error'] == 0) {

				// On teste si le fichier ne pèse pas plus de 2 Mo soit 2 000 000 d'octets
				if ($_FILES['monFichier']['size'] <= 2097152) {

					// On teste si l'extension est autorisée
					$infosFichier = pathinfo($_FILES['monFichier']['name']);
					$extension_upload = $infosFichier['extension'];
					$extensions_autorisées = array('png', 'jpeg', 'jpg', 'gif', 'bmp');
					if (in_array($extension_upload, $extensions_autorisées)) {

						// On peut valider le fichier et le stocker définitivement
						$nomFichier = rand();
						$extensionFichier = $infosFichier['extension'];
						move_uploaded_file($_FILES['monFichier']['tmp_name'], 'uploads/' . $nomFichier . '.' . $extensionFichier); ?>
						<div class="alert alert-success">L'image a bien &eacute;t&eacute; envoy&eacute;e !</div> <?php
						$cheminFichier =  'http://upload.nooco.fr/uploads/' . $nomFichier . '.' . $extensionFichier; 

						////////////////////////////////////////// Liens vers l'image //////////////////////////////////////////
						

						echo '<a href="' . $cheminFichier . '"> Pour acceder ' . '&agrave' . ' votre image, cliquez ici !' . '</a>';
						echo '<br /><br />';
						echo '<b>' . 'Lien de l\'image' . '</b>' . ' : ' . $cheminFichier;
						echo '<br />';
						echo '<b>' . 'Intégrer dans un site web' . '</b>' . ' : ' . '&lta href="' . $cheminFichier . '"&gt&ltimg src="' . $cheminFichier . '" border="0" alt="' . $nomFichier . '.' . $extensionFichier . '" title="' . $nomFichier . '.' . $extensionFichier . '"/&gt&lt/a&gt';
						echo '<br />';
						echo '<b>' . 'Intégrer sur un forum' . '</b>' . ' : ' . '[url=' . $cheminFichier . ']' . '[img]' . $cheminFichier . '[/img][/url]';
						echo '<br />';
			
					}

					else {
						echo '<div class="alert alert-error">'.'<b>'.'Le format de votre image n\'est pas accept'.'&eacute;'.'</b>'.', veuillez r'.'&eacute;'.'essayer.'.'</div>';
					}
				}

				else {
					echo '<div class="alert alert-error">'.'<b>'.'Le fichier que vous avez tent'.'&eacute;'.' d\'envoyer est trop volumineux,'.'</b>'.' veuillez r'.'&eacute;'.'essayer.'.'</div>'; 
				}
			}

			else {
				echo '<div class="alert alert-error">'.'<b>'.'Une erreur est survenue,'.'</b>'.'veuillez r'.'&eacute;'.'essayer.'.'</div>';
			}

			?>

		</div>

	</body>

</html>