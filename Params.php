<?php



$aSexe = array('Masculin','Féminin');

sort($aSexe);

function restore($pElement)

{
   if (isset($_POST[$pElement]) == true) {
        echo 'value= "', htmlentities($_POST[$pElement], ENT_QUOTES, 'utf-8'), '"';
    }
   
}
?>