<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'EnregistrerEntretien':{
		include("vues/v_entretien.php");

		break;
	}
	case 'ajoutEntretien':{
		include("vues/v_ajoutEntretien.php");
		include("vues/v_entretien.php");
		break;
	}
	case'recapEntretien': {
		include("vues/v_recapEntretien.php");
		break;
}
}
?>
