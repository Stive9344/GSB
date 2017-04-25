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

<script src="include/fct.inc.js"></script>
  <form method="POST" action="index.php?uc=gererEntretien&action=ajoutEntretien">
    <p>Date: <input type="text" name="datepicker"id="datepicker"></p>
    <label>Participant :<label>
      <?php
      $allVisiteur=$pdo->getAllVisiteur();
      ?>
    <select name="participant" id="participant" size="1" onchange="loadPart('vues/grade.php', 'grade', this.value); deloptions(this.value)">
      <option value="null">-------------------------</option>
      <?php
        for($i=0; $i<sizeof($allVisiteur);$i++){
          if($_SESSION['idVisiteur']!=$allVisiteur[$i]['id']){?>
          <option value="<?=$allVisiteur[$i]['id']?>"><?=$allVisiteur[$i]['nom'].' '.$allVisiteur[$i]['prenom']?></option><?php
        }
      }
       ?>
    </select><br><br>
    Objectif :<br>
    <TEXTAREA name="objectif" id="objectif"rows="4" cols="50%"></TEXTAREA>
    <br/>
    Points :<br>
    <input id='points' type='number' min='1' max='10' name='points'> &emsp; </input>
    <br/>
    <br/>
  <div id="grade">
  </div>
    Commentaire :<br>
    <TEXTAREA name="commentaire" id="commentaire"rows="5" cols="100%"></TEXTAREA>
    <br/>
    <br/>
    Recommandation :<br>
    <TEXTAREA name="recommandation" id="recommandation" rows="5" cols="100%"></TEXTAREA>
    <br/>
    <br/>
    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler">
  </form>

</div>
