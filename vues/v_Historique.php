<div id="contenu">
    <h2>Historique</h2>
    <form method="POST" action="index.php?uc=gererEntretien&action=recapEntretien">
    <?php
    if($_SESSION['codeGrade']==3 || $_SESSION['codeGrade']==4){
      foreach($lesDelegues as $unDelegue){
        echo "Delegué : ".$unDelegue['nom']." ".$unDelegue['prenom']."<br><br>";
        $lesEntretiens=$pdo->getLesEntretiensDelegues($unDelegue['id']);
        foreach ($lesEntretiens as $unEntretien){
          echo 'Entretien n°'.$unEntretien['id'];
          echo '<br>Visiteur : '.$unEntretien['prenom'].' '.$unEntretien['nom'];
          echo '<input type="hidden" value="'.$unEntretien['id'].'" name="idEntretien" />';
          echo '<br>';
          echo 'Date : '.$unEntretien['jour'];
          echo '<br>';
          echo '<input type="submit" value="Details" name="Details">';
          echo '<br>';
          echo '<br>';
          echo '</form>';
        }
      }
    }
    else{
      foreach ($lesEntretiens as $unEntretien){
        echo 'Entretien n°'.$unEntretien['id'];
        if($_SESSION['codeGrade']==2){
          echo '<br>Visiteur : '.$unEntretien['prenom'].' '.$unEntretien['nom'];
        }
        echo '<input type="hidden" value="'.$unEntretien['id'].'" name="idEntretien" />';
        echo '<br>';
        echo 'Date : '.$unEntretien['jour'];
        echo '<br>';
        echo '<input type="submit" value="Details" name="Details">';
        echo '<br>';
        echo '<br>';
      }
    }
     ?>
   </form>
</div>
