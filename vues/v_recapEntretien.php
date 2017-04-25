<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div id="contenu">
      <h2>Recapitulatif Entretien</h2>
      <?php
          $idEntretien = $_POST['idEntretien'];

          //Requête
          $recapEntretien = $pdo->getRecapEntretien($idEntretien);
            echo"<table>";
              echo"<h3>Date : </h3>".$recapEntretien[0]['jour'];
              echo"<h3>Nom : </h3>".$recapEntretien[0]['nomVisiteur'];
              echo"<h3>Prénom : </h3>".$recapEntretien[0]['prenomVisiteur'];
              echo"<h3>Objectif : </h3>".$recapEntretien[0]['objectif'];
              echo"<h3>Commentaire :</h3>".$recapEntretien[0]['commentaire'];
              echo"<h3>Recommandation :</h3>".$recapEntretien[0]['recommandation'];
              echo"<br>";
              echo"<br>";
              echo '<input type="submit" value="Valider" name="valider">';
              echo '<input type="submit" value="Modifier" name="Modifier">';
            echo"</table>";
       ?>
</div>
