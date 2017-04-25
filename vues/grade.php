<?php
$idVisiteur=$_POST['id'];
  include "../include/fct.inc.php";
  include "../include/class.pdogsb.inc.php";
  session_start();
  $pdo = PdoGsb::getPdoGsb();

if($idVisiteur!=null){
    $grade=$pdo->getGrade($idVisiteur);
    $libelleGradeCourant=$pdo->getLibelleGrade($grade[0]['codeGrade']);
    $libelelGradeDessus=$pdo->getLibelleGrade($grade[0]['codeGrade']+1);
    if(!empty($libelleGradeCourant[0]['libelle'])){?>
      <input type="radio" name="grade" value="<?=$grade[0]['codeGrade']?>"><?php
      echo $libelleGradeCourant[0]['libelle']."<br>";
    }
  if(!empty($libelelGradeDessus[0]['libelle'])){?>
    <input type="radio" name="grade" value="<?=$grade[0]['codeGrade']+1?>">
    <?=$libelelGradeDessus[0]['libelle']?><br><?php
  }
}?>
