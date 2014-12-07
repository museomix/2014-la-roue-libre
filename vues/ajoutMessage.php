<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="icon" type="image/png" href="#" />
        <link rel="stylesheet" href="ajoutMessage.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="centrage.css">
        <title>Cycles | Museomix</title>
        <script type="text/javascript" src="accueil.js">   
        </script>
    </head>
    <body>
        <div id="page">
            <div id="header">
            </div>
            <div id="bloc-principal">
                <div id="contenu">
                    <form action="sauvegarde_message.php" method="post">
                        <div id="consigne">
                            <p>Mon anecdote à vélo...</p>
                            <p>Vous vous souvenez de votre première expérience à vélo ?</p>
                            <p>Vous avez vécu une expérience à vélo qui mérite d'être raconté ?</p>
                            <p>Partagez là avec nous ! et n'oubliez pas de signer de signer !</p>
                        </div>
                        <div id="commentaire">
                            <div id="cconteneurTextarea">
                                <textarea id="text" name="text"></textarea>
                            </div>
                        </div>
                        <div id="conteneurBouton">
                            <div id="bouton">
                                <input type="image" id="boutonImage" src="../images/mot_bouton.png">
                            </div>
                        </div>
                        <div id="conteneurBouton">
                            <p>Et j'accède aux histoire des autres visiteurs !</p>
                        </div>
                    </form>
                 </div><!-- contenu -->
            </div><!-- fin bloc-principal -->
            <div id="footer">
            </div>
        </div><!-- fin page -->
    </body>
</html>
