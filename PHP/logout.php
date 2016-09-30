<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<title>Espace client</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="print.css" rel="stylesheet" type="text/css" media="print" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2014 ABVL" />
<meta name="author" content="ABVL" /> 
<meta name="reply-to" content ="abvl@abvl.fr" /> 
<meta name="description" content="vente de livres"/> 
<meta name="keywords" content="livres, dictionnaire, encyclopédie"/> 
<body>	
<div id="header">
<br/>
Site de l'ABVL, agence de vente en ligne de livres<br/>
<span class="petit">(dictionnaires, encyclopédies)</span>
</div>

<div id="menu">
        <a title="Présentation" href="presentation.html">Présentation</a><br/>
        <a title="Articles" href="articles.html">Articles</a><br/>
		<a title="Formulaire" href="formulaire.php">Formulaire</a><br/>
</div>	
<div id="contenu">

<?php
session_start() ;

session_destroy();

header('Location:connexion.php');

?>
<br/><br/>

</div>
</body>
	<div id="foot2">
		<div id="left">	
		<div id="right"> <p id="retour"><a href="index.html">Retour à l'accueil</a></p> </div>
				<p id="copyright">
					<a href="mailto:abvl@abvl.fr">&copy; 2014, ABVL</a>
				</p>
		</div>
	</div>