<?php

$name = $_POST['aluno']['name'];
$email = $_POST['aluno']['email'];
$age = $_POST['aluno']['age'];
$np1 = $_POST['aluno']['np1'];
$np2 = $_POST['aluno']['np2'];

mostraInformçãoesDoAluno($name, $email, $age, $np1, $np2);

function mostraInformçãoesDoAluno($name,$email,$idade, $np1, $np2){
  
  echo "Nome: $name <br> Email: $email <br> Idade: $idade <br>";
  echo $np1 > $np2 ? "Maior nota: ". $np1 : "Maior nota: ". $np2;
  echo "<br>Média: ". ($np1 + $np2)/2;
}

