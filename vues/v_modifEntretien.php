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

  <?php
  $idEntretien= $_POST['idEntretien'];
  $unEntretien=$pdo->getRecapEntretien($idEntretien);
  $point=$pdo->getObjectifAtteint($idEntretien);
  ?>

  <form method="POST"  name="form_mod_entretien" id="form_mod_entretien" action="index.php?uc=gererEntretien&action=modifEntretien">
    Date: <?=$unEntretien[0]['jour']?><br><br>
    Participant : <?=$unEntretien[0]['prenomVisiteur'].' '.$unEntretien[0]['nomVisiteur']?><br><br>
    Objectif :<br>
    <TEXTAREA name="objectif" id="objectif"rows="4" cols="50%" value="TEST"><?=$unEntretien[0]['objectif']?></TEXTAREA>
    <br/>
    Points :<br>
    <input id='points' value="<?php if(!empty($point[0]['points'])){echo $point[0]['points'];}?>" type='number' min='1' max='10' name='points'> &emsp; </input>
    <br/>
    <br/>
  <div id="grade">
  </div>
    Commentaire :<br>
    <TEXTAREA name="commentaire" id="commentaire"rows="5" cols="100%"><?=$unEntretien[0]['commentaire']?></TEXTAREA>
    <br/>
    <br/>
    Recommandation :<br>
    <TEXTAREA name="recommandation" id="recommandation" rows="5" cols="100%"><?=$unEntretien[0]['recommandation']?></TEXTAREA>
    <br/>
    <br/>
    <input type="button" value="Modifier" name="modifier" onclick="verifForm()">
    <input type="reset" value="Annuler" name="annuler">
  </form>
