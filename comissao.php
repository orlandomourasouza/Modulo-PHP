<?php
	$salario = $_GET['salario'];
    $vendas = $GET['vendas'];
    $porcentagem = 4
   
    $comissao = $vendas * ($porcentagem / 100);
  
    echo "<br>O valor da sua comissão é : " . $comissao; 
    echo "<br>Seus redimentos total é : " . $comissao + $salario;


?>