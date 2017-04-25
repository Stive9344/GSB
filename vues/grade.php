<?php
$idVisiteur=$_POST['id'];
  include "../include/fct.inc.php";
  include "../include/class.pdogsb.inc.php";
  session_start();
  $pdo = PdoGsb::getPdoGsb();

if($idVisiteur!=null){
    $test=$pdo->getGrade($idVisiteur);
    $test1=$pdo->getLibelleGrade($test[0]['codeGrade']);
    $test2=$pdo->getLibelleGrade($test[0]['codeGrade']+1);
    if(!empty($test1[0]['libelle'])){?>
      <input type="radio" name="grade" value="test"><?php
      echo $test1[0]['libelle']."<br>";
    }
  if(!empty($test2[0]['libelle'])){?>
    <input type="radio" name="grade" value="test">
    <?=$test2[0]['libelle']?><br><?php
  }
}?>
