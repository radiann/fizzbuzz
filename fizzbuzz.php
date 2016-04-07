<?php
  echo "Fizz Buzz 問題<br />\n";

  for($i = 1; $i<101; $i++){
    $quotBy3 =floor($i / 3);
    $remBy3 = $i - ($quotBy3 * 3);
    $quotBy5 =floor($i / 5);
    $remBy5 = $i - ($quotBy5 * 5);

    if ($remBy3 == 0 && $remBy5 == 0){
     echo "FizzBuzz<br />";}
  else  if($remBy3 == 0 ){
      echo "Fizz<br />";
    } else if ($remBy5 == 0){
        echo "Buzz<br />";
    }else {
      echo  "$i<br />";
    }
   }
      ?>
