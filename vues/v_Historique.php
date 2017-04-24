<div id="contenu">
    <h2>Historique</h2>
    <?php
    foreach ($lesEntretiens as $unEntretien){
      echo '<form method="POST" action="index.php?uc=gererEntretien&action=recapEntretien">';
      echo 'Entretien n°'.$unEntretien['id'];
      echo '<input type="hidden" value="'.$unEntretien['id'].'" name="idEntretien" />';
      echo '<br>';
      echo 'Date : '.$unEntretien['jour'];
      echo '<br>';
      echo '<input type="submit" value="Details" name="Details">';
      echo '<br>';
      echo '<br>';
      echo '</form>';
    }
     ?>
</div>
