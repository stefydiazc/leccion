<?php

class clsConexion
{
   
    
    function Conectar()
    {
        $conn=mysql_connect("localhost","root","") or die(mysql_error());
        mysql_select_db("leccion", $conn);
        $sql = "select * from Calificacion";
        $result = mysql_query($sql, $conn) or die(mysql_error());

        while ($row = mysql_fetch_assoc($result)) {
        foreach ($row as $name => $value) {
        echo "$name: $value <br /> \n";
            }
        }        
	
    }
    
    function EjecutarSQL($sql)
    {
        $conex=$this->Conectar();
        if($conex!=null)
        {
            return mysql_query($sql,$conex);
        }
        return null;
    }
}

?>