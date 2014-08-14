<?php

	$nombre = $_POST("nombre");
	$parcial = $_POST("parcial");
	$final = $_POST("final");
	$mejoramiento = $_POST("mejoramiento");
	$promedio = "";

if (($parcial > $final) && ($parcial > $mejoramiento)) {
    
    if ($final > $mejoramiento) {
    	$promedio = ($parcial + $final)/2;
    	echo 'El promedio es:'. $promedio;
    }else{
    	$promedio = ($parcial + $mejoramiento)/2;
    	echo 'El promedio es:'. $promedio;
    }
} else
{
    $promedio = ($final + $mejoramiento)/2;
    echo 'El promedio es:'. $promedio;
}


?>
