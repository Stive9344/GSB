
      <?php
          $idEntretien = $_POST['idEntretien'];

          //Requête
          $recapEntretien = $pdo->getRecapEntretien($idEntretien);
          echo"<table>";
            echo"<tr>";
              echo"<td>Date : ".$recapEntretien[0]['jour']."</td>";
            echo"</tr>";
            echo"<tr>";
              echo"<h3>Participant :</h3>";
                echo"<tr>";
                  echo"<h3>Nom : ".$recapEntretien[0]['nomVisiteur']."</h3>";
                  echo"<h3>Prénom : ".$recapEntretien[0]['prenomVisiteur']."</h3>";
                echo"</tr>";
            echo"</tr>";
          echo"</table>";

          echo"<h3>Commentaire :</h3>";
          echo"<table>";

              echo"<tr>";
                echo"<td>".$recapEntretien[0]['commentaire']."</td>";
              echo"</tr>";

          echo"</table>";

          echo"<h3>Recommandation :</h3>";
          echo"<table>";

              echo"<tr>";
                echo"<td>".$recapEntretien[0]['recommandation']."</td>";
              echo"</tr>";

          echo"</table>";
          echo"<table>";
            echo '<input type="submit" value="Valider" name="valider">';
            echo '<input type="submit" value="Modifier" name="Modifier">';
          echo"</table>";
       ?>
