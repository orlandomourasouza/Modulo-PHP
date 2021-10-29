<?php
	$salario = $_GET['salario'];
    $vendas = $_POST['vendas'];
   
    $comissao = ($vendas * 4%)/3;
  
 // echo "Média: $media";

    //echo "Nome do usuário: " . $nome;
    //echo "<br>OSua Média: " . ($PrimeiraNota + $SegundaNota)/2; 
    echo "<br>O valor da sua comissão é : " . $comissao; 
    echo "<br>Seus redimentos total é : " . $comissao + $salario;


?>