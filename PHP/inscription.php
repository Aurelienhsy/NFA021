<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<title>Formulaire d'inscription</title>
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
        <a title="Présentation" href="presentation.php">Présentation</a><br/>
        <a title="Articles" href="articles.php">Articles</a><br/>
		<a title="Formulaire" href="inscription.php">Votre compte</a><br/>
</div>	
<div id="contenu">

<h2>Inscription</h2>

<p>Si vous avez déjà un compte, <a href="connexion.php">connectez-vous ici</a></p>
<br><br>
<form method="post" action="inscription.php">
<fieldset>
<p>Votre nom :</p>
<input type="text" name="nom">
<p>Votre adresse mail :</p>
<input type="email" name="mail">
<p>Votre mot de passe :</p>
<input type="password" name="pass">
<p>Répétez le mot de passe :</p>
<input type="password" name="repeatpass"><br><br>
<input type="submit" name="submit" value="Validez">
</fieldset>
</form>
<br><br>
<?php	
	if(isset($_POST['submit']))
		{
		
		$nom=htmlspecialchars(trim($_POST['nom'])) ;
		$mail=htmlspecialchars(trim($_POST['mail'])) ;
		$pass=htmlspecialchars(trim($_POST['pass'])) ;
		$repeatpass=htmlspecialchars(trim($_POST['repeatpass'])) ;
		
		if($nom&&$mail&&$pass&&$repeatpass)
		{
			if(strlen($nom)>=3)
			{
				if(strlen($pass)>=4)
			    {
					if($pass==$repeatpass)
					{
						$pass=md5($pass) ;
						
						mysql_connect('localhost', 'root', '') ;
						mysql_select_db('phpins') ;
						
						$query = mysql_query("INSERT INTO users values('', '$nom', '$mail', '$pass', '$repeatpass')") ;
						
						die('Inscription réussie, vous pouvez désormais vous <a href="connexion.php">connecter ici</a>') ;
						
					} else echo "Veuillez retaper correctement votre mot de passe" ;
				} else echo "Votre mot de passe est trop court" ;
			} else echo "Veuillez taper votre nom" ;
		} else echo "Veuillez remplir tous les champs" ;
		}
?>
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