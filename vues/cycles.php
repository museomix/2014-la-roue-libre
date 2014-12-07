<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="icon" type="image/png" href="#" />
        <link rel="stylesheet" href="cycles.css" type="text/css" />
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
                    <div class="titreCycles">
                        <p>
                            Les Cycles
                        </p>
                    </div>
                    <div id="questionCycles">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis ?
                        </p>
                    </div>
                    <div id="paraCycles">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget enim ac quam commodo ultrices at ut risus. Maecenas porta libero ex, nec mollis odio rhoncus eu. Aliquam eget odio iaculis.
                        </p>
                    </div>
                    <div id="photos">
                        <div class="conteneurPhotoTitre">
                            <a href="#" onclick="signalEtRedirection('gauche');" >
                                <img class="imgCercle" src="../images/1.jpg">
                            </a>
                        </div>
                        <div class="conteneurPhotoTitre">
                            <a href="#" onclick="signalEtRedirection('centre');">
                                <img class="imgCercle" src="../images/2.jpg">
                            </a>
                        </div>
                        <div class="conteneurPhotoTitre">
                            <a href="#" onclick="signalEtRedirection('droite');">
                                <img class="imgCercle" src="../images/3.jpg">
                            </a>
                        </div>
                    </div>
                     <div class="titreCycles">
                        <p>
                            Plan de la pièce
                        </p>
                    </div>
                    <div id="conteneurPlan">
                        <div id="plan">
                            <img id="imgPlan" src="../images/plan.jpg">
                        </div>
                    </div>
                </div><!-- contenu -->
            </div><!-- fin bloc-principal -->
            <div id="footer">
            </div>
        </div><!-- fin page -->
    </body>
    <script type="text/javascript">
        function signalEtRedirection(direction){
            //Déclaration de la requete ajax
            xhr = new XMLHttpRequest();
            
            //Redirection
            document.location.href="accueil.php";

            //Envoie du hit
            xhr.open('GET', 'http://192.168.246.217:5000/light/0/'+direction , null);
            
            //Envoie de la requête à la page de traitement
            xhr.send(null);
        }
    </script>
</html>
