<?php
session_start() ;

require_once 'panier.php' ;
$panier=new Panier('produit') ;
$panier->delete($_GET['id']) ;
header('Location:commande.php');
?>