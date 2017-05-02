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
          $idVisiteur=$_SESSION['idVisiteur'];
          $grade=$pdo->getGrade($idVisiteur);
          function refresh(){
            window.location.reload(false);
          }
          function valider(){
            $pdo->validerEntretien($idEntretien);
          }
          //Requête
          $recapEntretien = $pdo->getRecapEntretien($idEntretien);
            echo"<table>";
              echo"<h3>Date : </h3>".$recapEntretien[0]['jour'];
              echo"<h3>Nom : </h3>".$recapEntretien[0]['nomVisiteur'];
              echo"<h3>Prénom : </h3>".$recapEntretien[0]['prenomVisiteur'];
              echo"<h3>Objectif : </h3>".$recapEntretien[0]['objectif']."</br>";
              if ($recapEntretien[0]['atteint'] == 0){
                echo"Atteint : Non";
              }
              else {
                echo"Atteint : Oui";
              }
              echo"<h3>Commentaire :</h3>".$recapEntretien[0]['commentaire'];
              echo"<h3>Recommandation :</h3>".$recapEntretien[0]['recommandation'];
              echo"<h3>Etat : </h3>";
              if ($recapEntretien[0]['etatEntretien'] == 0){
                echo" Non validé";
              }
              else {
                echo" Validé";
              }
              echo"<br>";
              echo"<br>";
              echo'<input type="button" onclick="'.$pdo->validerEntretien($idEntretien).';window.location.reload(false);" value="Valider">';
              if($grade[0]['codeGrade']!=1 && $grade[0]['codeGrade']!=null){
                echo '<input type="submit" value="Modifier" name="Modifier">';
              };
            echo"</table>";
       ?>
</div>
