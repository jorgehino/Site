<?php
  class ModelUsuario{
    
   public $resultado ;
   public $bd;  
   
   function GetDados(){//retorna o resultado da consulta.
     $sql = "SELECT * FROM usuarios";
     
     try {
        include("../include/conexao.inc.php");
        $query = $conn->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
     }catch(PDOException $e){
          echo $e->getMessage();
     }
     //var_dump($this->resultado);
   }
}
?>
    