<?php
#Este algoritmo é baseado em se passar sempre o menor valor do vetor para a primeira posição 
# (ou o maior dependendo da ordem requerida),
# depois o segundo menor valor para a segunda posição e assim sucessivamente, até os últimos dois elementos. 
randArray(10, 10);


function randArray($interval, $size){
  for($i = 0; $i < $size; $i++){
    $array[$i] = rand(0, $interval);    
  }
  echo print_r($array). '<br> <br> <br> <br>';
  selectionSort($array);
}

function selectionSort($array){
  for ($i = 0; $i < count($array) - 1; $i ++){
    for($j = $i+1; $j < count($array); $j++){
      if($array[$i] > $array[$j]) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
        echo $temp;
        
      }
    }
  }
  print_r($array);

}


?>