<?php
	$nome = $_POST['nome'];
    $PrimeiraNota = $_POST['PrimeiraNota'];
    $SegundaNota = $_POST['SegundaNota'];
    $TerceiraNota = $_POST['TerceiraNota'];
    $media = ($PrimeiraNota + $SegundaNota + $TerceiraNota)/3;
  
 // echo "Média: $media";

    //echo "Nome do usuário: " . $nome;
    //echo "<br>OSua Média: " . ($PrimeiraNota + $SegundaNota)/2; 
    echo "<br>O Aluno $nome ficou com $media de média: " ; 


?>