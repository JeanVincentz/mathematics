<?php //Création de deux tableau ;
   $tableau = array();
   $tableau1 = array();
   $tableau2 = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 100); //Génère une valeur aléatoire avec rand(valeur pseudoaléatoire, comprise entre min et max) ->donc un rand(0, 100);
      $i++;	  
   }
   foreach($tableau as $t) {
      if($t < 50) {
         $tableau1[] = $t;
      } else {
         $tableau2[] = $t;		  
      }
   }
   
   echo 'Tableau 1 : '; //echo du tableau 1
   foreach($tableau1 as $t1) {
      echo $t1.' ';
   }
   
   echo '<br />Tableau 2 : '; //echo du tableau 2
   foreach($tableau2 as $t2) {
      echo $t2.' ';
   }
