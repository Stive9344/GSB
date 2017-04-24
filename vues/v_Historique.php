<div id="contenu">
    <h2>Historique</h2>
    <?php
    foreach ($lesEntretiens as $unEntretien){
      echo 'Id : '. $unEntretien['id'];
      echo '<br>';
      echo 'Commentaire : '.$unEntretien['commentaire'];
      echo '<br>';
      echo 'Recommandation : '.$unEntretien['recommandation'];
      echo '<br>';
      echo 'Date : '.$unEntretien['jour'];
      echo '<br>';
      echo '<input type="submit" value="Valider" name="valider">';
      echo '<input type="submit" value="Modifier" name="Modifier">';
      echo '<br>';
      echo "-------------";
      echo '<br>';
    }
     ?>
</div>
