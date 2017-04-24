<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy-mm-dd'
    }).val();
  } );
  </script>
<div id="contenu">
      <h2>Entretien</h2>



  <form method="POST" action="index.php?uc=gererEntretien&action=ajoutEntretien">
    <p>Date: <input type="text" name="datepicker"id="datepicker"></p>
    <label>Participant :<label>
      <?php
      $allVisiteur=$pdo->getAllVisiteur();
      ?>
    <select name="participant" id="participant" size="1">
      <option value="default">-------------------------</option>
      <?php
        for($i=0; $i<sizeof($allVisiteur);$i++){?>
          <option value="<?=$allVisiteur[$i]['id']?>"><?=$allVisiteur[$i]['nom'].' '.$allVisiteur[$i]['prenom']?></option><?php
        }
       ?>
    </select><br><br>
    Commentaire :<br>
    <TEXTAREA name="commentaire" id="commentaire"rows="10" cols="100%"></TEXTAREA>
    <br/>
    <br/>
    Recommandation :<br>
    <TEXTAREA name="recommandation" id="recommandation" rows="10" cols="100%"></TEXTAREA>
    <br/>
    <br/>
    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler">
  </form>

</div>
