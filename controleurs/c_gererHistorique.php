<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'voirHistorique':{
		$lesEntretiens = $pdo->getLesEntretiens($idVisiteur);
		include("vues/v_Historique.php");

		break;
	}
}
?>
