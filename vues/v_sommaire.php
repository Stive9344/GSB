    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">

        <h2>

</h2>

      </div>
        <ul id="menuList">
        <li style = "font-family: Arial Black"><?php
            $grade=$pdo->getLibelleGrade($_SESSION['codeGrade']);?>
          <?php echo $grade['0']['libelle'].':<br>'.$_SESSION['prenom']."  ".$_SESSION['nom']  ?><br><br>
        </li>
          <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a><br>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a><br>
           </li>
           <?php
           $idVisiteur=$_SESSION['idVisiteur'];
           $grade=$pdo->getGrade($idVisiteur);
           if($grade[0]['codeGrade']!=1 && $grade[0]['codeGrade']!=null){?>
             <li class="smenu">
              <a href="index.php?uc=gererEntretien&action=EnregistrerEntretien" title="Ajout des entretiens">Entretien</a><br>
           </li><?php
           }?>
           <li class="smenu">
              <a href="index.php?uc=gererHistorique&action=voirHistorique" title="Historique des entretiens">Historique entretien</a><br>
           </li>
         </br>
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a><br>
           </li>
         </ul>

    </div>
