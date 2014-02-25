<?php
 $Compteur = 0;

 if (empty($_POST) == false) {
    
  
     
   if(isset($_POST['nom']) == true) { //Teste si le champs est vide.
        
        if($_POST['nom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un nom.<p>';
        }else {
        ecriture($_POST['nom']);
        $Compteur = $Compteur + 1;
        }
    }
    
    if(isset($_POST['prenom']) == true) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un prénom.<p>';
        }else {
        ecriture($_POST['prenom']);
        $Compteur = $Compteur + 1;
        }
    }
    
    if(isset($_POST['date']) == true) { //Teste si le champs est vide.
        
        if($_POST['date'] == '') {
            $aerror[] = '<p>Veuillez renseigner votre date de naissance.<p>';
        }else {
        ecriture($_POST['date']);
        $Compteur = $Compteur + 1;
        }
    }
    
    if(isset($_POST['sexe']) == true) { //Teste si le champs est vide.
        
        if($_POST['sexe'] == 'Sélectionnez') {
            $aerror[] = '<p>Veuillez renseigner votre sexe.<p>';
        }else {
        ecriture($_POST['sexe']);
        $Compteur = $Compteur + 1;
        }
    }
    
     if(isset($_POST['email']) == true) { //Teste si le champs est vide.
        
        if($_POST['email'] == '') {
            $aerror[] = '<p>Veuillez renseigner une adresse email.<p>';
        }else {
        ecriture($_POST['email']);
        $Compteur = $Compteur + 1;
        }
    }
    
     if(isset($_POST['mdp']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp'] == '') {
            $aerror[] = '<p>Veuillez renseigner un mot de passe.<p>';
        }else {
        ecriture($_POST['mdp']);
        $Compteur = $Compteur + 1;
        }
    }
    
    if(isset($_POST['mdp2']) == true) { //Teste si le champs est vide.
        
        if($_POST['mdp2'] == '') {
            $aerror[] = '<p>Veuillez confirmer votre mot de passe.<p>';
        }else {
        ecriture($_POST['mdp2']);
        $Compteur = $Compteur + 1;
        }
    } 
    
    if(isset($_POST['radio']) == false) { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez renseigner votre situation professionnelle.';
    }else {
        ecriture($_POST['radio']);
        $Compteur = $Compteur + 1;
        }
        
    if(isset($_POST['textarea']) == "") { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez renseigner une description de vous-même.';
        }else {
        ecriture($_POST['textarea']);
        $Compteur = $Compteur + 1;
        }
   
    if ( (isset($_POST['loisir1']) == '') && (isset($_POST['loisir2']) == '') && (isset($_POST['loisir3']) == '') && (isset($_POST['loisir4']) == '') && (isset($_POST['loisir5']) == '') && (isset($_POST['loisir6']) == '') && (isset($_POST['loisir7']) == '') && (isset($_POST['loisir8']) == '') && (isset($_POST['loisir9']) == '') ) { //Teste si le champs est vide.
        
            $aerror[] = 'Veuillez cocher au moins une case.';  
//    }else {
//        ecriture(($_POST['loisir1']) || ($_POST['loisir2']) || ($_POST['loisir3']) || ($_POST['loisir4']) || ($_POST['loisir5']) || ($_POST['loisir6']) || ($_POST['loisir7']) || ($_POST['loisir8']) || ($_POST['loisir9']) );
//        $Compteur = $Compteur + 1;
        }

    }

            if($Compteur == 9){
            header ('location:InscriptionValide.php');
            $OK = 1;
        }
                    if($OK == 1)
                    {
                        $dossier = 'Users/' . $_SERVER["REMOTE_ADDR"] . '/'; 
                        mkdir($dossier);
                        $file = fopen($dossier . "Donnees.txt", "w+");
                  
                        fwrite($file, 'Date et Heure: ' .  date('d/m/Y H:i:s')  .   PHP_EOL);
                        fwrite($file, 'nom: ' .$_POST['nom']  .   PHP_EOL);
                        fwrite($file, 'prenom: ' .$_POST['prenom']     .      PHP_EOL);
                        fwrite($file, 'date: ' .$_POST['date']  .   PHP_EOL);
                        fwrite($file, 'sexe: ' .$_POST['sexe']  .   PHP_EOL);
                        fwrite($file, 'email: ' .$_POST['email']  .   PHP_EOL);
                        fwrite($file, 'mdp: ' .$_POST['mdp']  .   PHP_EOL);
                        fwrite($file, 'mdp2: ' .$_POST['mdp2']  .   PHP_EOL);
                        fwrite($file, 'textarea: ' .$_POST['textarea']  .   PHP_EOL);
                        fclose($file); 
                        $cheminTMP = $_FILES['per_fichier']['tmp_name'];
                        $cheminNouveau = $Utilisateurs . $_FILES['per_fichier']['name'];
                        move_uploaded_file($cheminTMP, $cheminNouveau);
                        

                    }
       
 
       
function ecriture($contenu) {
    file_put_contents("Users/reponses.txt", $contenu . "\r\n", FILE_APPEND);
 }
 
 
?>