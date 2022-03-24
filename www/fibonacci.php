<?php



fibo2(1000);

function fibo1($n){
  if($n == 0){
    return 0;
  }elseif($n == 1){
    return 1;
  }else{
    $atual = fibo1($n -1) + fibo1($n-2);
    echo $atual;
    return $atual;
  }
}

function fibo2($n){
  if($n == 0){
    return 0;
  }elseif($n == 1){
    return 1;
  }else{
    $penultimo = 0;
    $ultimo = 1;
    for($i = 2; $i < $n; $i++){
      $atual = $penultimo + $ultimo;
      $penultimo = $ultimo;
      $ultimo = $atual;
      echo $atual. '<br>';
    }
    return $atual;
  }

}