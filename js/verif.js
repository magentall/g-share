function validation(f) {
  if (f.mdp1.value == '' || f.mdp2.value == '') {
    alert('Tous les champs ne sont pas remplis');
    f.mdp1.focus();
    return false;
    }
  else if (f.mdp1.value != f.mdp2.value) {
    alert('Ce ne sont pas les mêmes mots de passe!');
    f.mdp1.focus();
    return false;
    }
  else if (f.mdp1.value == f.mdp2.value) {
    return true;
    }
  else {
    f.mdp1.focus();
    return false;
    }
  }
