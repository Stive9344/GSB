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
  $pdo->insertEntretien($_POST['datepicker'], $objectif, $commentaire, $recommandation, $_POST['participant']);

?>
