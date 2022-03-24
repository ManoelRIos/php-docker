<?php
#Buble sort é o algoritmo mais simples, porém menos eficiente.
#Cada elemento de posição i será comparado com o elemento da posição i + 1
  # caso esse elemento (i) for maior que i + 1 eles trocam de lugar.


randArray(100, 100000);

function randArray($interval, $size){
  for($i = 0; $i < $size; $i++){
    $alist[$i] = rand(0, $interval);    
  }
  bubbleSort($alist);
}

function bubbleSort($alist)
{
  for($i = 0; $i < count($alist); $i++)
  {
    for($j = 0; $j < count($alist) - 1; $j++)
    {
      if( $alist[$j] > $alist[$j+1])
      {
        $temp = $alist[$j];
        $alist[$j] = $alist[$j+1];
        $alist[$j+1] = $temp;      
      }      
    }    
  }
  print_r($alist);
}

?>


  
