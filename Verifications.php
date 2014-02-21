<?php
 //var_dump($_POST);
    //Teste si le tableau POST est vide. TRUE = VIDE et FALSE = NON VIDE.
   /* if (empty($_POST) == false) {
        echo 'Tableau non vide.';
    } else {
        echo'Tableau vide.';
    }*/
   
    if(isset($_POST['prenom']) == true) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un prénom.<p>';
        }
        
    }
    
    if(isset($_POST['nom']) == true) { //Teste si le champs est vide.
        
        if($_POST['nom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un nom.<p>';
        }
        
    }
    if(isset($_POST['date']) == true) { //Teste si le champs est vide.
        
        if($_POST['date'] == '') {
            $aerror[] = '<p>Veuillez renseigner une date.<p>';
        }
        
    }
    if(isset($_POST['sexe']) == true) { //Teste si le champs est vide.
        
        if($_POST['sexe'] == 'Sélectionnez') {
            $aerror[] = '<p>Veuillez renseigner votre sexe.<p>';
        }
        
    }
     if(isset($_POST['email']) == true) { //Teste si le champs est vide.
        
        if($_POST['email'] == '') {
            $aerror[] = '<p>Veuillez renseigner une adresse email.<p>';
        }
        
    }
     if(isset($_POST['mdp']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp'] == '') {
            $aerror[] = '<p>Veuillez renseigner un mot de passe.<p>';
        }
        
    }
    if(isset($_POST['textarea']) == true) { //Teste si le champs est vide.
        
        if($_POST['textarea'] == '') {
            $aerror[] = '<p>Veuillez renseigner une description de vous-même.<p>';
        }
        
    }
    
    if(isset($_POST['radio']) == true) { //Teste si le champs est vide.
        
        if($_POST['radio'] == false) {
            $aerror[] = '<p>Veuillez renseigner votre situation professionnelle.<p>';
        }
        
    }
    
    if(isset($_POST['mdp2']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp2'] == '') {
            $aerror[] = '<p>Veuillez confirmer votre mot de passe.<p>';
        }
        
    }
    
    if(($_POST['radio'] != "C") && ($_POST['radio'] != "S")) { //Teste si le champs est vide.
        
            $aerror[] = '<p>Veuillez renseigner votre situation professionnelle.<p>';
        
    }
    
    if(isset($_POST['checkbox[]']) == true) { //Teste si le champs est vide.
        
        if($_POST['checkbox[]'] == '') {
            $aerror[] = '<p>Veuillez cocher au moins une case.<p>';
        }
        
    }
    
    
    
?>

