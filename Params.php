<?php



//$aSexe = array('Masculin','Féminin');
//
//sort($aSexe);

function restore($pElement)

{
   if (isset($_POST[$pElement]) == true) {
        echo '', htmlentities($_POST[$pElement], ENT_QUOTES, 'utf-8');
    }
   
}
?>