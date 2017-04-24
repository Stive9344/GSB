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
  $pdo->insertEntretien($_POST['datepicker'], $commentaire, $recommandation);

?>
