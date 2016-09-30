<?php
session_start() ;

$mysql=new Mysqli('localhost', 'root', '', 'phpanier') ;
$result=$mysql->query('SELECT * FROM produits WHERE id = '.$_POST['id']) ;
$produits=$result->fetch_assoc() ;

require_once 'panier.php' ;

$panier=new Panier('produit') ;

$valeurs=array (
	'name'=>$produits['name'],
	'price'=>$produits['price'],
	'quantite'=>$_POST['quantite'],
	'id'=> $produits['id']
	);

$panier->set($_POST['id'], $valeurs) ;
header('Location:commande.php') ;
?>	

	
	


		