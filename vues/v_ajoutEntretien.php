<?php
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

  $pdo->insertEntretien($_POST['datepicker'], $objectif, $point, $commentaire, $recommandation, $_POST['participant']);

?>
