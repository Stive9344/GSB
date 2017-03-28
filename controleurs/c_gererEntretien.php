<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'EnregistrerEntretien':{
		include("vues/v_entretien.php");

		break;
	}
}
?>
