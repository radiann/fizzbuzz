<?php
  echo "世界のナベアツ 問題<br />\n";

  for($i = 1; $i<101; $i++){
    $quotBy3 =floor($i / 3);
    $remBy3 = $i - ($quotBy3 * 3);
    $aho = strstr($i,'3');


   if($remBy3 == 0 ){
      echo "aho<br />\n";
    } else if ($aho != 0){
        echo "aho<br />\n";
    }else {
      echo  "$i<br />\n";
    }
   }
      ?>
