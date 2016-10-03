<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<title>Formulaire de connection</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="print.css" rel="stylesheet" type="text/css" media="print" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2014 ABVL" />
<meta name="author" content="Aurélien Houssay" /> 
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
		<a title="Formulaire" href="inscription.php">Inscription</a><br/>
</div>	
<div id="contenu">

<h2>Connection à votre compte</h2>

<form method="post" action="">
<fieldset>
<p>Votre identifiant :</p>
<input type="text" name="ident"/>

<p>Votre adresse mail :</p>
<input type="email" name="mail"/>

<p>Votre mot de passe :</p>
<input type="password" name="pass"/><br><br/>
<input type="submit" name="submit" value="Connectez-vous"/>
</fieldset>
<br><br/>
<?php
session_start() ;	
	if(isset($_POST['submit']))
		{
		
		$ident=htmlspecialchars(trim($_POST['ident'])) ;
		$mail=htmlspecialchars(trim($_POST['mail'])) ;
		$pass=htmlspecialchars(trim($_POST['pass'])) ;
		
			if(empty($ident))
			{
			echo "Veuillez saisir votre identifiant<br/>";
			}
			else if(empty($mail))
			{
			echo "Veuillez saisir votre mail<br/>";
			}
			else if(empty($pass))
			{
			echo "Veuillez saisir votre mot de passe<br/>";
			}else
			{
			
		mysql_connect('localhost', 'root', '') ;
		mysql_select_db('phpins') ;
		
		$pass = md5($pass) ;
		$login = mysql_query ("SELECT * FROM users WHERE nom='$ident' AND mail='$mail' AND pass='$pass'");
		$rows = mysql_num_rows($login);
		if ($rows==1)
		{
			$_SESSION['ident'] = $ident ;
			header('Location:espace.php') ;
			
			} else echo "Champs mal saisis" ;
		}
		}
?>
</form>
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
