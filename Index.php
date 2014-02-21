<?php
include 'Verifications.php';
require 'Params.php';
if (isset($aerror) == true) {
 foreach ($aerror as $error) {
    echo '<p class="error">', $error, '</p>';
  }
}
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
        
        
        <form method="post" action="" enctype="multipart/form-data">
            <div>
                <br />
                <br />
            <label for= "per_nom" > • Nom :</label>
            <input id="per_nom" type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>"/>
            </div>
            <br />
            
            <div>
                <label for= "per_prenom" > • Prénom :</label>
            <input id="per_prenom" type="text" name="prenom"value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom']; ?>" />
            </div>
            <br />
           
            <div>
                <label for= "per_date" > • Date de naissance (Format JJ/MM/AAAA) :</label>
                <input id="per_date" type="date" name="date"value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>"  />
            </div>
            <br />
            
           <div>
               
                 <label for= "per_sexe" > • Sexe :</label>
                 <select id="per_sexe" type="select" name="sexe" />   
                 <option>Sélectionnez</option>
                 <option value="Masculin">Masculin</option>
                 <option value="Féminin">Féminin</option> 
                </select>
            </div>            
            <br />
             <div>
                
            <label for= "per_email" > • Adresse e-mail :</label>
            <input id="per_email" type="email" name="email"value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
            </div>
            <br />
            
             <div>
                <label for= "per_mdp" > • Mot de passe :</label>
                <input id="per_mdp" type="password" name="mdp" />
                    
             </div>
            
            <br />
            <div>
                <label for= "per_mdp2" > • Confirmez votre mot de passe :</label>
                <input id="per_mdp" type="password" name="mdp2" />      
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
                <label for="per_bloc"> • Décrivez-vous :<br /></label><br />
                <textarea id="per_bloc" name="textarea" cols="60" rows="7" > <?php if (isset($_POST['textarea'])) echo $_POST['textarea']; ?></textarea>
            </div>
            
            <br />
            
            <div>
                <label for="per_loisir"> • Cochez un ou plusieurs loisirs :</label><br /> <br />
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Football</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Gamer</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Cyclisme</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Natation</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Musique</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Tricot</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Pilotage</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Cinéphile</label>
                <input id="per_loisir" type="checkbox" name="checkbox[]" value="1" unchecked="unchecked" /> <label for="per_loisir">Autre</label>
            </div>   
            <br />
            <div>
                <label for="per_fichier"> • Envoyez une image de profil:</label>
                <input id="per_fichier" type="file" name="file" />
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
