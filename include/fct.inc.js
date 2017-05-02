function getXHR() // création d'un objet qui récupère une valeur
{
    var xhr=null;

    if (window.XMLHttpRequest) { // selon le navigateur
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else{
        alert("Votre navigateur ne supporte pas l'importation XMLHttpRequest");
        return false;
    }

    return xhr;
}

function loadPart(fileName, divId, id = null){
    var xhr = getXHR();
    xhr.open('POST',fileName,true); // true : asynchronisation
    xhr.onreadystatechange = function(){ //fonction executée qd le statut change
        if (xhr.readyState == 4){ //statut = 4 quand on a recu les donnees
            if (document.getElementById){
                document.getElementById(divId).innerHTML = xhr.responseText;
            }
        }


    }
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	var data = 'id='+id;
    xhr.send(data);
}

function deloptions(options){
  if(document.getElementById('participant').options[0].value == "null")
        document.getElementById('participant').remove(0);
}

function verifForm(){
  var ready = true;
  var msg = "Vous avez oublié les champs suivants:\n";
  var msgBegin = true;

  var styleBorder = "1px solid rgba(255, 0, 0, .8)";
  var styleFile = "border: 1px solid rgba(255, 0, 0, .8); border-radius: 3px;";

  if(document.getElementById('participant').value=='null'){
    document.getElementById('participant').style.border = styleBorder;
    msg += "Le nom du participant";
    msgBegin = false;
    ready = false;
  }

  if(document.getElementById('datepicker').value==''){
    document.getElementById('datepicker').style.border = styleBorder;
    if(!msgBegin){
      msg += ", ";
    }
    else{
      msgBegin = false;
    }
    msg += "La date de l'entretien";
    ready = false;
  }

  if(document.getElementById('objectif').value!=''){
    if(document.getElementById('points').value==''){
      document.getElementById('points').style.border = styleBorder;
      if(!msgBegin){
        msg += ", ";
      }
      else{
        msgBegin = false;
      }
      msg += "Le nombre de point pour un objectif";
      ready = false;
    }
  }
  if(!msgBegin){
    msg += ".";
  }

  //message indiquant les champs manquants
  if(!ready){
    alert(msg);
  }
  else{
    document.getElementById('form_add_entretien').submit();
  }
}
