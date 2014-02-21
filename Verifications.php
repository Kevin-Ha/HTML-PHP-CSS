<?php
 //var_dump($_POST);
    //Teste si le tableau POST est vide. TRUE = VIDE et FALSE = NON VIDE.
 if (empty($_POST) == false) {
       
   if(isset($_POST['nom']) == true) { //Teste si le champs est vide.
        
        if($_POST['nom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un nom.<p>';
        }else {
        ecriture($_POST['nom']);
        }
    }
    
    if(isset($_POST['prenom']) == true) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un prénom.<p>';
        }else {
        ecriture($_POST['prenom']);
        }
    }
    
    if(isset($_POST['date']) == true) { //Teste si le champs est vide.
        
        if($_POST['date'] == '') {
            $aerror[] = '<p>Veuillez renseigner une date.<p>';
        }else {
        ecriture($_POST['date']);
        }
    }
    
    if(isset($_POST['sexe']) == true) { //Teste si le champs est vide.
        
        if($_POST['sexe'] == 'Sélectionnez') {
            $aerror[] = '<p>Veuillez renseigner votre sexe.<p>';
        }else {
        ecriture($_POST['sexe']);
        }
    }
    
     if(isset($_POST['email']) == true) { //Teste si le champs est vide.
        
        if($_POST['email'] == '') {
            $aerror[] = '<p>Veuillez renseigner une adresse email.<p>';
        }else {
        ecriture($_POST['email']);
        }
    }
    
     if(isset($_POST['mdp']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp'] == '') {
            $aerror[] = '<p>Veuillez renseigner un mot de passe.<p>';
        }else {
        ecriture($_POST['mdp']);
        }
    }
    
    if(isset($_POST['mdp2']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp2'] == '') {
            $aerror[] = '<p>Veuillez confirmer votre mot de passe.<p>';
        }else {
        ecriture($_POST['mdp2']);
        }
    } 
    
    if(isset($_POST['radio']) == false) { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez renseigner votre situation professionnelle.';
    }else {
        ecriture($_POST['radio']);
        }
        
    if(isset($_POST['textarea']) == true) { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez renseigner une description de vous-même.';
        }else {
        ecriture($_POST['textarea']);
        }
   
    if(isset($_POST['checkbox[]']) == false) { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez cocher au moins une case.';  
    }else {
        ecriture($_POST['checkbox[]']);
        }
   }   
    
  function ecriture($contenu) {
    file_put_contents("fichier.txt", $contenu . "\r\n", FILE_APPEND);
}
?>

