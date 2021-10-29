<?php
	$basemaior = $_REQUEST['basemaior'];
    $basemenor = $_REQUEST['basemenor'];
    $altura = $_REQUEST['altura'];
    
    $calculo1 = ($basemaior + $basemenor) / 2;
    $calculo2 = $calculo1 * $altura;
       
        echo "<br>Suas dimensões do trapézio são : " . $calculo2 ; 
?>