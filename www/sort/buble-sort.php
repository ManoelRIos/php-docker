<?php
#Buble sort é o algoritmo mais simples, porém menos eficiente.
#Cada elemento de posição i será comparado com o elemento da posição i + 1
  # caso esse elemento (i) for maior que i + 1 eles trocam de lugar.


randArray(100, 100000);

function randArray($interval, $size){
  for($i = 0; $i < $size; $i++){
    $array[$i] = rand(0, $interval);    
  }
  bubbleSort($array);
}

function bubbleSort($array)
{
  for($i = 0; $i < count($array); $i++)
  {
    for($j = 0; $j < count($array) - 1; $j++)
    {
      if( $array[$j] > $array[$j+1])
      {
        $temp = $array[$j];
        $array[$j] = $array[$j+1];
        $array[$j+1] = $temp;      
      }      
    }    
  }
  print_r($array);
}

?>


  
