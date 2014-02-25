<?php
$OK = 0;
include 'Verifications.php';
require 'Params.php';
if (isset($aerror) == true) {
 foreach ($aerror as $error) {
    echo '<p class="error">', $error, '</p>';
  }
}
//var_dump($_FILES);
?>
<!DOCTYPE html>

<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="format.css" /> 
        <meta charset="UTF-8">
        <title>Formulaire d'inscription</title>
        <br />
        <br />
        
        
        
    </head>
    <body>
        
        <h1 style="text-align:center"  > Formulaire d'inscription</h1>
        
        <form method="post" action= "" enctype="multipart/form-data">
            <div>
                <br />
                <br />
            <label for= "per_nom" > • Nom :</label>
            <input id="per_nom" type="text" name="nom" value="<?php restore('nom') ?>" />
            </div>
            <br />
            
            <div>
                <label for= "per_prenom" > • Prénom :</label>
            <input id="per_prenom" type="text" name="prenom"value="<?php restore('prenom') ?>" />
            </div>
            <br />
           
            <div>
                <label for= "per_date" > • Date de naissance (Format JJ/MM/AAAA) :</label>
                <input id="per_date" type="date" name="date"value="<?php restore('date') ?>"  />
            </div>
            <br />
            
           <div>
               
                 <label for= "per_sexe" > • Sexe :</label>
                 <select id="per_sexe" type="select" name="sexe"value="<?php restore('per_sexe') ?>" /> 
                 <option>Sélectionnez</option>
                 <option value="Masculin">Masculin</option>
                 <option value="Féminin">Féminin</option> 
                </select>
            </div>            
            <br />
             <div>
                
            <label for= "per_email" > • Adresse e-mail :</label>
            <input id="per_email" type="email" name="email"value="<?php restore('email') ?>" />
            </div>
            <br />
            
             <div>
                <label for= "per_mdp" > • Mot de passe :</label>
                <input id="per_mdp" type="password" name="mdp"value="<?php restore('mdp') ?>" />
                    
             </div>
            
            <br />
            <div>
                <label for= "per_mdp2" > • Confirmez votre mot de passe :</label>
                <input id="per_mdp" type="password" name="mdp2"value="<?php restore('mdp2') ?>" />      
             </div>
            <br />
            <div>
               • Situation professionnelle :
               
               <td>
               Chômeur : <input type="radio" name="radio" unchecked="unchecked" <?php if(isset ($_POST['radio'])) { if ($_POST['radio'] == "C") { echo "checked";} } ?> value= "C" />
               Salarié : <input type="radio" name="radio" unchecked="unchecked" <?php if(isset ($_POST['radio'])) { if ($_POST['radio'] == "S") { echo "checked";} } ?> value= "S" />
               
               </td>
            </div>
            <br />
            <div>
                <label> • Décrivez-vous :</label><br />
                <textarea cols="60" rows="7" name="textarea"><?php restore('textarea') ?></textarea>
        
            </div>
            
            <br />
            
            <div>
                <label for="loisir"> • Cochez un ou plusieurs loisirs :</label><br /> <br />
                <input id="loisir" type="checkbox" name="loisir1" value="1" <?php if (isset($_POST['loisir1']) && $_POST['loisir1']=="1") echo 'checked="checked"';?> /> <label for="loisir1">Football</label>
                <input id="loisir" type="checkbox" name="loisir2" value="2" <?php if (isset($_POST['loisir2']) && $_POST['loisir2']=="2") echo 'checked="checked"';?> /> <label for="loisir2">Gamer</label>
                <input id="loisir" type="checkbox" name="loisir3" value="3" <?php if (isset($_POST['loisir3']) && $_POST['loisir3']=="3") echo 'checked="checked"';?> /> <label for="loisir3">Cyclisme</label>
                <input id="loisir" type="checkbox" name="loisir4" value="4" <?php if (isset($_POST['loisir4']) && $_POST['loisir4']=="4") echo 'checked="checked"';?> /> <label for="loisir4">Natation</label>
                <input id="loisir" type="checkbox" name="loisir5" value="5" <?php if (isset($_POST['loisir5']) && $_POST['loisir5']=="5") echo 'checked="checked"';?> /> <label for="loisir5">Musique</label>
                <input id="loisir" type="checkbox" name="loisir6" value="6" <?php if (isset($_POST['loisir6']) && $_POST['loisir6']=="6") echo 'checked="checked"';?> /> <label for="loisir6">Tricot</label>
                <input id="loisir" type="checkbox" name="loisir7" value="7" <?php if (isset($_POST['loisir7']) && $_POST['loisir7']=="7") echo 'checked="checked"';?> /> <label for="loisir7">Pilotage</label>
                <input id="loisir" type="checkbox" name="loisir8" value="8" <?php if (isset($_POST['loisir8']) && $_POST['loisir8']=="8") echo 'checked="checked"';?> /> <label for="loisir8">Cinéphile</label>
                <input id="loisir" type="checkbox" name="loisir9" value="9" <?php if (isset($_POST['loisir9']) && $_POST['loisir9']=="9") echo 'checked="checked"';?> /> <label for="loisir9">Autre</label>
          
            </div>   
            <br />
            <div>
                <label for="per_fichier"> • Envoyez une image de profil:</label>
                <input id="per_fichier" type="file" value="<?php if(isset($_FILES['picture'])) echo $_FILES['picture']; ?>" name="picture" />
            </div>
            <br />
            <div>
                <input id = "pers_envoy" type="submit" value="Envoyer"  /> 
            </div>    
            <br />
            <div>
                <input id = "pers_reset" type="reset" value="Réinitialiser le formulaire" /> <br />
            </div>  
            
        </form>
    </body>
</html>