<?php

class Estudiante
	
	private $idEstudiante;
	private $nombre;

	
	function __construct($id_estudiante, $nombre)
	{
		$this->idEstudiante = $idEstudiante;
		$this->nombre = $nombre;
		$this->parcial = $parcial;
		$this->final = $final;
		$this->mejoramiento = $mejoramiento;
	}

	

function setIdEstudiante($idEstudiante){
       $this->idEstudiante = $idEstudiante;
     } 
 
  function getIdEstudiante(){
    return $this->idEstudiante;
  }  
  
 
   function setNombre($nombre){
       $this->nombre = $nombre;
       
     } 
  
  function getNombre(){
    return $this->nombre;
  }
 
     function setParcial($parcial){
         if ($parcial >0 && $parcial =< 100)
       $this->finall = $finall;
     } else
     echo "Ingrese una nota";
       
     } 
  
  function getParcial(){
    return $this->parcial;
  }
  
   function setFinall($finall){
   if ($parcial >0 && $parcial =< 100)
       $this->finall = $finall;
     } else
     echo "Ingrese una nota";
  
   function getFinall(){
    return $this->finall;
  }
  
   function setMejoramiento($mejoramiento){
       if ($parcial >0 && $parcial =< 100)
       $this->finall = $finall;
     } else
     echo "Ingrese una nota";
     } 
  function getMejoramiento(){
    return $this->mejoramiento;
  }

}


?>