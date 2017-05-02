<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'voirHistorique':{
		if($_SESSION['codeGrade']==1){
			$lesEntretiens = $pdo->getLesEntretiens($idVisiteur);
		}else if($_SESSION['codeGrade']==2){
			$lesEntretiens=$pdo->getLesEntretiensDelegues($idVisiteur);
		}
		else{
			$lesDelegues=$pdo->getLesDeleguesDuResponsable($idVisiteur);
		}
		include("vues/v_Historique.php");

		break;
	}
}
?>
