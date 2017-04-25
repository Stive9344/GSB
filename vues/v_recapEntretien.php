
      <?php
          $idEntretien = $_POST['idEntretien'];

          //Requête
          $recapEntretien = $pdo->getRecapEntretien($idEntretien);
            echo"<table>";
              echo"<h3>Date : </h3>".$recapEntretien[0]['jour'];
              echo"<h3>Nom : </h3>".$recapEntretien[0]['nomVisiteur'];
              echo"<h3>Prénom : </h3>".$recapEntretien[0]['prenomVisiteur'];
              echo"<h3>Commentaire :</h3>".$recapEntretien[0]['commentaire'];
              echo"<h3>Recommandation :</h3>".$recapEntretien[0]['recommandation'];
              echo '<input type="submit" value="Valider" name="valider">';
              echo '<input type="submit" value="Modifier" name="Modifier">';
            echo"</table>";
       ?>
