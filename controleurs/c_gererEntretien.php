<?php
function msgTrue($msg) {
    echo '<div class="msgTrue">'.$msg.'</div>';
}

/**
 * Affiche un message d'erreur sur fond rouge.
 * @param string $msg
 */
function msgFalse($msg) {
    echo '<div class="msgFalse">'.$msg.'</div>';
}
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'EnregistrerEntretien':{
		include("vues/v_entretien.php");
		break;
	}
	case 'ajoutEntretien':{
		if(!empty($_POST['commentaire'])){
    $commentaire=$_POST['commentaire'];
  }
  else {
    $commentaire=null;
  }
  if(!empty($_POST['recommandation'])){
    $recommandation=$_POST['recommandation'];
  }
  else {
    $recommandation=null;
  }
  if(!empty($_POST['objectif'])){
    $objectif=$_POST['objectif'];
  }
  else {
    $objectif=null;
  }
  if(!empty($_POST['points'])){
    $points=$_POST['points'];
  }
  else {
    $points=null;
  }
  if(!empty($_POST['grade'])){
    $grade=$_POST['grade'];
  }
	else{
		$grade=1;
	}
  if($idEntretien=$pdo->insertEntretien($_POST['datepicker'], $objectif, $points, $commentaire, $recommandation, $_POST['participant'], $grade)){
		msgTrue('Entretien n°'.$idEntretien.' ajouté !');
	}
	else{
		msgFalse('Entretien non ajouté, veuillez contactez léquipe technique');
	}
		include("vues/v_entretien.php");
		break;
	}
	case'recapEntretien': {
		include("vues/v_recapEntretien.php");
		break;
	}
	case 'modifEntretien':{
		include('vues/v_modifEntretien.php');
		break;
	}
	case 'setEntretien':{
		$idEntretien=$_POST['idEntretien'];
		$commentaire=$_POST['commentaire'];
		$recommandation=$_POST['recommandation'];
		$objectif=$_POST['objectif'];
		$points=$_POST['points'];
		$idObjectif=$_POST['idObjectif'];
		$ancienObjectif=$_POST['ancienObjectif'];
		$ancienPoint=$_POST['ancienPoint'];
		$ancienCommentaire=$_POST['ancienCommentaire'];
		$ancienRecommandation=$_POST['ancienRecommandation'];

		if($pdo->setEntretien($idEntretien, $commentaire, $recommandation, $objectif, $points, $idObjectif, $ancienObjectif, $ancienPoint, $ancienCommentaire, $ancienRecommandation)){
			msgTrue('Entretien n°'.$idEntretien.' modifié');
		}
		else{
			msgFalse('Entretien n°'.$idEntretien.' non modifié. Veuillez réessayez !');
		}
	}

}
?>
