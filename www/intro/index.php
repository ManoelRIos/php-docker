<html>
  <body>
  
  <?php
  #Validando inputs
  if(isset($_POST['send-form'])){
    #Array de erros
    $erros = array();

    #Validação de idade
    if(!$idade = filter_input(INPUT_POST, 'idade',  FILTER_VALIDATE_INT)){
      $erros[] = "Idade precisa ser um número";
    }elseif( $idade > 200 || $idade < 18){
      $erros[] = "Insira uma idade válida";
    }
    #Validação de email
    if(!$email = filter_input(INPUT_POST, 'email',  FILTER_VALIDATE_EMAIL)){
      $erros[] = "Insira um email válido";
    }
    #Validação de money
    if(!$money = filter_input(INPUT_POST, 'money', FILTER_VALIDATE_FLOAT)){
      $erros[] = "Insira valores de ponto flutuante (00.00)";
    }
    #Validação de IP
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
      $erros[] = "Insira um IP válido";
    }
    #Validação de URL
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
      $erros[] = "Insira um link válido";
    }

    if(!empty($erros)){
      foreach($erros as $erro){
        echo "<li> $erro </li>";
      }
    }else{
      echo 'Seus dados estão corretos';
      foreach($_POST as $data){
        echo $data. "<br>";
      }
    }

  }
  ?>
    
  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <input type="text" name="idade" placeholder="Idade"><br>
  <input type="text" name="email" placeholder="Email"><br>
  <input type="text" name="money" placeholder="Money"><br>
  <input type="text" name="ip" placeholder="IP"><br>
  <input type="text" name="url" placeholder="URL"><br>
  <button type="submit" name="send-form">Enviar</button>

  </form>

  </body>
</html>