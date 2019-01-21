<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>formulaire</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="secret.css" />
        </head>
        <body>
        	<p class="presentation"> <h1> Site de la NASA </h1><br>
        		Site de la nullité acceptée sans apprentissage.<br><br><br><br>
       			 Vous vous apprétez à rentrer sur un site ultra protégé... par un mot de passe!</p>

        	  
        	
	        	<?php 
	            
	                if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
	                  { <form id="formulaire" method="post" action="secret.php">
        				<input type="password" name="password">
        				<input type="submit" value="Valider">
        				</form> } 
	                    
	             	else
	                {echo "<p>Bravo! La folie est acceptée. Voici le code d'accés 457589215349</p>";}

	            	elseif (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] != "kangourou") {
	            		echo: Vous être pas si fou. Ou alors vérifiez votre mot de passe.
	            	}
	            ?>
	        
        </body>
    </html>