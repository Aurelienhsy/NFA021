<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>Sélection</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="print.css" rel="stylesheet" type="text/css" media="print" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2014 ABVL" />
<meta name="author" content="ABVL" /> 
<meta name="reply-to" content ="abvl@abvl.fr" /> 
<meta name="description" content="vente de livres"/> 
<meta name="keywords" content="livres, dictionnaire, encyclopédie"/> 

</head>

<body>
<div id="header">
<br/>
Site de l'ABVL, agence de vente en ligne de livres<br/>
<span class="petit">(dictionnaires, encyclopédies)</span>
</div>
<div id="menu">
        <a title="Présentation" href="presentation.php">Présentation</a><br/>
        <a title="Articles" href="articles.php">Articles</a><br/>
		<a title="Espace" href="espace.php">Votre espace</a><br/>
</div>	

<div id="contenu">
<?php
$mysql=new Mysqli('localhost', 'root', '', 'phpanier') ;
$result=$mysql->query('SELECT * FROM produits WHERE id = '.$_GET['id']) ;
$produits=$result->fetch_assoc() ;

require_once 'panier.php' ;
$panier=new Panier('produit') ;
$quantite=1 ;

if($produitPanier=$panier->get($_GET['id'])) {
$quantite=$produitPanier['quantite'] ;
}
?>	

<h3><?php print $produits['name'] ?> 
<?php $produits['price'] ?></h3>

<form action="ajout.php" method="post">
	<p><label>Quantité :</label>
	<input type="text" name="quantite" value="<?php print $quantite ?>"/></p>
	
	<p><input type="hidden" name="id" value="<?php print $produits['id'] ?>" />
	<input type="submit" value="Acheter" /> </p> 
	</form>
	<br/>
<p><a href="catalogue.php">Retourner au catalogue</a></p>
</div>
</body>
	<div id="foot2">
		<div id="left">	
		<div id="right"> <p id="retour"><a href="index.php">Retour à l'accueil</a></p> </div>
				<p id="copyright">
					<a href="mailto:abvl@abvl.fr">&copy; 2014, ABVL</a>
				</p>
		</div>
	</div>