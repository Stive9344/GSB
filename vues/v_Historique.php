<div id="contenu">
    <h2>Historique</h2>
    <?php
    foreach ($lesEntretiens as $unEntretien){
      echo '<from action="index.php?uc=gererEntretien&action=recapEntretien" method="POST">';
      echo 'Entretien '. $unEntretien['id'];
      echo '<br>';
      echo 'Date : '.$unEntretien['jour'];
      echo '<br>';
      echo '<input type="submit" value="Details" name="Details">';
      echo '<br>';
      echo "-------------";
      echo '<br>';
      echo '</from>';
    }
     ?>
</div>
